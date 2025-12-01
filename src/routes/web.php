<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

Route::get('/', function () {
    return view('welcome'); // Trả về trang giao diện Welcome thay vì chuyển hướng
});

// Danh sách & Form thêm
Route::get('/menu', [CoffeeController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [CoffeeController::class, 'create'])->name('menu.create');
Route::post('/menu', [CoffeeController::class, 'store'])->name('menu.store');

// Form sửa & Cập nhật
Route::get('/menu/{id}/edit', [CoffeeController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [CoffeeController::class, 'update'])->name('menu.update');

// Xóa
Route::delete('/menu/{id}', [CoffeeController::class, 'destroy'])->name('menu.destroy');    