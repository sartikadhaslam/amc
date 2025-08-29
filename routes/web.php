<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\BadsidesController;
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
 
    Route::get('/materials', [MaterialsController::class, 'index'])->name('materials.index');

    Route::get('/weapons', [WeaponsController::class, 'index'])->name('weapons.index');

});

require __DIR__.'/auth.php';
