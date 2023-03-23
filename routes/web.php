<?php

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/medici', [App\Http\Controllers\MediciController::class, 'show']);
Route::post('/cauta-medici', [App\Http\Controllers\MediciController::class, 'cauta_medic'])->name('cauta-medici');

// ---------------------------------------- Adauga-medic ---------------------------------------------------- {}
Route::get('adauga-medic', [App\Http\Controllers\AdminMediciController::class, 'show_admin'])->middleware(admin::class);
Route::post('adauga-medic', [App\Http\Controllers\AdminMediciController::class, 'adauga_medic'])->middleware(admin::class);

Route::middleware(['auth','admin'])->group(function(){
    
});
// ---------------------------------------- Profil si Actualizare date medic ---------------------------------------------------- {}
Route::get('/profil-doctor', [App\Http\Controllers\MediciController::class, 'show_profil_doctor'])->name('profil-doctor');
Route::put('/profil-doctor', [App\Http\Controllers\MediciController::class, 'actualizeaza_date_medic'])->name('profil-doctor');

// ---------------------------------------- Profil medic perspectiva user(pacient) ---------------------------------------------------- {}
Route::get('/profil-medic/{id}', [App\Http\Controllers\MediciController::class, 'show_profil_doctor'])->name('profil-medic');


// ---------------------------------------- Profil si Actualizare date pacient ---------------------------------------------------- {}
Route::get('/profil-pacient', [App\Http\Controllers\PacientiController::class, 'show_profil_pacient'])->name('profil-pacient');
Route::put('/profil-pacient', [App\Http\Controllers\PacientiController::class, 'actualizeaza_date_pacient'])->name('profil-pacient');

// ---------------------------------------- Programare  ---------------------------------------------------- {}
Route::get('/programare/{id}', [App\Http\Controllers\ProgramareController::class, 'programare']);
Route::post('/programare_submit', [App\Http\Controllers\ProgramareController::class, 'programare_submit']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
