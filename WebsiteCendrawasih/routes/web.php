<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TambahGaleryController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/index', [HomeController::class, 'index'])->name('index');


//refrence
Route::get('/home2', [HomeController::class, 'home2'])->name('home2');

Route::get('/AdminDashboard', [DashboardController::class, 'Admindashboard'])->name('Admindashboard');

//tambah user
Route::controller(UserController::class)->group(function(){
    Route::get('/listusers',  'showuserlist')->name('showuserlist');
    Route::get('/users',  'create')->name('users.create');
    Route::post('/users/store',  'store')->name('users.store');
    Route::delete('/users/{id}',  'destroy')->name('users.destroy');
    Route::get('/listusers', 'showuserlist')->name('showuserlist');
    Route::get('/users', 'create')->name('users.create');
    Route::post('/users/store', 'store')->name('users.store');
    Route::delete('/users/{id}', 'destroy')->name('users.destroy');
});

//galeri
Route::get('/tambahgaleri', [TambahGaleryController::class, 'Galery'])->name('Galery');
Route::delete('/gallery/{id}', [TambahGaleryController::class, 'delete'])->name('gallery.delete');

Route::get('/tambah-event', [EventController::class, 'createevent'])->name('createevent');
Route::post('/tambah-event', [EventController::class, 'store'])->name('events.store');

Route::get('/tambah-foto', [FotoController::class, 'addfoto'])->name('addfoto');
Route::post('/tambah-foto', [FotoController::class, 'store'])->name('foto.store');

Route::get('/listfoto', [FotoController::class, 'listfoto'])->name('listfoto');
Route::delete('/deletePhoto', [FotoController::class, 'deletePhoto'])->name('deletePhoto');

//fasilitas
Route::controller(FasilitasController::class)->group(function(){
    Route::get('/fasilitas', 'index')->name('index.fasilitas');
    Route::get('/fasilitascreate', 'create')->name('fasilitas.create');
    Route::post('/fasilitas', 'store')->name('fasilitas.store');
    Route::delete('/fasilitas/{id}', 'destroy')->name('fasilitas.destroy');
    Route::get('/fasilitasedit/{id}', 'editForm')->name('fasilitas.edit');
    Route::put('/fasilitasedit/{id}', 'update')->name('fasilitas.update');
});





