@extends('template.template')
@section('content')
<h1 class="text-center">Create Gallerie</h1>
<form action="/add-Galerie" method="POST">
@csrf
    <div class="container">
        <label for="galerieName">Galerie Name : <input type="text" id="galerieName" name="name" value="{{old('name')}}"></label>
        <button type="submit">Add</button>
    </div>
</form>
@endsection