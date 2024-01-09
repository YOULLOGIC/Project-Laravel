<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\User;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalPelanggan = Sewa::count();
        $totalUsers     = User::count();
        $totalJenisKost = Category::count();

        return view ('home', compact('totalPelanggan', 'totalUsers', 'totalJenisKost'));
    }

    public function dashboard(){
        
        return view ('dashboard'); 
    }
    
}
