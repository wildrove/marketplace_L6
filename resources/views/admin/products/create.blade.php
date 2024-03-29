@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->

        @csrf

        <div class="form-group">
            <label for="" name="">Produto</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{old('description')}}">
            @error('description')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Preço</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{old('price')}}">
            @error('price')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Conteúdo</label>
            <textarea class="form-control @error('body') is-invalid @enderror" type="text" name="body" cols="30" rows="10" value="{{old('body')}}"></textarea>
            @error('body')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Categorias</label>
            <select name="categories[]" id="" class="form-control" multiple>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="file">Fotos do Produto</label>
            <input type="file" class="form-control @error('photos.*') is-invalid @enderror" name="photos[]" multiple>
            @error('photos.*')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Criar Produto</button>
        </div>
    </form>
@endsection
