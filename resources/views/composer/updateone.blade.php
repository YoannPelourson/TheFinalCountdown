@extends('template')
@section('content')
<h2>Update {{ $composerToUpdate->name }} </h2>
<div class="form-composer">
<form class="form-composer" action="/composer/updateAction" method="POST">
    @csrf
        <input type="hidden" name="id" value="{{ $composerToUpdate->id}}">
        
        <label for="name">Name:  </label>
        <input type="text" value="{{ $composerToUpdate->name }}" name='name' id='name'>

        <label for="picture"> Picture (please only add web link): </label>
        <input type="text" value="{{ $composerToUpdate->picture }}" name="picture" id="picture">

        <input  class="validate-button" type="submit" value="send">
</form>
</div>
@endsection