<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Study;
use App\Models\Type;
use App\Models\Work;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    public function index()
    {
        return view('admin.studies.index');
    }

    /** Role Study */
    public function e_assignments()
    {
        $works = Work::where('user_id', auth()->user()->id)->orderByDesc('updated_at')->get();

        return view('studies.assignments.index', [
            'works' => $works
        ]);
    }

    public function e_type_studies()
    {
        return view('studies.type_studies.index');
    }

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
        * Sube y guarda archivos para un estudio determinado.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Models\Study  $study
        * @return \Illuminate\Http\RedirectResponse
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
    /** End Role Study */
}
