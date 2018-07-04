@extends('template')
@section('content')
<form action="/sound/insertAction" method="POST">
@csrf
    <label for="title">Title: </label>
    <input type="text" name='title' id='title'>

    <label for="genre">Genre: </label>
    <select name="genre[]" id="genre" multiple>
        @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
    </select>
    
    <label for="composer">Composer: </label>
    <select  name="composer" id="composer" >
        @foreach($composers as $composer)
        <option  value="{{ $composer->id }}">{{ $composer->name }}</option>
        @endforeach
    </select>

    <label for="price ">Price: </label>
    <input type="number" name="price" id="price">

    <label for="stock">Stock: </label>
    <input type="number" name="stock" id="stock">

    <input type="submit" value="send">

</form>

<form action="/composer/insertOne" method="GET">
    <label for="missCompo">Your composer don't be here?</label>
    <input type="submit" value="Add him">
</form>
@endsection