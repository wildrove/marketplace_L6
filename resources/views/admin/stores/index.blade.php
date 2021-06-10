@extends('layouts.app')

@section('content')
    <a href="{{route('admin.stores.create')}}" class="btn btn-sm btn-success mt-5 mb-3 justify-content-right">CRIAR LOJA</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{route('admin.stores.edit', ['store' => $store->id])}}">EDITAR</a>
                        <a class="btn btn-danger btn-sm" href="{{route('admin.stores.destroy', ['store' => $store->id])}}">REMOVER</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$stores->links()}}
@endsection