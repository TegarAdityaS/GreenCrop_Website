<?php
 
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Tanaman;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    // public function index()
    // {
    //     return view('home');
    // }
 
    public function adminHome()
    {
        $totalProducts = Produk::count();
        $totalCategories = Kategori::count();
        $totalPlants = Tanaman::count();
        return view('dashboard', compact('totalProducts', 'totalCategories', 'totalPlants'));
    }
}