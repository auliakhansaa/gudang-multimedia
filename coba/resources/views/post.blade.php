@extends('layout.main')

@section('container')

@foreach ($isi as $post)
<h2> {{ $post["title"] }}</h2>
<h5>{{ $post["content"] }}</h5>
    
@endforeach
@endsection

