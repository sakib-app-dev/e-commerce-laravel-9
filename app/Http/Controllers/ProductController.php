<?php

namespace App\Http\Controllers;

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
        $products = Product::all();
    
           
    
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
