<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

// 1. TRANG CHỦ (Khách hàng vào đây đầu tiên)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 2. TRANG QUẢN TRỊ (Dashboard)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// 3. CÁC TRANG SIDEBAR TĨNH
Route::view('/orders', 'orders')->name('orders');
Route::view('/revenue', 'revenue')->name('revenue');
Route::view('/settings', 'settings')->name('settings');

// 4. CRUD MENU
Route::get('/menu', [CoffeeController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [CoffeeController::class, 'create'])->name('menu.create');
Route::post('/menu', [CoffeeController::class, 'store'])->name('menu.store');
Route::get('/menu/{id}', [CoffeeController::class, 'show'])->name('menu.show'); // Xem chi tiết
Route::get('/menu/{id}/edit', [CoffeeController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [CoffeeController::class, 'update'])->name('menu.update');
Route::delete('/menu/{id}', [CoffeeController::class, 'destroy'])->name('menu.destroy');