<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\roomController;

use App\Livewire\Admin\Createroomlivevwire;
use App\Livewire\Admin\Createtroomlivevwire;
use App\Livewire\Adminbookingshow;
use App\Livewire\Adminroom;
use App\Livewire\Createroomadmin;
use App\Livewire\Createroomlivevwire as LivewireCreateroomlivevwire;
use App\Livewire\Homelivewire;
use App\Livewire\Mybookinglivewire;
use App\Livewire\Roomlivewire;
use App\Livewire\Roomsingleshow;
use App\Models\room;
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
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/about', function () {return view('about');})->name('about');


Route::get('roomlivewire',Roomlivewire::class);
Route::get('homelivewire',Homelivewire::class);






Route::get('/room/showsingle/{id}', [roomController::class, 'index'])->name('room.showsingle');
Route::get('roomsingleshow',Roomsingleshow::class);




Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/room/showrooms', function () {return view('room/showrooms');})->name('showrooms');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/mybooking', function () {return view('mybooking');})->name('mybooking');
    Route::get('mybookinglivewire',Mybookinglivewire::class );


});


Route::middleware(['auth','isadmin'])->group(function () {
Route::get('/admin/createroom', function () {return view('admin/createroom');})->name('createroom');
Route::get('/admin/showroomsadmin', function () {return view('admin/showroomsadmin');})->name('showroomsadmin');
Route::get('/admin/showbooking', function () {return view('admin/showbooking');})->name('adminshowbooking');

Route::get('createroomadmin',Createroomadmin::class );
Route::get('adminroom',Adminroom::class );
Route::get('adminbookingshow',Adminbookingshow::class );
});



require __DIR__.'/auth.php';
