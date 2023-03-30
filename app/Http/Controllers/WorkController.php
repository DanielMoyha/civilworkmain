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
use PhpOffice\PhpSpreadsheet\Style\Supervisor;

class WorkController extends Controller
{
    use WithPagination;
    /** Director General */
    public function index()
    {
        return view('admin.works.index');
    }

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

    public function addConstruction($work) : void
    {
        Construction::create(['work_id'=> $work->id, 'name' => $work->name]);
    }

    public function addStudy($work) : void
    {
        Study::create(['work_id'=> $work->id, 'name' => $work->name]);
    }

    public function addSupervision($work) : void
    {
        Supervision::create(['work_id'=> $work->id, 'name' => $work->name]);
    }

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

    public function show(Work $work)
    {
        $this->authorize('view', $work);
        return view('admin.works.show', [
            'work' => Work::findOrFail($work->id),
        ]);
    }

    public function exportExcel()
    {
        return Excel::download(new WorksDataExport, 'obras-civiles.xlsx');
    }
    /** END Director General */

}
