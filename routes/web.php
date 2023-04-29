<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
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
// Rotta Pubblica
Route::get('/', function () {
    return view('welcome');
})-> name('homepage');


// Rotta chi siamo
Route::get('/chi-siamo',[AboutController::class, 'about'] )-> name('chi-siamo');



Route::get('/servizi',[ServicesController::class,'index' ])-> name('servizi');

// rotta parametrica

Route::get('/servizi/dettaglio/{id}', [ServicesController::class,'show'] )-> name('dettaglio-servizio');




