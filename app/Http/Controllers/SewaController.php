<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Category;
use App\Models\User;

class SewaController extends Controller
{
    public function index()
    {
            $rows = Sewa::all();
            return view('sewa.index', compact ('rows'));
    }

    public function create()
    {
        $categories = Category::all();
        $user = User::all();
        return view('sewa.create', compact('categories', 'user'));
    }

    public function store(Request $request)
    {
        Sewa::create([
            'sewa_nama' => $request->sewa_nama,
            'sewa_nohp' => $request->sewa_nohp,
            'sewa_alamat' => $request->sewa_alamat,
            'sewa_waktu' => $request->sewa_waktu,
            'sewa_id_user'=> $request->sewa_id_user,
            'sewa_id_cat'=> $request->sewa_id_cat,
            'sewa_status' => $request->sewa_status
        ]);

        return redirect('sewa');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
{
    $row = Sewa::find($id);
    $categories = Category::all();
    $user = User::all();
    return view('sewa.edit', compact('row', 'categories', 'user'));
}

    public function update(Request $request, string $id)
    {
        $row = Sewa::findOrFail($id);

        $row->update([
            'sewa_nama' => $request->sewa_nama,
            'sewa_nohp' => $request->sewa_nohp,
            'sewa_alamat' => $request->sewa_alamat,
            'sewa_waktu' => $request->sewa_waktu,
            'sewa_id_user'=> $request->sewa_id_user,
            'sewa_id_cat'=> $request->sewa_id_cat,
            'sewa_status' => $request->sewa_status
            
        ]);

        return redirect('sewa');
    }

    public function destroy(string $id)
    {
        $row = Sewa::findOrFail($id);

        $row->delete();

        return redirect('sewa');
    }
}
