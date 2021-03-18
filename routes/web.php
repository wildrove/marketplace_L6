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

    $user = \App\User::find(42);
    $user->update([
        'name' => 'Atualizando com Mass update'
    ]);
    
    dd($user);
    
    return \App\User::find(42);

    // FIM MASS ASSIGNMENT & MASS UPDATE //

   
});

