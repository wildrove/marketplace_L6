@extends('layouts.app')

@section('content')
    @if(!$store)
        <a href="{{route('admin.stores.create')}}" class="btn btn-sm btn-success mt-5 mb-3 justify-content-right">CRIAR LOJA</a>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-warning btn-sm" href="{{route('admin.stores.edit', ['store' => $store->id])}}">EDITAR</a>
                        <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" type="submit">REMOVER</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection