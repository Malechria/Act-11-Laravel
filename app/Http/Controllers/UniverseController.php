<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    // 1. Read All
    public function index() {
        return Universe::all();
    }

    // 2. Create
    public function store(Request $request) {
        return Universe::create($request->all());
    }

    // 3. Read One
    public function show(Universe $universe) {
        return $universe;
    }

    // 4. Update
    public function update(Request $request, Universe $universe) {
        $universe->update($request->all());
        return $universe;
    }

    // 5. Delete
    public function destroy(Universe $universe) {
        $universe->delete();
        return response()->json(['message' => 'Universo eliminado correctamente']);
    }
}