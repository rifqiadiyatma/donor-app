<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabupatenController;

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

Route::get('kabupaten', [KabupatenController::class, 'index']);
Route::get('kabupaten/tambah', [KabupatenController::class, 'tambah']);
Route::post('kabupaten/simpan', [KabupatenController::class, 'simpan']);
Route::get('kabupaten/edit/{kabupaten:id_kab}', [KabupatenController::class, 'edit']);
Route::put('kabupaten/update/{kabupaten:id_kab}', [KabupatenController::class, 'update']);
Route::delete('kabupaten/delete/{kabupaten:id_kab}', [KabupatenController::class, 'delete']);

Route::get('rekap1', [RekapController::class, 'rekap1']);