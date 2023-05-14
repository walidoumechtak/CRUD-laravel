<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
        Product::create($request->all());
        return redirect()->Route('products.index')->with('create-success', 'Product created successfuly :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $pro = $product;
        return view('products.show', compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $edit = $product;
        return view('products.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')->with('update-success', 'The product updated successfuly :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products/')->with('success', 'Product deleted successfuly');
    }
}
