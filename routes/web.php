<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $hello = 'Hello Wolrd';
    return view('welcome', compact('hello'));
});

Route::get('/model', function(){
    //$products = \App\Product::all();

    // ACTIVE RECORD //

    //$user = new \App\User();
    //$user = \App\User::find(1);
    //$user->name = 'Usuário Teste';
    //$user->email = 'email@test.com';
    //$user->password = bcrypt('123456');

    //$user->save();

    //return \App\User::all();

    // FIM ACTIVE RECORD //

    /* ==================================== */

    // QUERIES NO ELOQUENT //

    //return \App\User::all();
    //return \App\User::where('name' , 'Granville Pfeffer')->get();
    //return \App\User::first();
    //return \App\User::paginate(10);
  
    // FIM QUERIES NO ELOQUENT //

    /* ==================================== */


    // MASS ASIGNMENT & MASS UPDATE //

   /*
        $user = \App\User::create([

            'name' => 'Wilder',
            'email' => 'wilderagner@email.com',
            'password' => bcrypt('123456')

        ]);

        dd($user);  
    */

   /*
    $user = \App\User::find(42);
    $user->update([
        'name' => 'Atualizando com Mass update'
    ]);
    
    dd($user);
    
    return \App\User::find(42);

    */

    // FIM MASS ASSIGNMENT & MASS UPDATE //

    /* ===================================== */

    // Queries Relacionais //

        //$user = \App\User::find(4);

       // dd($user->store()->count()); // O objeto único (Store) se for collection de Dados (Objetos)

        // Pegar os produtos de uma loja?
        //$loja = \App\Store::find(1);
        //return $loja->products()->where('id', 9)->get();

        //Pegar as lojas de uma categoria de uma loja?
       // $categoria = \App\Category::find(1);
       // $categoria->products;


       /* ================================== */

       // INSERINDO RELAÇÕES //

       //Criar uma loja para um Usuário

        /*
            $user = \App\User::find(10);
            $store = $user->store()->create([
                'name' => 'Loja teste',
                'description' => 'Loja teste de produtos de informatica',
                'mobile_phone' => 'XX-XXXX-XXXX',
                'phone' => 'XX-XXXX-XXXX',
                'slug' => 'loja-teste-de-produtos-de-informatica'
            ]);

            dd($store);
        */

       // Criar um produto para uma lojas
        
       /*
            $store = \App\Store::find(41);
            $product = $store->products()->create([
                'name' => 'Notebook Intel',
                'description' => 'Core I5 10GB',
                'body' => 'Qualquer Coisa',
                'price' => 2999.90,
                'slug' => 'notebook-intel',
            ]);

            dd($product);
        
            */

       // Criar uma categoria para um produto
        /*
            $category = \App\Category::create([
                'name' => 'Games',
                'description' => null,
                'slug' => 'games',
            ]);

            $category = \App\Category::create([
                'name' => 'Notebooks',
                'description' => null,
                'slug' => 'notebooks',
            ]);

            return \App\Category::all();

           //dd($category);

           //return \App\User::all();
        */

        // Adicionar uma categoria para um produto //

       /*
        $product = \App\Product::find(41);

        dd($product->categories()->sync([2]));

        */
        
       /*
        $product = \App\Product::find(41);

        return $product->categories;
      */  
});

Route::get('/admin/stores', 'Admin\\StoreController@index');

