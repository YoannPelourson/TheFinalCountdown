@extends('template')
@section('content')
<h2>Our OST</h2>
<ul>
    @foreach($sounds as $sound)
    
       <h3> Title: {{ $sound->title }}</h3>
       @foreach($sound->genre as $genre)
       <li>Genre: {{ $genre->name }}</li>
       @endforeach
       <li>Composer: {{ $sound->composer->name}}</li>
       <li>Price: {{ $sound->price }}</li>
       <li>Stock: {{ $sound->stock }}</li>

       <form action="/sound/deleteAction" method="POST">
        @csrf
       <input type="hidden" name="id" value="{{ $sound->id }}">
       <input type="submit" value="X">
       </form>

       <form action="/sound/updateOne" method="POST">
        @csrf
       <input type="hidden" name="id" value="{{ $sound->id }}">
       <input type="submit" value="U">
       </form>

    @endforeach
</ul>
@endsection


