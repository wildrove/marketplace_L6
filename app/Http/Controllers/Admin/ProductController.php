<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = \App\Category::all(['id', 'name']);
       
        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $store = auth()->user()->store;
        $product = $store->products()->create($data);
        $product->categories()->sync($data['categories']);

        flash('Produto Criado com Sucesso !')->success();
        return redirect()->route('admin.products.index');

    }


    public function show($product)
    {
        
    }

    public function edit($product)
    {
        $product = $this->product->findOrFail($product);
        $categories = \App\Category::all(['id', 'name']);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, $product)
    {
        $data = $request->all();
        $product = $this->product->find($product);
        $product->update($data);

        flash('Produto Atualizado com Sucesso !');
        return redirect()->route('admin.products.index');
    }

    public function destroy($product)
    {
        $product = $this->product->find($product);
        $product->delete($product);

        flash('Produto Removido com Sucesso !')->success();
        return redirect()->route('admin.products.index');
    }
}
