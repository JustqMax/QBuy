<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function categories(){
        return view('categories');
    }

    public function category($category = null){
        return view('category', ['category' => $category]);
    }

    public function product($product = null){
        return view('product', ['product' => $product]);
    }

}
