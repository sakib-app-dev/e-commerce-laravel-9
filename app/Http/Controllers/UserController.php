<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        if($keyword = request('Keyword')){
            // dd($keyword);
            $products = Product::where('title','LIKE', "%$keyword%")->get();
        }else{
        $products=Product::all();
        }
        
        return view('users.product-list',compact('products'));
    }
    public function productDetails($id){
        // dd($id);
        $product=Product::find($id);
        return view('users.product-detail',compact('product'));
    }

    public function categoryProductList(Category $category){
        // dd($category);
        return view('users.category-product-list',compact('category'));
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
