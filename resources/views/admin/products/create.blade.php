@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="post">
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->

        @csrf

        <div class="form-group">
            <label for="" name="">Produto</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control" type="text" name="description">
        </div>

        <div class="form-group">
            <label for="" name="">Preço</label>
            <input class="form-control" type="text" name="price">
        </div>

        <div class="form-group">
            <label for="" name="">Conteúdo</label>
            <textarea class="form-control" type="text" name="body" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="" name="">Slug</label>
            <input class="form-control" type="text" name="slug">
        </div>

        <div class="form-group">
            <label for="" name="">Loja</label>
            <select class="form-control" type="text" name="store">
                @foreach($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Criar Produto</button>
        </div>
    </form>
@endsection
