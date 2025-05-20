<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index', compact('paises'));
    }

    public function create()
    {
        return view('pais.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pais_codi' => 'required|string|max:3|unique:tb_pais,pais_codi',
            'pais_nomb' => 'required|string|max:100',
        ]);

        Pais::create([
            'pais_codi' => $request->pais_codi,
            'pais_nomb' => $request->pais_nomb,
        ]);

        return redirect()->route('paises.index');
    }

    public function edit($id)
    {
        $pais = Pais::findOrFail($id);
        return view('pais.edit', compact('pais'));
    }

    public function update(Request $request, $id)
    {
        $pais = Pais::findOrFail($id);

        $request->validate([
            'pais_nomb' => 'required|string|max:100',
        ]);

        $pais->pais_nomb = $request->pais_nomb;
        $pais->save();

        return redirect()->route('paises.index');
    }

    public function destroy($id)
    {
        $pais = Pais::findOrFail($id);
        $pais->delete();

        return redirect()->route('paises.index');
    }
}
