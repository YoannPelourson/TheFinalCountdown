@extends('template')
@section('content')
<form action="/composer/insertAction" method="POST">
    @csrf
        <label for="name">Name:  </label>
        <input type="text" name='name' id='name'>

        <input type="submit" value="send">
@endsection