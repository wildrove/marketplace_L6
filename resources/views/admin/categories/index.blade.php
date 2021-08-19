@extends('layouts.app')

@section('content') 
    <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-success mt-5 mb-3 justify-content-right">Criar Categoria</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Categoria</th>
                <th>Slug</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-warning btn-sm" href="{{route('admin.categories.edit', ['category' => $category->id])}}">EDITAR</a>
                            <form action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="post">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">REMOVER</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection