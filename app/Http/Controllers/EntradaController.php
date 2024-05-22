<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::all();
        return response()->json($entradas);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $entrada = Entrada::create($request->all());
        return response()->json($entrada, 201);
    }

    public function show($id)
    {
        $entrada = Entrada::find($id);
        return response()->json($entrada);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->update($request->all());
        return response()->json($entrada, 200);
    }

    public function destroy($id)
    {
        Entrada::destroy($id);
        return response()->json(null, 204);
    }
}