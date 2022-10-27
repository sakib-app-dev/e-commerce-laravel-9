<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('users.index');
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
        return view('users.product-list');
    }
    public function productDetail(){
        return view('users.product-detail');
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
