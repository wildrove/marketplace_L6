@extends('layouts.app')

@section('content') 
    <h1>Editar Loja</h1>
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="" name="">Loja</label>
            <input class="form-control" type="text" name="name" value="{{$store->name}}">
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control" type="text" name="description" value="{{$store->description}}">
        </div>

        <div class="form-group">
            <label for="" name="">Telefone</label>
            <input class="form-control" type="text" name="phone" value="{{$store->phone}}">
        </div>

        <div class="form-group">
            <label for="" name="">Celular</label>
            <input class="form-control" type="text" name="mobile_phone" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <p>
                <img src="{{asset('storage/' . $store->logo)}}" alt="">
            </p>
            
            <label for="file">Fotos da Loja</label>
            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" multiple>
            @error('logo')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Atualizar Loja</button>
        </div>
    </form>   
@endsection