<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index() {
        return Superhero::all();
    }

    public function store(Request $request) {
        return Superhero::create($request->all());
    }

    public function show(Superhero $superhero) {
        return $superhero;
    }

    public function update(Request $request, Superhero $superhero) {
        $superhero->update($request->all());
        return $superhero;
    }

    public function destroy(Superhero $superhero) {
        $superhero->delete();
        return response()->json(['message' => 'Superhéroe eliminado correctamente']);
    }
}
