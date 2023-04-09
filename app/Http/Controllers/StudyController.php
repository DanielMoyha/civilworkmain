<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Study;
use App\Models\Type;
use App\Models\Work;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    /**
     * Muestra la vista de índice de estudios de obra para el DIRECTOR GENERAL.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('admin.studies.index');
    }

    /**
     * Muestra el listado de asignaciones de obras a cada usuario del área de estudios en orden descendiente según
     * la fecha de actualización de obra.
     *
     * @return \Illuminate\View\View
    */
    public function e_assignments()
    {
        $works = Work::where('user_id', auth()->user()->id)->orderByDesc('updated_at')->get();

        return view('studies.assignments.index', [
            'works' => $works
        ]);
    }

    /**
     * Muestra el listado de los tipos de estudios extras.
     *
     * @return \Illuminate\View\View
    */
    public function e_type_studies()
    {
        return view('studies.type_studies.index');
    }

    /**
     * Muestra el detalle de cada asignación de obra juntamente con los tipo de estudios extras ya asignados y el
     * formulario para asignar nuevos estudios extra en caso de ser necesario.
     *
     * @return \Illuminate\View\View
    */
    public function show_assignment(Study $study)
    {
        $this->authorize('view', $study->work);
        $typeStudies = Type::all();
        $studyHasTypeStudies = array_column(json_decode($study->types, true), 'id');
        return view('studies.assignments.show', [
            'study' => $study,
            'types' => $typeStudies,
            'studyHasTypeStudies' => $studyHasTypeStudies
        ]);
    }

    /**
     * Actualiza los estudios extra según los cambios realizados de cada obra de estudio designada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Study  $study
     * @return \Illuminate\Http\RedirectResponse
    */
    public function update_typeStudies(Request $request, Study $study)
    {
        // dd($request);
        $this->authorize('view', $study->work);
        $study = Study::find($study->id);
        Study::where('id', $study->id)->update([
            'id' => $request->study->id,
            'work_id' => $request->study->work->id,
            'name' => $request->study->work->name,
        ]);
        $study->types()->sync(request('types'));
        return redirect()->route('study.assignments.show', $study->id)->with('status', 'typeStudies-create');
    }

    /**
     * Muestra el formulario para subir documentos de un estudio de obra determinado.
     *
     * @return \Illuminate\View\View
    */
    public function e_studies_upload_documents(Study $study)
    {
        // $documents = Document::where('study_id', $study->id);
        $this->authorize('view', $study->work);
        $documents = Document::all();
        return view('studies.documents.create', [
            'study' => $study,
            'documents' => $documents
        ]);
    }

    /**
     * Sube y almacena archivos para un estudio determinado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
    */
    public function e_studies_upload_documents_save(Request $request, Study $study)
    {
        $this->authorize('view', $study->work);
        $validator = Validator::make($request->all(), [
            'study_id' => '',
            'files' => 'required',
            'files.*' => 'mimes:csv,xls,pdf,docx|max:2048',
        ]);

        if($validator->fails()) {
            // dd('error');
            return redirect()->back()->with('status','upload-document-error');
        }

        $files = [];
        if ($request->file('files')){
            foreach($request->file('files') as $key => $file)
            {
                // $fileName = time().rand(1,99).'.'.$file->extension();
                $fileNameNormal = $file->getClientOriginalName();
                $fileName = Str::uuid().'.'.$file->extension();
                $file->move(public_path('uploads'), $fileName);
                $files[$key]['study_id'] = $study->id;
                $files[$key]['name'] = $fileNameNormal;
                $files[$key]['file'] = $fileName;
            }
        }
        foreach ($files as $key => $file) {
            Document::create($file);
        }

        return redirect()->back()->with('status','upload-document');
    }
}
