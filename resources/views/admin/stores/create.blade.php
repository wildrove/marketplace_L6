@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
       <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
       @csrf
        <div class="form-group">
            <label for="" name="">Loja</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{old('description')}}">
            @error('description')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Telefone</label>
            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{old('phone')}}">
            @error('phone')
                <span class="invalid-feedback" role="alert">{{$message}}<span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Celular</label>
            <input class="form-control @error('mobile_phone') is-invalid @enderror" type="text" name="mobile_phone" value="{{old('mobile_phone')}}" >
            @error('mobile_phone')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="" name="">Slug</label>
            <input class="form-control @error('slug') is-invalid @enderror" type="text" name="slug" value="{{old('slug')}}">
            @error('slug')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Criar Loja</button>
        </div>
    </form>
@endsection
