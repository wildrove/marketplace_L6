@extends('layouts.app')

@section('content')
    <h1>Atualizar Categoria</h1>
    <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post">
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="" name="">Nome</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$category->name}}">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror    
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control " type="text" name="description" value="{{$category->description}}">
        </div>

        <div class="form-group">
            <label for="" name="slug">Slug</label>
            <input class="form-control" type="text" name="slug" value="{{$category->slug}}">
        </div>
        
        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Atualizar Categoria</button>
        </div>
    </form>
@endsection
