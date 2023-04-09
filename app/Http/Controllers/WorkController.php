<?php

namespace App\Http\Controllers;

use App\Exports\WorksDataExport;
use App\Http\Requests\WorkRequest;
use App\Models\Associate_consultant;
use App\Models\Construction;
use App\Models\Service;
use App\Models\Study;
use App\Models\Supervision;
use App\Models\TypeWork;
use App\Models\User;
use App\Models\Work;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class WorkController extends Controller
{
    use WithPagination;

    /**
     * Muestra la lista de obras civiles para el director general.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('admin.works.index');
    }

    /**
     * Muestra el formulario de registro de obras civiles, juntamente con el listado de los tipos de obras,
     * encargados según el rol, los consultores asociados y los servicios, para su correspondiente selección.
     *
     * @return \Illuminate\View\View
    */
    public function create()
    {
        $users = User::where('is_active', 1)->where('id', '!=', 1)->get();
        $type_works = TypeWork::all();
        $associate_consultants = Associate_consultant::all();
        $services = Service::all();
        return view('admin.works.create', [
            'users' => $users,
            'type_works' => $type_works,
            'associate_consultants' => $associate_consultants,
            'services' => $services
        ]);
    }

    /**
     * Registra los datos llenados en el formulario de registro de obras civiles y almacena la información
     * en otras tablas según el tipo de obra de la función "addCustom()".
     *
     * @param  App\Http\Requests\WorkRequest  $request
     * @return \Illuminate\Http\RedirectResponse
    */
    public function store(WorkRequest $request)
    {
        // dd($request->all());
        $startTime = microtime(true);

        $work = Work::create($request->validated());
        $work->services()->attach(request('services'));
        $work->associate_consultants()->attach(request('associate_consultants'));
        $this->addCustom($work);

        // Registra la hora de finalización de la función
        $endTime = microtime(true);
        // Calcula la duración de la función
        $duration = round($endTime - $startTime, 2); // Duración en segundos con 2 decimales
        // Calcula la cantidad de registros por hora
        $registrosPorHora = round(3600 / $duration); // Redondea al entero más cercano

        // return response($registrosPorHora);
        return redirect()->route('admin.works.index')->with('status', 'work-created');
    }

    /**
     * Registra la obra según el tipo de obra seleccionado en el formulario.
     *
     * @param $work
    */
    public function addCustom($work) : void
    {
        if ($work->type_work_id === '1') {
            $this->addConstruction($work);
        }
        if ($work->type_work_id === '2') {
            $this->addStudy($work);
        }
        if ($work->type_work_id === '3') {
            $this->addSupervision($work);
        }
    }

    /**
     * En caso de que la obra sea de tipo "Construcción" se registra tambien en la tabla de "constructions"
     *
     * @param $work
    */
    public function addConstruction($work) : void
    {
        Construction::create(['work_id'=> $work->id, 'name' => $work->name]);
    }

    /**
     * En caso de que la obra sea de tipo "Estudio" se registra tambien en la tabla de "studies"
     *
     * @param $work
    */
    public function addStudy($work) : void
    {
        Study::create(['work_id'=> $work->id, 'name' => $work->name]);
    }

    /**
     * En caso de que la obra sea de tipo "Supervisión" se registra tambien en la tabla de "supervisions"
     *
     * @param $work
    */
    public function addSupervision($work) : void
    {
        Supervision::create(['work_id'=> $work->id, 'name' => $work->name]);
    }

    /**
     * Muestra el formulario de actualización de una obra civil en específica con los datos prellenados de acuerdo
     * con el registro realizado anteriormente.
     *
     * @param \App\Models\Work $work - La obra civil a ser actualizada
     * @return \Illuminate\View\View
    */
    public function edit(Work $work)
    {
        $users = User::where('is_active', 1)->where('id', '!=', 1)->get();
        $type_works = TypeWork::all();
        $associate_consultants = Associate_consultant::all();
        $services = Service::all();
        $workHasServices = array_column(json_decode($work->services, true), 'id');

        return view('admin.works.edit', [
            'work' => Work::findOrFail(($work->id)),
            // 'works' => $works,
            'users' => $users,
            'type_works' => $type_works,
            'associate_consultants' => $associate_consultants,
            'services' => $services,
            'workHasServices' => $workHasServices
        ]);
    }

    /**
     * Actualiza los datos llenados en el formulario de actualización de obras civiles y según el tipo de obra
     * también se actualizan en las tablas correspondientes a estas.
     *
     * @param  App\Http\Requests\WorkRequest  $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\RedirectResponse
    */
    public function update(WorkRequest $request, Work $work)
    {
        $work->update($request->all());
        $work->services()->attach(request('services'));
        $work->associate_consultants()->attach(request('associate_consultants'));
        if ($work->type_work_id === '1') {
            $work->construction()->updateOrCreate(['work_id'=> $work->id, 'name' => $work->name]);
            Supervision::where('work_id', $work->id)->delete();
            Study::where('work_id', $work->id)->delete();
        }
        if ($work->type_work_id === '2') {
            $work->study()->updateOrCreate(['work_id'=> $work->id, 'name' => $work->name]);
            Construction::where('work_id', $work->id)->delete();
            Supervision::where('work_id', $work->id)->delete();
        }
        if ($work->type_work_id === '3') {
            $work->supervision()->updateOrCreate(['work_id'=> $work->id, 'name' => $work->name]);
            Construction::where('work_id', $work->id)->delete();
            Study::where('work_id', $work->id)->delete();
        }

        return redirect()->route('admin.works.index')->with('status', 'work-updated');
    }

    /**
     * Muestra más detalles de toda la información alamcenada de cada obra
     *
     * @param \App\Models\Work $work - La obra civil a ser mostrada
     * @return \Illuminate\View\View
    */
    public function show(Work $work)
    {
        $this->authorize('view', $work);
        return view('admin.works.show', [
            'work' => Work::findOrFail($work->id),
        ]);
    }

    /**
     * Exporta la información de todas las obras civiles en formato de Excel
     *
     * @return App\Exports\WorksDataExport
    */
    public function exportExcel()
    {
        return Excel::download(new WorksDataExport, 'obras-civiles.xlsx');
    }
}
