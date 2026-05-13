<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class ControladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Categories::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'descripcio' => 'required|string'
        ]);

        $categoria = Categories::create([
            'nom' => $request->nom,
            'descripcio' => $request->descripcio
        ]);

        return response()->json($categoria, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categoria = Categories::find($id);

        if (!$categoria) {
            return response()->json([
                'missatge' => 'Categoria no trobada'
            ], 404);
        }

        return response()->json($categoria, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categoria = Categories::find($id);

        if (!$categoria) {
            return response()->json([
                'missatge' => 'Categoria no trobada'
            ], 404);
        }

        $request->validate([
            'nom' => 'required|string|max:255',
            'descripcio' => 'required|string'
        ]);

        $categoria->update([
            'nom' => $request->nom,
            'descripcio' => $request->descripcio
        ]);

        return response()->json($categoria, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = Categories::find($id);

        if (!$categoria) {
            return response()->json([
                'missatge' => 'Categoria no trobada'
            ], 404);
        }

        $categoria->delete();

        return response()->json([
            'missatge' => 'Categoria eliminada correctament'
        ], 200);
    }
}
