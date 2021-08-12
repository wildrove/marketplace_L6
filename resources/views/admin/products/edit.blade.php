@extends('layouts.app')

@section('content') 
    <h1>Atualizar Produto</h1>
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
    
        @csrf 
        @method('PUT')
        
        <div class="form-group">
            <label for="" name="">Produto</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$product->name}}">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{$product->description}}">
            @error('description')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Conteúdo</label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body"  cols="30" rows="10">
                {{$product->body}}
            </textarea>
            @error('body')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Preço</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{$product->price}}">
            @error('price')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Categorias</label>
            <select name="categories[]" id="" class="form-control" multiple>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                        @if($product->categories->contains($category))
                        selected
                        @endif   
                    >{{$category->name}}</option>  
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="slug" name="slug">Slug</label>
            <input class="form-control" type="text" name="slug" value="{{$product->slug}}">
            
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Atualizar Produto</button>
        </div>
    </form>   
@endsection