@extends('template.template')
@section('content')
<h1 class="text-center">Create Gallerie</h1>
<form action="/add-Galerie" method="POST" enctype="multipart/form-data">
@csrf
    <div class="container">
        <label for="galerieName">Galerie Name : <input type="text" id="galerieName" name="name" value="{{old('name')}}"></label>
        <input type="file" name="imageCategorie">
        <button type="submit">Add</button>
    </div>
</form>
@endsection