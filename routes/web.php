<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyFirstController;

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

//Route::get('/mylaravel/{nama?}', function($nama='Kema'){return view('mylaravel', compact('nama'));});
Route::get('/aboutus/{ke?}', function($ke='Ministry of Economy'){return view('aboutus', compact('ke'));});
Route::get('/myfirstcontroller', 'MyFirstController@index');

Route::get('users/', [UserController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
