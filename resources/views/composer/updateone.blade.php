@extends('template')
@section('content')
<form action="/composer/updateAction" method="POST">
    @csrf
        <input type="hidden" name="id" value="{{ $composerToUpdate->id}}">
        
        <label for="name">Name:  </label>
        <input type="text" value="{{ $composerToUpdate->name }}" name='name' id='name'>

        <input type="submit" value="send">
@endsection