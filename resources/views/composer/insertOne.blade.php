@extends('template')
@section('content')
<h2>Add a new composer</h2>
<div class="form-composer">
<form class="form-composer" action="/composer/insertAction" method="POST">
    @csrf
        <label for="name">Name:  </label>
        <input type="text" name='name' id='name'>

        <label for="picture"> Picture (please only add web link): </label>
        <input type="text" name="picture" id="picture">

        <input class="validate-button" type="submit" value="send">
</form>
</div>
@endsection