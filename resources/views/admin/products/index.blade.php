@extends('layouts.app')

@section('content')
    <a href="{{route('admin.products.create')}}" class="btn btn-sm btn-success mt-5 mb-3 justify-content-right">Criar Produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{'R$ ' . number_format($product->price, 2,',', '.')}} </td>
                    <td>{{$product->store->name}}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-warning btn-sm" href="{{route('admin.products.edit', ['product' => $product->id])}}">EDITAR</a>
                            <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="post">
    
                                @csrf
                                @method("DELETE")
    
                                <button class="btn btn-danger btn-sm" type="submit">REMOVER</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@endsection