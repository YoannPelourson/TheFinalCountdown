@extends('template')
@section('content')
<h2>Composers</h2>
<div class="show-container">
@foreach($composers as $composer)
<div class="composer-container">
        
    <ul>    
       <li>{{ $composer->name }}</li>
        <div class="img-container">
            <img src="{{ $composer->picture }}" alt="">
        </div>
       <form action="/composer/updateOne" method="POST">
        @csrf
       <input type="hidden" name="id" value="{{ $composer->id }}">
       <input class="update-button" type="submit" value="Update">
       </form>
    </ul>  
</div>      
@endforeach
</div>
@endsection