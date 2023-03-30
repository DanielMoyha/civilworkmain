<?php

namespace App\Http\Controllers;

use App\Models\Construction;
use App\Models\Material;
use App\Models\Work;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    /**
        * Muestra la vista de índice de construcciones para el panel de administración.
        *
        * @return \Illuminate\View\View
    */
    /** Director General */
    public function index()
    {
        return view('admin.construcions.index');
    }
    /** End - Director General */


    /** Constructores */
    public function c_assignments()
    {
        $works = Work::where('user_id', auth()->user()->id)->orderByDesc('updated_at')->get();
        return view('builders.allowances.index', [
            'works' => $works
        ]);
    }

    public function show_assignment(Construction $construction)
    {
        return view('builders.allowances.show', [
            'construction' => $construction
        ]);
    }

    //registered new materials to table 'materials'
    public function c_materials(Construction $construction)
    {
        return view('builders.materials.index', [
            'construction' => $construction
        ]);
    }

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

    //el registro es en la tabla construcciones
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
    /** END - Constructores */
}
