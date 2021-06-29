<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorys = Category::take(6)->get();
        $products = Product::with(['galleries'])->take(8)->get();
        return view('pages.home',[
            'categories' => $categorys,
            'products' => $products
        ]);
    }
}
