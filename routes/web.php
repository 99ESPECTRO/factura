<?php

use App\Http\Controllers\FacturaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/factura', [FacturaController::class, 'Index'])->name('factura.Index');

Route::get('/factura/create', [FacturaController::class, 'create']);

Route::post('/factura', [FacturaController::class, 'store']);

Route::delete('/factura/{id}', [FacturaController::class, 'destroy']);