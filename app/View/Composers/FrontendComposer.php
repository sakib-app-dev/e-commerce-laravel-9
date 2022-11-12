<?php
 
namespace App\View\Composers;

use App\Models\Category;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class FrontendComposer
{
    public function compose(View $view)
    {
        $category=Category::all();
        $view->with(['categories'=>$category]);
    }
}