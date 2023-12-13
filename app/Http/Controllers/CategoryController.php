<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $rows = Category::all();
        return view('categories.index', compact('rows'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
            'cat_jenis' => $request->cat_jenis,
            'cat_ket' => $request->cat_ket,
            'cat_harga' => $request->cat_harga
        ]);

        return redirect('categories');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $row = Category::find($id);
        return view('categories.edit', compact('row'));
    }

    public function update(Request $request, string $id)
    {
        $row = Category::findOrFail($id);

        $row->update([
            'cat_jenis' => $request->cat_jenis,
            'cat_ket' => $request->cat_ket,
            'cat_harga' => $request->cat_harga
        ]);

        return redirect('categories');
    }

    public function destroy(string $id)
    {
        $row = Category::findOrFail($id);

        $row->delete();

        return redirect('categories');
    }
}
