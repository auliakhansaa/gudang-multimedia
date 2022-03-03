@extends('layout.main')

@section('container')

     <h1> Tentang Saya </h1>

     <h3>{{ $name }}</h3>
     <h3 >Age | {{ $age }}<br>
     Hallo, nama saya Lia, Saya adalah Web Developer <br>

     <img src="img/{{ $img }}" width="200"> 
     
    

@endsection