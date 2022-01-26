<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use App\Traits\UploadTrait;

class ProductController extends Controller
{
    use UploadTrait;
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $userStore = auth()->user()->store;

        $products = $userStore->products()->paginate(10);

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
        $categories = $request->get('categories', null);
        
        $store = auth()->user()->store;
        $product = $store->products()->create($data);

        $product->categories()->sync($categories);

        if($request->hasFile('photos')){
            $images = $this->uploadedImage($request->file('photos'), 'image');

            $product->photos()->createMany($images);
        }
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
        $categories = $request->get('categories', null);

        $product = $this->product->find($product);
        $product->update($data);

        if(!is_null($categories)){
            $product->categories()->sync($categories);
        }
       
        if($request->hasFile('photos')){
            $image = $this->uploadedImage($request->file('photos'), 'image');

            $product->photos()->createMany($image);
        }

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
