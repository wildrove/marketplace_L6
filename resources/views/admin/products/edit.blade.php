@extends('layouts.app')

@section('content')
    <h1>Atualizar Produto</h1>
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post" enctype="multipart/form-data">

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
            <label for="file">Fotos do Produto</label>
            <input type="file" name="photos[]"  class="form-control @error('photos.*') is-invalid @enderror" multiple>
            @error('photos.*')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Atualizar Produto</button>
        </div>
    </form>

    <hr>

    <div class="row">
        @foreach($product->photos as $photo)
        <div class="col-4 text-center">
            <img src="{{asset('storage/' . $photo->image)}}" alt="" class="img-fluid">
            <form action="{{route('admin.photo.remove')}}" method="post">
                @csrf
                <input type="hidden" name="photoName" value="{{$photo->image}}">
                <button type="submit" class="btn btn-lg btn-danger">REMOVER</button>
            </form>
        </div>
        @endforeach
    </div>
@endsection
