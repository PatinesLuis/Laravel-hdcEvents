<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){
        $nome = "luis";
        $idade = 22;

    $arr = [1,2,3,4,5];

    return view('welcome', ['nome' => $nome, 'idade'=> $idade, 'irineu' =>$arr] );
    }

    public function create(){
        return view('events.create');
    }
}
