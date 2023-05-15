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


    Route::post('/proveedors/{proveedor}/attach-farmacia', [ProveedorController::class, 'attachFarmacia'])
        ->name('proveedors.attachFarmacia')
        ->middleware('can:attachFarmacia,proveedor');
    Route::delete('/proveedors/{proveedor}/detach-farmacia/{farmacia}', [ProveedorController::class, 'detachFarmacia'])
        ->name('proveedors.detachFarmacia')
        ->middleware('can:detachFarmacia,proveedor');

    Route::post('/medicamentos/{medicamento}/attach-farmacia', [MedicamentoController::class, 'attachFarmacia'])
        ->name('medicamentos.attachFarmacia')
        ->middleware('can:attachFarmacia,medicamento');
    Route::delete('/medicamentos/{medicamento}/detach-farmacia/{farmacia}', [MedicamentoController::class, 'detachFarmacia'])
        ->name('medicamentos.detachFarmacia')
        ->middleware('can:detachFarmacia,medicamento');
//});