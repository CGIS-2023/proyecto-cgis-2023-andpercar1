<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SanitarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

require __DIR__.'/auth.php';


//Route::middleware(['auth', 'tipo_usuario:3'])->group(function () {
    Route::resources([
        'medicamentos' => MedicamentoController::class,
        'clientes' => ClienteController::class,
        'farmacias' => FarmaciaController::class,
        'proveedors' => ProveedorController::class,
        'sanitarios' => SanitarioController::class,
    ]);
//});

//Route::middleware(['auth', 'tipo_usuario:1,3'])->group(function () {
    //Route::get('/medicos/{medico}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
    //Route::put('/medicos/{medico}', [MedicoController::class, 'update'])->name('medicos.update');
    //Dos rutas que tienen además un middleware con un Policy para hilar fino
    Route::post('/proveedors/{proveedor}/attach-farmacia', [ProveedorController::class, 'attachFarmacia'])
        ->name('proveedors.attachFarmacia')
        ->middleware('can:attachFarmacia,proveedor');
    Route::delete('/proveedors/{proveedor}/detach-farmacia/{farmacia}', [ProveedorController::class, 'detachFarmacia'])
        ->name('proveedors.detachFarmacia')
        ->middleware('can:detachFarmacia,proveedor');
//});