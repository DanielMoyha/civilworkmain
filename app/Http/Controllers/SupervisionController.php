<?php

namespace App\Http\Controllers;

use App\Models\Follow_up;
use App\Models\Supervision;
use App\Models\TemporaryFile;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SupervisionController extends Controller
{
    /**
     * Muestra el litado de todas las supervisiones de obra para el DIRECTOR GENERAL.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('admin.supervisions.index');
    }

    /**
     * Muestra el listado de asignaciones de obras a cada usuario del área de supervisión en orden descendiente tomando en
     * cuenta la fecha de actualización de obra.
     *
     * @return \Illuminate\View\View
    */
    public function s_assignments()
    {
        $works = Work::where('user_id', auth()->user()->id)->orderByDesc('updated_at')->get();

        return view('supervisory.assignments.index', [
            'works' => $works
        ]);
    }

    /**
     * Muestra el detalle de una supervisión de obra determinada.
     *
     * @param \App\Models\Supervision  $supervision
     * @return \Illuminate\View\View
    */
    public function show_assignment(Supervision $supervision)
    {
        $this->authorize('view', $supervision->work);
        return view('supervisory.assignments.show', [
            'supervision' => $supervision
        ]);
    }

    /**
     * Muestra el litado de tareas correspondientes
                        * QUITAR!!!!
     *
     * @return \Illuminate\View\View
    */
    public function s_tasks()
    {
        return view('supervisory.tasks.index');
    }

    /**
     * Muestra el formulario de registro de tareas para una obra de supervisión determinada.
     *
     * @param \App\Models\Supervision  $supervision
     * @return \Illuminate\View\View
    */
    public function create_task(Supervision $supervision)
    {
        $this->authorize('view', $supervision->work);
        return view('supervisory.tasks.create', [
            'supervision' => $supervision
        ]);
    }

    /**
     * Muestra el litado de seguimiento de todas las obras de supervisión, es decir, las imágenes almacenadas de
     * cada obra.
     *
     * @return \Illuminate\View\View
    */
    public function s_follow_ups()
    {
        $followUps = Follow_up::all();
        $grouped = $followUps->groupBy('supervision_id');
        // $works = Work::where('type_work_id', 3)->where('user_id', auth()->user()->id)->get();
        // dd($grouped);
        return view('supervisory.follow-ups.index', [
            // 'works' => $works,
            'grouped' => $grouped,
            'followUps' => $followUps,
        ]);
    }

    /**
     * Muestra el formulario de registro de supervisión de una obra determinada.
     *
     * @param \App\Models\Supervision  $supervision
     * @return \Illuminate\View\View
    */
    public function create_follow_up(Supervision $supervision)
    {
        $this->authorize('view', $supervision->work);
        return view('supervisory.follow-ups.create', [
            'supervision' => $supervision
        ]);
    }

    /**
     * Guarda y almacena las imágenes de supervisión de una obra determinada
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Supervision  $supervision
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
    */
    public function store_follow_up(Request $request, Supervision $supervision)
    {
        // dd($request);
        $this->authorize('view', $supervision->work);
        $messages = [
            'supervision_id.required' => 'Es necesario indicar la obra',
            'description.required' => 'Describa el avance, por favor',
            'date.required' => 'Indique la fecha, por favor',
            'image.required' => 'Suba una imagen, por favor',
            'image.max' => 'La imagen no debe pasar los 5MB',
        ];
        $validator = Validator::make($request->all(), [
            'supervision_id' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
            'image' => 'required|max:5120',
        ], $messages);
        $tmp_file = TemporaryFile::where('folder', $request->image)->first();

        if($validator->fails() && $tmp_file) {
            Storage::deleteDirectory('followUp/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return redirect()->back()->withErrors($validator)->withInput();
        }elseif($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($tmp_file) {
            Storage::copy('followUp/tmp/'.$tmp_file->folder.'/'.$tmp_file->file, 'followUp/'.$tmp_file->folder.'/'.$tmp_file->file);

            Follow_up::create([
                'supervision_id' => $request->supervision->id,
                'description' => $request->description,
                'date' => $request->date,
                'image' => $tmp_file->folder.'/'.$tmp_file->file,
            ]);
            Storage::deleteDirectory('followUp/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return redirect()->route('supervision.followups')->with('status', 'followUp-created');
        }
        return redirect()->back()->with('status', 'followUp-error');
    }

    /**
     * Maneja la subida de archivos temporales.
     *
     * @param \Illuminate\Http\Request  $request
     * @return string El identificador único de la carpeta del archivo temporal subido.
    */
    public function tmpUpload(Request $request)
    {
        // Verifica si hay un archivo en la solicitud HTTP.
        if($request->hasFile('image')) {
            $image = $request->file('image'); // Obtiene el archivo de la solicitud HTTP.
            $file_name = $image->getClientOriginalName(); // Obtiene el nombre del archivo.
            $folder = uniqid('followUp', true); // Genera un identificador único para la carpeta.
            $image->storeAs('followUp/tmp/'.$folder, $file_name); // Almacena el archivo en la carpeta correspondiente.
            // Crea un registro en la tabla "TemporaryFile" con los datos del archivo subido.
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $folder;// Devuelve el identificador único de la carpeta.
        }
        return ''; // Si no se envió ningún archivo, devuelve una cadena vacía.
    }

    /**
     * Maneja la eliminación de archivos temporales.
     *
     * @return \Illuminate\Http\Response
    */
    public function tmpDelete()
    {
        $tmp_file = TemporaryFile::where('folder', request()->getContent())->first();
        if ($tmp_file) {
            Storage::deleteDirectory('followUp/tmp/'.$tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }

    /**
     * Elimina la supervisión (incluida la imagen) de una obra de supervisión determinada.
     *
     * @param \App\Models\Follow_up  $follow_up
     * @return \Illuminate\Http\RedirectResponse
    */
    public function destroy(Follow_up $follow_up)
    {
        $this->authorize('view', $follow_up->supervision->work);
        $follow_up = Follow_up::find($follow_up->id);
        // dd($follow_up);
        if($follow_up) {
            Storage::delete('followUp/'.$follow_up->image);
            $follow_up->delete();
            return redirect()->back()->with('status', 'followUp-deleted');
        }
    }
}
