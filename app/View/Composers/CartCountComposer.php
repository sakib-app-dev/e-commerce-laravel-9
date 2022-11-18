<?php
 
namespace App\View\Composers;

use App\Models\Cart;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class CartCountComposer
{
    public function compose(View $view)
    {
        
        $id=auth()->user()?->id;
        $cartCount=Cart::where('user_id','=',$id)->count();
        $view->with(['cartCount'=>$cartCount]);
        // dd($cartCount);
        
    }
}