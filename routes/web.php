<?php

use App\Http\Controllers\FakultasController;
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

// Route::get('/fakultas', function(){
//     return view('fakultas');

// });

Route::resource('fakultas', FakultasController::class);

Route::get('/prodi', function () {
    return view('prodi');
});

Route::get('/mahasiswa', function () {
    $data = [
        ["npm" => 2226250068, "nama" => " Maman"],
        ["npm" => 2226250069, "nama" => " Pepeng"],
    ];
    return view('mahasiswa.index')->with('mahasiswa', $data);
});
