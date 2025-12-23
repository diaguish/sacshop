<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        // 3 produits mis en avant (dummy data)
        $featuredProducts = Product::latest()->take(3)->get();

        return view('home', [
            'featuredProducts' => $featuredProducts,
        ]);
    }
}
