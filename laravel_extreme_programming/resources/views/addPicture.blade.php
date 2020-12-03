@extends('template.template')
@section('content')
<h1 class="text-center">Add Pictures</h1>
<form action="/add-picture" method="POST">
    @csrf
    <div class="container">
        <label for="picture">Add a picture: <input type="file" id="picture" name="image" ></label>
        <select name="catgeorie_id" >
            <option>Choose category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button type="submit">Add</button>
    </div>
</form>
@endsection