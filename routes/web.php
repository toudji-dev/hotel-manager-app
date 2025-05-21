<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'home']);

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/create_room', [AdminController::class, 'create_room'])->middleware('auth','admin');

Route::post('/add_room', [AdminController::class, 'add_room'])->middleware('auth','admin');


Route::get('/view_room', [AdminController::class, 'view_room'])->middleware('auth','admin');

Route::get('/room_delete/{id}', [AdminController::class, 'room_delete'])->middleware('auth','admin');

Route::get('/room_update/{id}', [AdminController::class, 'room_update'])->middleware('auth','admin');

Route::post('/idit_room/{id}', [AdminController::class, 'idit_room'])->middleware('auth','admin');



Route::get('/room_details/{id}', [HomeController::class, 'room_details']);

Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);



Route::get('/bookings', [AdminController::class, 'bookings'])->middleware('auth','admin');

Route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking'])->middleware('auth','admin');

Route::get('/approve_book/{id}', [AdminController::class, 'approve_book'])->middleware('auth','admin');

Route::get('/reject_book/{id}', [AdminController::class, 'reject_book'])->middleware('auth','admin');

Route::get('/view_gallary', [AdminController::class, 'view_gallary'])->middleware('auth','admin');

Route::post('/upload_gallary', [AdminController::class, 'upload_gallary'])->middleware('auth','admin');

Route::get('/delete_gallary/{id}', [AdminController::class, 'delete_gallary'])->middleware('auth','admin');



Route::post('/contact', [HomeController::class, 'contact']);