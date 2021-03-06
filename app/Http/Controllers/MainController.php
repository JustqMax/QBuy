<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $products = Product::get();
        return view('home', compact('products'));
    }

    public function about(){
        return view('about');
    }

    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($category,$product = null){
        return view('product', ['product' => $product]);
    }

    public function basket(){
        return view('basket');
    }

    public function basketPlace(){
        return view('order');
    }
    
}
