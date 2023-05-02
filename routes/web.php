<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PublicController;

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
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contattaci', [PublicController::class, 'contact_us'])->name('contact_us');
Route::post('/contattaci/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us.submit');


// Rotta chi siamo
Route::get('/chi-siamo',[AboutController::class, 'about'] )-> name('chi-siamo');



Route::get('/servizi',[ServicesController::class,'index' ])-> name('servizi');

// rotta parametrica

Route::get('/servizi/dettaglio/{id}', [ServicesController::class,'show'] )-> name('dettaglio-servizio');




