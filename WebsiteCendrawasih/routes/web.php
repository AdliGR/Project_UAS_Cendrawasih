<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Session\Middleware\AuthenticateSession;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TambahGaleryController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\LoginController;



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

Route::get('/AdminDashboard', [DashboardController::class, 'Admindashboard'])->name('Admindashboard')->middleware(['web','auth']);

//fasilitas
Route::controller(FasilitasController::class)->group(function(){
    Route::get('/listfasilitas', 'index')->name('index.fasilitas');
});

//tambah user
Route::controller(UserController::class)->group(function(){
    Route::get('/listusers',  'showuserlist')->name('showuserlist');
});

//galeri
Route::get('/tambahgaleri', [TambahGaleryController::class, 'Galery'])->name('Galery');
Route::get('/listfoto', [FotoController::class, 'listfoto'])->name('listfoto');


Route::controller(AcaraController::class)->group(function(){
    Route::get('/events', 'index')->name('index.acara');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/AboutUs', 'aboutus')->name('aboutus');
    Route::get('/gallery',  'gallery')->name('gallery');
    Route::get('/gallery/{acara}', 'show')->name('show');
    Route::get('/penjurusan(SMK)',  'penjurusan')->name('penjurusan');
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'loginForm')->name('login');
    Route::post('/login','login');
    Route::get('/logout','logout')->name('logout');
});


Route::middleware(['web','admin'])->group(function () 
{
    //crud fasilitias
    Route::controller(FasilitasController::class)->group(function(){
        Route::get('/AdminDashboard/fasilitascreate', 'create')->name('fasilitas.create');
        Route::post('/AdminDashboard/fasilitas/store', 'store')->name('fasilitas.store');
        Route::delete('/AdminDashboard/fasilitas/{id}', 'destroy')->name('fasilitas.destroy');
        Route::get('/AdminDashboard/fasilitasedit/{id}', 'editForm')->name('fasilitas.edit');
        Route::put('/AdminDashboard/fasilitasedit/{id}', 'update')->name('fasilitas.update');
        Route::get('/AdminDashboard/download-excel', 'downloadExcel')->name('faslitas.excelDL');
    });
    
    //crud user
    Route::controller(UserController::class)->group(function(){
        Route::get('/AdminDashboard/user/create',  'create')->name('users.create');
        Route::post('/AdminDashboard/user/store',  'store')->name('users.store');
        Route::get('/AdminDashboard/users/{user}/edit', 'edit')->name('users.edit');
        Route::put('/AdminDashboard/users/{user}', 'update')->name('users.update');
        Route::delete('/AdminDashboard/users/{user}', 'destroy')->name('users.destroy');
    });

    //crud event
    Route::controller(AcaraController::class)->group(function(){
        Route::get('/AdminDashboard/events/create', 'create')->name('events.created');
        Route::post('/AdminDashboard/events', 'store')->name('events.stored');
        Route::get('/AdminDashboard/events/{id}/edit', 'editacara')->name('editacara');
        Route::put('/AdminDashboard/events/{id}', 'updateacara')->name('updateacara');
        Route::delete('/AdminDashboard/events/{id}', 'destroy')->name('events.destroy');
    });

    //crud gallery
    Route::get('/AdminDashboard/tambah-event', [EventController::class, 'createevent'])->name('createevent');
    Route::post('/AdminDashboard/tambah-event', [EventController::class, 'store'])->name('events.store');
    Route::get('/AdminDashboard/tambah-foto', [FotoController::class, 'addfoto'])->name('addfoto');
    Route::post('/AdminDashboard/tambah-foto', [FotoController::class, 'store'])->name('foto.store');
    Route::delete('/AdminDashboard/gallery/{id}', [TambahGaleryController::class, 'delete'])->name('gallery.delete');
    Route::delete('/AdminDashboard/deletePhoto', [FotoController::class, 'deletePhoto'])->name('deletePhoto');

});