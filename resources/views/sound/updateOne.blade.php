@extends('template')
@section('content')
<div class="form-sound">
<form class="insert-sound" action="/sound/updateAction" method="POST">
@csrf
    <input type="hidden" name="id" value="{{ $soundToUpdate->id }}">

    <label for="title">Title: </label>
    <input type="text" name='title' value="{{ $soundToUpdate->title }}" id='title'>

    <label for="genre">Genre: </label>
    <select name="genre[]" id="genre" multiple>
        @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
    </select>
    
    <label for="composer">Composer: </label>
    <select name="composer" id="composer">
        @foreach($composers as $composer)
        <option value="{{ $composer->id }}">{{ $composer->name }}</option>
        @endforeach
    </select>

    <label for="price ">Price: </label>
    <input type="number" name="price" value="{{ $soundToUpdate->price }}" id="price">

    <label for="stock">Stock: </label>
    <input type="number" name="stock" value="{{ $soundToUpdate->stock }}" id="stock">

    <input class="validate-button" type="submit" value="send">

</form>
</div>
@endsection