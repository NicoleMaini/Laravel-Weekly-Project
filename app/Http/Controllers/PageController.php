<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function error()
    {
        return view('404');
    }
    public function contact()
    {
        return view('contact');
    }
    public function dashboard()
    {
        $products = Product::all();
        $products = Product::select()->paginate(10);
        return view('dashboard', ['products' => $products]);
    }
}
