<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = Product::select()->paginate(8);
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProduct = new Product();
        $newProduct->title = $data['title'];
        $newProduct->author = $data['author'];
        $newProduct->description = $data['description'];
        $newProduct->article = $data['article'];
        $newProduct->img = $data['img'];
        $newProduct->user_id = $request->user()->id;
        $newProduct->save();

        return redirect()->route('dashboard')->with('creation_success', $newProduct);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        if (Auth::user()->id !== $product->user_id) {
            return redirect()->route('products.index')->with('no_permission', $product);
        }

        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::findOrFail($id);
        if ($request->user()->id !== $product->user_id) {
            abort(401);
        }

        $product->title = $data['title'];
        $product->author = $data['author'];
        $product->description = $data['description'];
        $product->article = $data['article'];
        $product->img = $data['img'];
        $product->user_id = $request->user()->id;
        $product->update();

        return redirect()
            ->route('products.show', ['id' => $product->id])
            ->with('update_success', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if (Auth::user()->id !== $product->user_id) {
            abort(401);
        }
        $product->delete();

        return redirect()->route('dashboard')->with('operation_success');
    }
}
