@extends('layouts.app')

@section('content') 
    <h1>Criar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="" name="">Loja</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
            <label for="" name="">Descrição</label>
            <input class="form-control" type="text" name="description">
        </div>

        <div class="form-group">
            <label for="" name="">Telefone</label>
            <input class="form-control" type="text" name="phone">
        </div>

        <div class="form-group">
            <label for="" name="">Celular</label>
            <input class="form-control" type="text" name="mobile_phone">
        </div>

        <div class="form-group">
            <label for="" name="">Slug</label>
            <input class="form-control" type="text" name="slug">
        </div>

        <div class="form-group">
            <label for="" name="">Usuário</label>
            <select class="form-control" type="text" name="user">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-lg mt-3" type="submit">Criar Loja</button>
        </div>
    </form>   
@endsection