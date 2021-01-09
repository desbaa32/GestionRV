<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/medecin/add', [App\Http\Controllers\MedcinController::class, 'add'])->name('addMedecin');
Route::get('/medecin/list', [App\Http\Controllers\MedcinController::class, 'getAll'])->name('listMedecin');
Route::get('/medecin/edit/{id}', [App\Http\Controllers\MedcinController::class, 'edit'])->name('editMedecin');
Route::get('/medecin/delete/{id}', [App\Http\Controllers\MedcinController::class, 'delete'])->name('deleteMedecin');
Route::post('/medecin/update', [App\Http\Controllers\MedcinController::class, 'update'])->name('updateMedecin');
Route::post('/medecin/traiteForm', [App\Http\Controllers\MedcinController::class, 'traiteForm'])->name('traiteForm');

Route::get('/rendezvous/add', [App\Http\Controllers\RendezVousController::class, 'add'])->name('addRendezvous');
Route::get('/rendezvous/list', [App\Http\Controllers\RendezVousController::class, 'getAll'])->name('listRendezvous');
Route::get('/rendezvous/edit/{id}', [App\Http\Controllers\RendezVousController::class, 'edit'])->name('editRendezvous');
Route::get('/rendezvous/delete/{id}', [App\Http\Controllers\RendezVousController::class, 'delete'])->name('deleteRendezvous');
Route::get('/rendezvous/update', [App\Http\Controllers\RendezVousController::class, 'update'])->name('updateRendezvous');
