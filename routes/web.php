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

Route::get('/profil-admin/{nume}', [App\Http\Controllers\AdminMediciController::class, 'show_profil_admin'])->name('/profil-admin/{nume}');
Route::get('/profil-doctor/{nume}', [App\Http\Controllers\AdminMediciController::class, 'show_profil_doctor'])->name('/profil-doctor/{nume}');
Route::get('/profil-pacient/{nume}', [App\Http\Controllers\AdminMediciController::class, 'show_profil_pacient'])->name('/profil-pacient/{nume}');


Route::get('adauga-medic', [App\Http\Controllers\AdminMediciController::class, 'show_admin'])->middleware(admin::class);
Route::post('adauga-medic', [App\Http\Controllers\AdminMediciController::class, 'adauga_medic'])->middleware(admin::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
