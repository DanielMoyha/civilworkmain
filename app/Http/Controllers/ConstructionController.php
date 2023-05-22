<?php

namespace App\Http\Controllers;

use App\Models\Construction;
use App\Models\Material;
use App\Models\Work;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    /**
     * Muestra el litado de todas las construcciones de obra para el DIRECTOR GENERAL.
     *
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('admin.construcions.index');
    }

    /**
     * Muestra el listado de asignaciones de obras a cada usuario del área de construcción en orden descendiente tomando
     * en cuenta la fecha de actualización de obra.
     *
     * @return \Illuminate\View\View
    */
    public function c_assignments()
    {
        $works = Work::where('user_id', auth()->user()->id)->orderBy('updated_at', 'asc')->get();
        // $works = Work::where('user_id', auth()->user()->id)->orderByDesc('updated_at')->get();
        return view('builders.allowances.index', [
            'works' => $works
        ]);
    }

    /**
     * Muestra el detalle de una construcción de obra determinada.
     *
     * @param \App\Models\Construction  $construction
     * @return \Illuminate\View\View
    */
    public function show_assignment(Construction $construction)
    {
        return view('builders.allowances.show', [
            'construction' => $construction
        ]);
    }

    /**
     * Muestra el listado de materiales de construcción de una obra de construcción determinada.
     *
     * @param \App\Models\Construction  $construction
     * @return \Illuminate\View\View
    */
    public function c_materials(Construction $construction)
    {
        return view('builders.materials.index', [
            'construction' => $construction
        ]);
    }

    /**
     * Muestra el formulario de asignación de materiales de construcción a una obra de construcción determianda.
     *
     * @param \App\Models\Construction  $construction
     * @return \Illuminate\View\View
    */
    public function c_materials_construction(Construction $construction)
    {
        $this->authorize('view', $construction->work);
        $materials = Material::all();
        $constructionHasMaterial = array_column(json_decode($construction->materials, true), 'id');
        return view('builders.allowances.assignment-materials', [
            'construction' => $construction,
            'materials' => $materials,
            'constructionHasMaterial' => $constructionHasMaterial
        ]);
    }

    /**
     * Guarda y actualiza los cambios pertinentes a la asignación de materiales de contrucción de una obra de
     * construcción determinada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Construction  $construction
     * @return \Illuminate\Http\RedirectResponse
    */
    public function update_materials_construction(Request $request, Construction $construction)
    {
        // dd($request->all());
        $this->authorize('view', $construction->work);
        $construction = Construction::find($construction->id);
        Construction::where('id', $construction->id)->update([
            'id' => $construction->id,
            'work_id' => $request->construction->work->id,
            'name' => $request->construction->work->name,
        ]);
        $construction->materials()->sync(request('materials'));

        return redirect()->back()->with('status', 'materials-action');
    }
}
