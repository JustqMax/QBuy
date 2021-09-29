<?php

namespace App\Http\Controllers;

use App\Category;
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
        
        Category::where()->first();
        return view('categories');
    }

    public function category($category = null){
        return view('category', ['category' => $category]);
    }

    public function product($product = null){
        return view('product', ['product' => $product]);
    }
    
}
