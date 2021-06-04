<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="" name="">Loja</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="" name="">Descrição</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="" name="">Telefone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="" name="">Celular</label>
        <input type="text" name="mobile_phone">
    </div>
    <div>
        <label for="" name="">Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label for="" name="">Usuário</label>
        <select type="text" name="user">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Criar Loja</button>
    </div>
</form>    