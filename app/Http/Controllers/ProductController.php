<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginatePerPage=5;
        $serialNo=1;
        if ($pageNumber = request('page')) {
            $serialNo=$paginatePerPage*($pageNumber-1)+1;
        }
        $products = Product::latest()->paginate(5);
    
           
    
        return view('product.index', compact('products','serialNo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        // echo"<pre>";
        // print_r($categories);
        // exit();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=Product::create([
            'title'=>$request->title,
            'category_id'=>$request->category,
            'description'=>$request->description,
            'price'=>$request->price

         
           ]);
          
        if($request->has('images')){
            $images=$request->file('images');

            foreach ($images as $image) {
                $imageName=date('Y-m-d').'-product-image-'.time().rand(1,100).'.'.$image->extension();
                $image->move(storage_path('app/public/images'), $imageName);

                
                $product->images()->create(['image'=>$imageName]);

                /*
                Image::create([
                    'product_id'=>$product->id,
                    'image'=>$imageName,
                ]);
                */
                //storage->app->public->images(folder create)
                // php artisan storage:link
            }
        }
    
           return redirect()->route('product.index')->withMessage('Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
   
        $data1=[
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price
           
        ];
        $product->update($data1);
        return redirect()->route('product.index')->withMessage('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        

        return redirect()
            ->route('product.index')
            ->withMessage('Deleted Successfully!');
    }
    public function trash(){
        $products = Product::onlyTrashed()->get();


        return view('product.trash', compact('products'));
    }
    public function restore($id){
        $product =Product::onlyTrashed()->find($id);
        $product->restore();

        

        return redirect()
            ->route('product.index')
            ->withMessage('Restored Successfully!');
    }
    public function delete($id){
        $product =Product::onlyTrashed()->find($id);
        $product->forceDelete();

        

        return redirect()
            ->route('product.trash')
            ->withMessage('Deleted Successfully!');
    }
}
