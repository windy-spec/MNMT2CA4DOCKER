<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    // 1. Hiển thị danh sách
    public function index() {
        $coffees = Coffee::orderBy('id', 'desc')->get(); // Mới nhất lên đầu
        return view('menu', ['list' => $coffees]);
    }

    // 2. Hiển thị form thêm mới
    public function create() {
        return view('form_add');
    }

    // 3. Lưu dữ liệu thêm mới
    public function store(Request $request) {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Coffee::create($request->all());
        return redirect()->route('menu.index')->with('success', 'Đã thêm món mới thành công! ☕');
    }

    // 4. Hiển thị form sửa
    public function edit($id) {
        $coffee = Coffee::findOrFail($id);
        return view('form_edit', ['coffee' => $coffee]);
    }

    // 5. Cập nhật dữ liệu
    public function update(Request $request, $id) {
        $coffee = Coffee::findOrFail($id);
        $coffee->update($request->all());
        return redirect()->route('menu.index')->with('success', 'Cập nhật thành công! ✅');
    }

    // 6. Xóa dữ liệu
    public function destroy($id) {
        $coffee = Coffee::findOrFail($id);
        $coffee->delete();
        return redirect()->route('menu.index')->with('success', 'Đã xóa món khỏi menu! 🗑️');
    }
}