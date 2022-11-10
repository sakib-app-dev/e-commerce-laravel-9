<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        
        $products=Product::all();
        return view('users.index',compact('products'));
    }
    public function about(){
        return view('users.about-us');
    }
    public function checkout(){
        return view('users.checkout');
    }
    public function invoice(){
        return view('users.invoice');
    }

    public function productList(){
        $products=Product::all();
        
        
        return view('users.product-list',compact('products'));
    }
    public function productDetails($id){
        // dd($id);
        $product=Product::find($id);
        return view('users.product-detail',compact('product'));
    }
    public function thankYou(){
        return view('users.thank-you');
    }

    public function login(){
        return view('users.login');
    }
    public function register(){
        return view('users.register');
    }
}
