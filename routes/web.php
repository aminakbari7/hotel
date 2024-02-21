<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Createroomlivevwire;
use App\Livewire\Admin\Createtroomlivevwire;
use App\Livewire\Createroomadmin;
use App\Livewire\Createroomlivevwire as LivewireCreateroomlivevwire;
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

Route::get('/', function () {return view('welcome');});
Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/room/showrooms', function () {return view('room/showrooms');})->name('showrooms');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth','isadmin'])->group(function () {
Route::get('/admin/createroom', function () {return view('admin/createroom');})->name('createroom');
Route::get('createroomadmin',Createroomadmin::class );
});



require __DIR__.'/auth.php';
