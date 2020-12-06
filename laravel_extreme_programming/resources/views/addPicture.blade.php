@extends('template.template')
@section('content')
<h1 class="text-center mt-5">Add Pictures</h1>
<form action="/add-picture" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container mt-5">
        <label for="picture">Add a picture: <input type="file" id="picture" name="image"></label><br>
        <select name="categorie_id" class="mt-3">
            <option>Choose category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br>
        <button type="submit" class="btn btn-primary mt-4">Add</button>
    </div>
</form>
@endsection