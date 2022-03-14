<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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
//Route::get('/alumno', function () {
   // return view('alumno.index');
//});
//Route::get('/alumno/create', [AlumnoController::class, 'create']);
Route::resource('alumno', AlumnoController::class);

//Auth::routes();

//Route::get('/home', [AlumnoController::class, 'index'])->name('home');
//Route::group(['middleware'=>'auth'], function (){
//Route::get('/home', [AlumnoController::class, 'index'])->name('home');
//});
