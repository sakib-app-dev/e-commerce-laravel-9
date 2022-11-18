<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function home(){
        
        $products=Product::latest()->paginate(12);
        
        return view('users.index',compact('products'));
    }
    public function about(){
        return view('users.about-us');
    }
    public function checkout(){
        $user=auth()->user()->id;
        $userCart=Cart::all()->where('user_id','=',$user);
        // echo"<pre>";
        // print_r($userCart);
        // exit();
        
        

        return view('users.checkout',compact('userCart'));
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

    public function addToCart(Product $product,Request $req){

        // dd($id);
        // $orderedBy = auth()->user()->name;
        $prductName=$product->title;
        $productPrice=$product->price;
        $qty=$req->qty;

        Cart::create([
            'user_id'=>auth()->user()->id,
            'product_name'=>$prductName,
            'price'=>$productPrice,
            'qty'=>$qty,

        ]);
        

        return redirect()->back()->withMessage('This product successfully added to your cart');
    }
    public function invoicePDF(){
        $user=auth()->user()->id;
        $userInfo=User::find($user);
        $userCart=Cart::all()->where('user_id','=',$user);
        $pdf = Pdf::loadView('users.invoice',compact('userCart','userInfo'));
        return $pdf->download('invoice.pdf');
    }


    public function commentStore(Product $product,Request $req){

        
       

        Comment::create([
            'commented_by'=>auth()->user()->id,
            'product_id'=>$product->id,
            'comment'=>$req->comment, 

        ]);
        

        return redirect()->back();
    }

    public function login(){
        return view('users.login');
    }
    public function register(){
        return view('users.register');
    }
}
