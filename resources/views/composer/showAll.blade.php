@extends('template')
@section('content')
<h2>Composers</h2>
<ul>
    @foreach($composers as $composer)
       <li>{{ $composer->name }}</li>
       
       <form action="/composer/updateOne" method="POST">
        @csrf
       <input type="hidden" name="id" value="{{ $composer->id }}">
       <input type="submit" value="U">
       </form>
    @endforeach
    
</ul>
@endsection