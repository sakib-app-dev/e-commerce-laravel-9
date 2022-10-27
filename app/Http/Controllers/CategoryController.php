<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();


        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Category::create([
        'title'=>$request->title
       ]);

       return redirect()->route('category.index')->withMessage('Created Successfully!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('category.edit',compact('category'));
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
        $category=Category::find($id);
        $data1=[
            'title'=>$request->title,
            
        ];
        $category->update($data1);
        return redirect()->route('category.index')->withMessage('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =Category::find($id);
        $category->delete();

        

        return redirect()
            ->route('category.index')
            ->withMessage('Deleted Successfully!');
    }
    public function trash(){
        $categories = Category::onlyTrashed()->get();


        return view('category.trash', compact('categories'));
    }
    public function restore($id){
        $category =Category::onlyTrashed()->find($id);
        $category->restore();

        

        return redirect()
            ->route('category.index')
            ->withMessage('Restored Successfully!');
    }
    public function delete($id){
        $category =Category::onlyTrashed()->find($id);
        $category->forceDelete();

        

        return redirect()
            ->route('category.trash')
            ->withMessage('Deleted Successfully!');
    }

}
