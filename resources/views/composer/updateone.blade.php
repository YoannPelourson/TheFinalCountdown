@extends('template')
@section('content')
<h2>Update {{ $composerToUpdate->name }} </h2>
<div class="form-composer">
<form action="/composer/updateAction" method="POST">
    @csrf
        <input type="hidden" name="id" value="{{ $composerToUpdate->id}}">
        
        <label for="name">Name:  </label>
        <input type="text" value="{{ $composerToUpdate->name }}" name='name' id='name'>

        <input  class="validate-button" type="submit" value="send">
</form>
</div>
@endsection