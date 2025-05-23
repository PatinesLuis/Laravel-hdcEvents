<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('produtos',function (){
    return view('products
    ');
});

Route::get('produtos/{id}',function ($id){
    return view('product', ['id' => $id]);
});
