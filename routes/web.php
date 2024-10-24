<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('/alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
Route::get('/puestos/create', [PuestoController::class, 'create'])->name('puestos.create');
Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
Route::get('/puestos/{id}', [PuestoController::class, 'destroy'])->name('puestos.destroy');

Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');
Route::get('/plazas/create', [PlazaController::class, 'create'])->name('plazas.create');
Route::post('/plazas.store', [PlazaController::class, 'store'])->name('plazas.store');
Route::get('/plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('plazas.edit');
Route::post('/plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');
Route::get('/plazas.show/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');
Route::get('/plazas/{id}', [PlazaController::class, 'destroy'])->name('plazas.destroy');


Route::get('/', function () {
    return view('plantillainicio');
})->name('plantillainicio');


Route::get('/acercade', function () {
    return view('acercade');
})->name('acercade');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::get('/ayuda', function () {
    return view('ayuda');
})->name('ayuda');

Route::get('/ayuda', function () {
    return view('ayuda');
})->name('ayuda');

Route::get('/periodos', function () {
    return view('periodos');
})->name('periodos');

Route::get('/plazas', function () {
    return view('plazas');
})->name('plazas');

Route::get('/puestos', function () {
    return view('puestos');
})->name('puestos');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/deptos', function () {
    return view('deptos');
})->name('deptos');

Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');

Route::get('/reticulas', function () {
    return view('reticulas');
})->name('reticulas');

Route::get('/materias', function () {
    return view('materias');
})->name('materias');

Route::get('/alumnos', function () {
    return view('alumnos');
})->name('alumnos');

Route::get('/docentes', function () {
    return view('docentes');
})->name('docentes');

Route::get('/alumnosh', function () {
    return view('alumnosh');
})->name('alumnosh');

Route::get('/capacitacion', function () {
    return view('capacitacion');
})->name('capacitacion');

Route::get('/asesorias', function () {
    return view('asesorias');
})->name('asesorias');

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

Route::get('/materiald', function () {
    return view('materiald');
})->name('materiald');

Route::get('/docencia', function () {
    return view('docencia');
})->name('docencia');

Route::get('/asesoriaext', function () {
    return view('asesoriaext');
})->name('asesoriaext');

Route::get('/asesoriass', function () {
    return view('asesoriass');
})->name('asesoriass');

Route::get('/instrumentacion', function () {
    return view('instrumentacion');
})->name('instrumentacion');

Route::get('/tutorias', function () {
    return view('tutorias');
})->name('tutorias');

Route::get('/plantilla1', function () {
    return view('plantilla1');
})->middleware(['auth', 'verified'])->name('plantilla1');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('plantilla1'); // Asegúrate de tener una vista llamada dashboard.blade.php
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
}); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
