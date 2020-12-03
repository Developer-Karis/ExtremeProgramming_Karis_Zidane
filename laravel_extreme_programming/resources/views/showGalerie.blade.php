@extends('template.template')
@section('content')
<h1>Bienvenue dans la Catégorie : {{$galerie->name}}</h1>
@foreach($images as $image)
@if($image->categorie_id==$galerie->id)
<img src="{{asset('images/'.$image->image)}}" alt="" height="50px" width="50px">
<form action="/image-delete/{{$image->id}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endif
@endforeach
@endsection