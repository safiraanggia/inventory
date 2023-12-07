<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->roles == 'admin'){
            return redirect('/dashboard/admin');
        }elseif (Auth::user()->roles == 'operator'){
            return redirect('/dashboard/operator');
        }elseif (Auth::user()->roles == 'pimpinan'){
            return redirect('/dashboard/pimpinan');
        }
    }
    
    public function admin()
    {
        $monthlySales = [
            'ATK' => 300,
            'Makanan' => 450,
            'Minuman' => 600,
            'Pakaian' => 600,
            'Sepatu' => 600,
        ];
        
        $productSales = [
            'Barang Masuk' => 241,
            'Barang Keluar' => 122,
        ];
        return view('pages.admin.dashboard', compact('monthlySales', 'productSales'));
    }
    public function operator()
    {
        $monthlySales = [
            'ATK' => 300,
            'Makanan' => 450,
            'Minuman' => 600,
            'Pakaian' => 600,
            'Sepatu' => 600,
        ];
        
        $productSales = [
            'Barang Masuk' => 241,
            'Barang Keluar' => 122,
        ];
        return view('pages.operator.dashboard', compact('monthlySales', 'productSales'));
    }
    public function pimpinan()
    {
        $monthlySales = [
            'ATK' => 300,
            'Makanan' => 450,
            'Minuman' => 600,
            'Pakaian' => 600,
            'Sepatu' => 600,
        ];
        
        $productSales = [
            'Barang Masuk' => 241,
            'Barang Keluar' => 122,
        ];
        return view('pages.pimpinan.dashboard', compact('monthlySales', 'productSales'));
    }

    

}
