<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunaController extends Controller
{
    public function index(Request $request)
    {
        $comunas = DB::table('tb_comuna')
            ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
            ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
            ->get();

        return $request->expectsJson()
            ? response()->json($comunas)
            : view('comuna.index', ['comunas' => $comunas]);
    }

    public function create()
    {
        $municipios = DB::table('tb_municipio')
            ->orderBy('muni_nomb')
            ->get();

        return view('comuna.new', ['municipios' => $municipios]);
    }

    public function store(Request $request)
    {
        $data = $request->expectsJson()
            ? $request->only(['comu_nomb', 'muni_codi'])
            : ['comu_nomb' => $request->name, 'muni_codi' => $request->code];

        $comuna = Comuna::create($data);

        return $request->expectsJson()
            ? response()->json(['message' => 'Comuna creada', 'comuna' => $comuna], 201)
            : redirect()->route('comunas.index');
    }

    public function edit($id)
    {
        $comuna = Comuna::findOrFail($id);
        $municipios = DB::table('tb_municipio')->orderBy('muni_nomb')->get();

        return view('comuna.edit', [
            'comuna' => $comuna,
            'municipios' => $municipios
        ]);
    }

    public function update(Request $request, $id)
    {
        $comuna = Comuna::findOrFail($id);

        $data = $request->expectsJson()
            ? $request->only(['comu_nomb', 'muni_codi'])
            : ['comu_nomb' => $request->name, 'muni_codi' => $request->code];

        $comuna->update($data);

        return $request->expectsJson()
            ? response()->json(['message' => 'Comuna actualizada', 'comuna' => $comuna])
            : redirect()->route('comunas.index');
    }

    public function destroy(Request $request, $id)
    {
        $comuna = Comuna::findOrFail($id);
        $comuna->delete();

        return $request->expectsJson()
            ? response()->json(['message' => 'Comuna eliminada'])
            : redirect()->route('comunas.index');
    }
}