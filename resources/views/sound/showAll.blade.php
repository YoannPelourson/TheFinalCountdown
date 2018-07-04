@extends('template')
@section('content')
<h2>Our OST</h2>
<div class="show-container">
    @foreach($sounds as $sound)
    <div class="ost-container">
    <ul>  
       <h3>  {{ $sound->title }}</h3>
       @foreach($sound->genre as $genre)
       <li>Genre: {{ $genre->name }}</li>
       @endforeach
       <li>Composer: {{ $sound->composer->name}}</li>
       <li>Price: {{ $sound->price }}</li>
       <li>Stock: {{ $sound->stock }}</li>
    </ul>
    <div class="buttons-container">
       <form action="/sound/deleteAction" method="POST">
        @csrf
       <input type="hidden" name="id" value="{{ $sound->id }}">
       <input class="delete-button" type="submit" value="X">
       </form>

       <form action="/sound/updateOne" method="POST">
        @csrf
       <input type="hidden" name="id" value="{{ $sound->id }}">
       <input class="update-button" type="submit" value="Update">
       </form>
    </div>   
    </div>   
    
    @endforeach
</div>
@endsection


