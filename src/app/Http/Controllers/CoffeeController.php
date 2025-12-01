<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    // 1. Hiển thị danh sách
    public function index() {
        $list = Coffee::orderBy('id', 'desc')->get();
        return view('index', ['list' => $list]); // File view: index.blade.php
    }

    // 2. Form thêm mới
    public function create() {
        return view('create'); // File view: create.blade.php
    }

    // 3. Lưu món mới
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable',
        ]);
        Coffee::create($request->all());
        return redirect()->route('menu.index')->with('success', 'Đã thêm món mới thành công! ☕');
    }

    // 4. Xem chi tiết món
    public function show($id) {
        $coffee = Coffee::findOrFail($id);
        return view('show', ['coffee' => $coffee]); // File view: show.blade.php
    }

    // 5. Form sửa
    public function edit($id) {
        $coffee = Coffee::findOrFail($id);
        return view('edit', ['coffee' => $coffee]); // File view: edit.blade.php
    }

    // 6. Cập nhật
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        $coffee = Coffee::findOrFail($id);
        $coffee->update($request->all());
        return redirect()->route('menu.index')->with('success', 'Cập nhật thành công! ✅');
    }

    // 7. Xóa
    public function destroy($id) {
        $coffee = Coffee::findOrFail($id);
        $coffee->delete();
        return redirect()->route('menu.index')->with('success', 'Đã xóa món khỏi menu! 🗑️');
    }
}