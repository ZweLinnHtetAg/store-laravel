<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        //Category::create($request->all());

        Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('categories')->with('success',"New Category ( $request->name ) is created successfully !");

    }


    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $old_name = $category->name;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('categories')->with('success',"$old_name is successfully updated!");
    }

    public function destroy(Category $category)
    {
        $name = $category->name;
        $category->delete();
        return redirect('categories')->with('success', "$name Category is delete Success !");
    }
}
