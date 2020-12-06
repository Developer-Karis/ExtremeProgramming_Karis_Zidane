@extends('template.template')
@section('content')
<h1 class="text-center mt-5">Create Gallerie</h1>
<form action="/add-Galerie" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container mt-5">
        <label for="galerieName">Galerie Name : <input type="text" id="galerieName" name="name"
                value="{{old('name')}}"></label><br>
        <input type="file" name="imageCategorie" class="mt-3"><br>
        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </div>
</form>
@endsection