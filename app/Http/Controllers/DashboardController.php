<?php

namespace App\Http\Controllers;

use App\Models\Construction;
use App\Models\State;
use App\Models\Study;
use App\Models\Supervision;
use App\Models\User;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Muestra los resultados del reporte sobre los usuarios y obras en general
     * para ser mostrados en el dashboard principal.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        // $memoryBefore = memory_get_usage();
        // $users = User::all();
        $users = User::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
        $allUsers = User::all();
        $roleConstruction = User::role('Construcción');
        $roleStudy = User::role('Estudios');
        $roleSupervision = User::role('Supervisión');
        $usersActive = User::where('is_active', 1)->get();
        $usersInactive = User::where('is_active', 0)->get();
        $constructions = Construction::all();
        // $constructions = Work::typeWork(1)->get();
        $lastConstruction = Construction::all()->last();
        $studies = Study::all();
        $lastStudy = Study::all()->last();
        $supervisions = Supervision::all();
        $lastSupervision = Supervision::all()->last();
        // $usersConstruction = Work::where('type_work_id', 3)->take(3)->max('user_id');
        // $q = Work::all()->groupBy('user_id');
        // dd($q);
        //$usersConstruction = Work::where('type_work_id', 3)->groupBy('user_id')->take(3)->get(); //official momentaneo
        $usersConstruction = Work::latest()->typeWork(1)->take(3)->get();
        $usersStudy = Work::latest()->typeWork(2)->take(3)->get();
        $usersSupervision = Work::latest()->typeWork(3)->take(3)->get();
        $worksForDepartaments = State::all();

        //constructions
        // $worksAssignmentsConstruction = Work::where('user_id', auth()->user()->id)->get();
        // $months = Work::months();
        // $worksAssignmentsConstruction = Work::monthlyCountConstruction();
        $worksAssignmentsConstruction = $this->constructionAssignments(1);
        $worksAssignmentsStudy = $this->constructionAssignments(2);
        $worksAssignmentsSupervision = $this->constructionAssignments(3);

        /* $memoryAfter = memory_get_usage();
        $memoryUsage = $memoryAfter - $memoryBefore;

        return "La tarea de procesamiento del archivo utilizó " . $memoryUsage . " bytes de memoria."; */

        return view('dashboard', [
            'users' => $users,
            'roleConstruction' => $roleConstruction,
            'roleStudy' => $roleStudy,
            'roleSupervision' => $roleSupervision,
            'allUsers' => $allUsers,
            'usersActive' => $usersActive,
            'usersInactive' => $usersInactive,
            'constructions' => $constructions,
            'studies' => $studies,
            'supervisions' => $supervisions,
            'lastConstruction' => $lastConstruction,
            'lastStudy' => $lastStudy,
            'lastSupervision' => $lastSupervision,
            'usersConstruction' => $usersConstruction,
            'usersStudy' => $usersStudy,
            'usersSupervision' => $usersSupervision,
            'worksForDepartaments' => $worksForDepartaments,
            'worksAssignmentsConstruction' => $worksAssignmentsConstruction,
            'worksAssignmentsStudy' => $worksAssignmentsStudy,
            'worksAssignmentsSupervision' => $worksAssignmentsSupervision,
        ]);
    }

    /**
     * Devuelve la cantidad en bytes y MB de memoria disponible del sistema y durante el procesamiento de una tarea.
     *
     * @return \Illuminate\Http\JsonResponse
    */
    protected function calculateMemoryUsed()
    {
        $totalMemory = memory_get_peak_usage(true); // Obtener la cantidad total de memoria disponible en el sistema
        $memoryBefore = memory_get_usage(); // Obtener la cantidad de memoria utilizada antes de procesar los datos

        $this->index(); // llamar a la función a ser evaluada

        $memoriaAfter = memory_get_usage(); // Obtener la cantidad de memoria utilizada después de procesar los datos
        $memoryUsed = $memoriaAfter - $memoryBefore; // Calcular la cantidad de memoria utilizada durante el procesamiento

        //convert bytes to MB
        $MU_MB = $this->convert_MB($memoryUsed);
        $TM_MB = $this->convert_MB($totalMemory);

        $info = [
            'Memoria displonible en el sistema' => $totalMemory . " bytes => " . round($TM_MB, 2) . " MB",
            'Memoria utilizada durante el procesamiento' => $memoryUsed . " bytes => " . round($MU_MB, 3) . " MB",
        ];

        return response()->json($info); // Devolver la información en forma de objeto JSON
    }

    /**
     * Convierte un valor en bytes a megabytes dividiéndolo por 1024*1024.
     * @param int $value El valor en bytes a convertir.
     * @return float El valor en megabytes.
    */
    protected function convert_MB($value) : float
    {
        return $value / (1024 * 1024);
    }

    /**
     * Muestra los resultados del reporte sobre las obras civiles a más detalle en el dashboard de obras
     *
     * @return \Illuminate\View\View
    */
    public function works()
    {
        $months = Work::months();
        $works = Work::monthlyCount();
        $dataWorks = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $key => $month) {
            $dataWorks[$month-1] = $works[$key];
        }
        $totalWorks = Work::currentYear();
        $deregistering_works = Work::currentYear()->workStatus(0)->get();
        $constructions = Work::typeWork(1)->get();
        $studies = Work::typeWork(2)->get();
        $supervisions = Work::typeWork(3)->get();
        $states = State::all();
        $points = [];
        $pointsTwo = [];
        $consDep = [];
        $stuDep = [];
        $supDep = [];

        foreach ($states as $state) {
            // $points[] = ['name' => $state->name, 'y' => $totalWorks->count(), 'z' => $state->cities->count()];
            // w = totalDpt, x = construction, y = study, z = supervision
            $constructionsDpto = $state->cities->where('type_work_id', 1)->whereBetween('created_at', [
                Carbon::now()->startOfYear(), Carbon::now()->endOfYear(), ])->count();
            $studiesDpto = $state->cities->where('type_work_id', 2)->whereBetween('created_at', [
                Carbon::now()->startOfYear(), Carbon::now()->endOfYear(), ])->count();
            $supervisionsDpto = $state->cities->where('type_work_id', 3)->whereBetween('created_at', [
                Carbon::now()->startOfYear(), Carbon::now()->endOfYear(), ])->count();
            $points[] = [
                'name' => $state->name,
                'w' => $state->cities->whereBetween('created_at', [
                    Carbon::now()->startOfYear(), Carbon::now()->endOfYear(), ])->count(),
                'x' => $constructionsDpto,
                'y' => $studiesDpto,
                'z' => $supervisionsDpto,
            ];

            $pointsTwo[] = [
                $state->name,
                $state->cities->whereBetween('created_at', [ Carbon::now()->startOfYear(), Carbon::now()->endOfYear(), ])->count()
            ];
            $consDep[] = [$constructionsDpto];
            $stuDep[] = [$studiesDpto];
            $supDep[] = [$supervisionsDpto];
        }

        /*
            $y2020 = [];
            $y2021 = [];
            $y2022 = [];

            foreach ($states as $state) {
                $a = $state->cities->where('created_at', '>=', '2020-01-01')->where('created_at', '<=', '2020-12-31')->count();
                $b = $state->cities->where('created_at', '>=', '2021-01-01')->where('created_at', '<=', '2021-12-31')->count();
                $c = $state->cities->where('created_at', '>=', '2022-01-01')->where('created_at', '<=', '2022-12-31')->count();
                $y2020[] = [
                    $a
                ];
                $y2021[] = [
                    $b
                ];
                $y2022[] = [
                    $c
                ];
            }
        */

        return view('dashboard-works', [
            'works' => $dataWorks,
            'totalWorks' => $totalWorks,
            'constructions' => $constructions,
            'studies' => $studies,
            'supervisions' => $supervisions,
            'states' => $points,
            'statesTwo' => $pointsTwo,
            'consDep' => $consDep,
            'stuDep' => $stuDep,
            'supDep' => $supDep,
            'deregistering_works' => $deregistering_works
        /*'y2020' => $y2020,
            'y2021' => $y2021,
            'y2022' => $y2022, */
            // 'years' => $years
        ]);
    }

    /**
     * Devuelve un array de asignaciones de construcción según el tipo de trabajo.
     *
     * @param string $type Tipo de trabajo.
     * @return array Array de asignaciones de construcción.
    */
    public function constructionAssignments($type) : array
    {
        // Recuperar las asignaciones de cada área según el tipo de trabajo especificado, ordenarlas por fecha de creación y filtrarlas para que solo se incluyan las del año actual.
        $constructionAssignment = Work::assignmentContructionArea()
                                    ->typeWork($type)
                                    ->orderBy('created_at')
                                    ->currentYear()->get()
                                    // ->whereYear('created_at','2023')->get()
                                    // Agrupar las asignaciones por mes
                                    ->groupBy(function ($date) {
                                            return $date->created_at->month;
                                        }
                                    )
                                    // Contar el número de asignaciones por mes
                                    ->map(function ($group) {
                                            return $group->count();
                                        }
                                    )
                                    // Agregar ceros para los meses que no tienen asignaciones con "union" y "array_fill".
                                    ->union(array_fill(1, 12, 0))
                                     // Ordenar los elementos del array por mes
                                    ->sortKeys()
                                     // Convertir el array en un array indexado numéricamente
                                    ->toArray();
        return (array_values($constructionAssignment));
    }
}
