<?php

use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PlaceController;
// Route::get('/', function () {
//     return view('welcome');
// });

use YouTube\YouTubeDownloader;
use YouTube\Exception\YouTubeException;

// Route::get('/', function(){return view('home');});

Route::get('login', [SessionController::class, 'create'])->name('login');
Route::post('login', [SessionController::class, 'store'])->name('login.store');
Route::post('logout', [SessionController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('contact', function(){ return view('contact'); })->name('contact');
Route::get('about', function(){ return view('about'); })->name('about');


Route::middleware('auth')->group(function(){
Route::get('/', [PlaceController::class, 'index'])->name('places.index');
Route::get('/place/create', [PlaceController::class, 'create'])->name('places.create');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');
Route::get('/place/{id}', [PlaceController::class, 'show'])->name('places.show');
Route::delete('/place/{id}', [PlaceController::class, 'destroy'])->name('places.destroy');
Route::post('places/{place}/like', [PlaceController::class, 'like'])->name('places.like');
});
