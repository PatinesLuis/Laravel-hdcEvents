@extends('layouts.main')

@section('title','HDC events')

@section('content')
    

    <h1>hello world</h1>
    @if(10 >5)
        <p>Condição true</p>
    @endif

    <p>{{$nome}} e tenho {{$idade}}</p>

    @for($i = 0; $i < count($irineu); $i++)
        <p>{{$irineu[$i]}}</p>
        
    @endfor
@endsection
