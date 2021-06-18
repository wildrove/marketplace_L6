@extends('layouts.app')

@section('content') 
    <h1>Atualizar Produto</h1>
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
    
        @csrf 
        @method('PUT')
        
        <div class="form-group">
            <label for="" name="">Produto</label>
            <input class="form-control" type="text" name="name" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control" type="text" name="description" value="{{$product->description}}">
        </div>

        <div class="form-group">
            <label for="" name="">Preço</label>
            <input class="form-control" type="text" name="price" value="{{$product->price}}">
        </div>

        <div class="form-group">
            <label for="" name="">Conteúdo</label>
            <textarea class="form-control" name="body"  cols="30" rows="10">
                {{$product->body}}
            </textarea>
        </div>

        <div class="form-group">
            <label for="" name="">Slug</label>
            <input class="form-control" type="text" name="slug" value="{{$product->slug}}">
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Atualizar Produto</button>
        </div>
    </form>   
@endsection