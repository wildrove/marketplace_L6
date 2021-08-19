@extends('layouts.app')

@section('content')
    <h1>Criar Categoria</h1>
    <form action="{{route('admin.categories.store')}}" method="post">
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->

        @csrf

        <div class="form-group">
            <label for="" name="">Nome</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror    
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control " type="text" name="description" value="{{old('description')}}">  
        </div>

        <div class="form-group">
            <label for="" name="">Slug</label>
            <input class="form-control" type="text" name="slug" value="{{old('slug')}}">
        </div>
        
        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Criar Categoria</button>
        </div>
    </form>
@endsection
