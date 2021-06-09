@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <a class="btn btn-warning" href="/admin/stores/{{$store->id}}/edit">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/admin/stores/{{$store->id}}/destroy">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$stores->links()}}
@endsection