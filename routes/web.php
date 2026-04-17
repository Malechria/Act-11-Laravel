<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin-panel', function () {
    if (! auth()->user()->is_admin) {
        abort(403, 'Acceso denegado: No tienes permisos de administrador.');
    }

    return view('admin-panel');
})->middleware(['auth']);

Route::view('/pagina-uno', 'page-one');
Route::view('/pagina-dos', 'page-two');

require __DIR__.'/auth.php';



