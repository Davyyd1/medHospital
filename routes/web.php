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
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/medici', [App\Http\Controllers\MediciController::class, 'show']);
Route::post('/cauta-medici', [App\Http\Controllers\MediciController::class, 'cauta_medic'])->name('cauta-medici');

// ---------------------------------------- Adauga-medic ---------------------------------------------------- {}
Route::get('adauga-medic', [App\Http\Controllers\AdminMediciController::class, 'show_admin'])->middleware(admin::class);
Route::post('adauga-medic', [App\Http\Controllers\AdminMediciController::class, 'adauga_medic'])->middleware(admin::class);

Route::middleware(['auth','admin'])->group(function(){
    
});
// ---------------------------------------- Profil si Actualizare date medic ---------------------------------------------------- {}
Route::get('/profil-doctor', [App\Http\Controllers\AdminMediciController::class, 'show_profil_doctor'])->name('profil-doctor');
Route::put('/profil-doctor', [App\Http\Controllers\MediciController::class, 'actualizeaza_date_medic'])->name('profil-doctor');

// ---------------------------------------- Profil si Actualizare date pacient ---------------------------------------------------- {}
Route::get('/profil-pacient', [App\Http\Controllers\AdminMediciController::class, 'show_profil_pacient'])->name('profil-pacient');
Route::put('/profil-pacient', [App\Http\Controllers\MediciController::class, 'actualizeaza_date_pacient'])->name('profil-pacient');

// ---------------------------------------- Profil si Actualizare date admin ---------------------------------------------------- {}
// Route::get('/profil-admin', [App\Http\Controllers\AdminMediciController::class, 'show_profil_admin'])->name('profil-admin');

// ---------------------------------------- Programare medic ---------------------------------------------------- {}
Route::get('/programare/{id}', [App\Http\Controllers\ProgramareController::class, 'programare']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
