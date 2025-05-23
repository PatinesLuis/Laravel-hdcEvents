<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "luis";
    $idade = 22;

    $arr = [1,2,3,4,5];

    return view('welcome', ['nome' => $nome, 'idade'=> $idade, 'irineu' =>$arr] );
});

Route::get('produtos',function (){
    return view('products
    ');
});

Route::get('produtos/{id}',function ($id){
    return view('product', ['id' => $id]);
});
