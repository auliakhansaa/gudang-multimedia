@extends('layout.main')

@section('container')

     <h1> Daftar Film </h1>
     <div class="row">
     @foreach ($film as $data)
     
          <div class="col-sm-4" >
               <div class="card" >
                <img src="/img/{{ $data['image'] }}" class="card-img-top" alt="..." height="200px">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data['title'] }}</h5>
                    <h6 class="card-title">{{ $data['released'] }}
                    <p class="card-text">{{ $data['sinopsis'] }}</p>
                    <a href="/about/{{ $data['slug'] }}" class="btn btn-primary">Go somewhere</a>
                    </div>
               </div>
          </div>
     
         
     @endforeach
</div>
    

@endsection