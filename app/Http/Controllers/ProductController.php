<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('product')->with('success',"Successfully added new product ($request->name) ");
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit',compact('product','categories'));
    }

    public function update(Request $request, Product $product)
    {
        $old_name = $product->name;
        $product->name = $request->name;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->img = $request->img;
        $product->category_id = $request->category_id;
        $product->save();
        
        return redirect('product')->with('success',"$old_name is successfully updated!");
    }

    public function destroy(Product $product)
    {
        $name = $product->name;
        $product->delete();
        return redirect('product')->with('success', "$name is delete Success !");
    }
}
