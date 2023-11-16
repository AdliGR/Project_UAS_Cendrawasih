<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TambahGaleryController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;


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

Route::get('/', HomeController)

Route::get('/AdminDashboard', [DashboardController::class, 'Admindashboard'])->name('Admindashboard');

//tambah user
Route::get('/listusers', [UserController::class, 'showuserlist'])->name('showuserlist');
Route::get('/users', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');



//galeri
Route::get('/tambahgaleri', [TambahGaleryController::class, 'Galery'])->name('Galery');
Route::delete('/gallery/{id}', [TambahGaleryController::class, 'delete'])->name('gallery.delete');

Route::get('/tambah-event', [EventController::class, 'createevent'])->name('createevent');
Route::post('/tambah-event', [EventController::class, 'store'])->name('events.store');

Route::get('/tambah-foto', [FotoController::class, 'addfoto'])->name('addfoto');
Route::post('/tambah-foto', [FotoController::class, 'store'])->name('foto.store');

Route::get('/listfoto', [FotoController::Class, 'listfoto'])->name('listfoto');
Route::delete('/deletePhoto', [FotoController::class, 'deletePhoto'])->name('deletePhoto');

//fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('index.fasilitas');
Route::get('/fasilitascreate', [FasilitasController::class, 'create'])->name('fasilitas.create');
Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
Route::delete('/fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
Route::get('/fasilitasedit/{id}', [FasilitasController::class, 'editForm'])->name('fasilitas.edit');
Route::put('/fasilitasedit/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');



