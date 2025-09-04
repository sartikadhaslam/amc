<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\BadsidesController;
use App\Http\Controllers\WeaponsController;
use App\Http\Controllers\HargaBeliController;
use App\Http\Controllers\HargaJualController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');

    Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');

    //members
    Route::get('/members', [MembersController::class, 'index'])->name('members.index');
    Route::post('/members', [MembersController::class, 'store'])->name('members.store');
    Route::put('/members/{id}', [MembersController::class, 'update'])->name('members.update');
    Route::delete('/members/{id}', [MembersController::class, 'destroy'])->name('members.destroy');

    //badsides
    Route::get('/badsides', [BadsidesController::class, 'index'])->name('badsides.index');
    Route::post('/badsides', [BadsidesController::class, 'store'])->name('badsides.store');
    Route::put('/badsides/{id}', [BadsidesController::class, 'update'])->name('badsides.update');
    Route::delete('/badsides/{id}', [BadsidesController::class, 'destroy'])->name('badsides.destroy');
 
    //weapons
    Route::get('/weapons', [WeaponsController::class, 'index'])->name('weapons.index');
    Route::post('/weapons', [WeaponsController::class, 'store'])->name('weapons.store');
    Route::put('/weapons/{id}', [WeaponsController::class, 'update'])->name('weapons.update');
    Route::delete('/weapons/{id}', [WeaponsController::class, 'destroy'])->name('weapons.destroy');

     //hargabeli
    Route::get('/harga-beli', [HargaBeliController::class, 'index'])->name('harga-beli.index');
    Route::post('/harga-beli', [HargaBeliController::class, 'store'])->name('harga-beli.store');
    Route::put('/harga-beli/{id}', [HargaBeliController::class, 'update'])->name('harga-beli.update');
    Route::delete('/harga-beli/{id}', [HargaBeliController::class, 'destroy'])->name('harga-beli.destroy');

     //hargajual
    Route::get('/harga-jual', [HargaJualController::class, 'index'])->name('harga-jual.index');
    Route::post('/harga-jual', [HargaJualController::class, 'store'])->name('harga-jual.store');
    Route::put('/harga-jual/{id}', [HargaJualController::class, 'update'])->name('harga-jual.update');
    Route::delete('/harga-jual/{id}', [HargaJualController::class, 'destroy'])->name('harga-jual.destroy');

    Route::get('/materials', [MaterialsController::class, 'index'])->name('materials.index');

    Route::get('/weapons', [WeaponsController::class, 'index'])->name('weapons.index');

});

require __DIR__.'/auth.php';
