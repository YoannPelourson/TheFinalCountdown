@extends('template')
@section('content')
<h2>Add a new composer</h2>
<div class="form-composer">
<form action="/composer/insertAction" method="POST">
    @csrf
        <label for="name">Name:  </label>
        <input type="text" name='name' id='name'>

        <input class="validate-button" type="submit" value="send">
</form>
</div>
@endsection