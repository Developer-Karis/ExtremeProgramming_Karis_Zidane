@extends('template.template')
@section('content')
<h1 class="text-center">Galleries d'images</h1>
<div class="container mt-5">
    <div class="row">
        @foreach($galeries as $galerie)
        <div class="col-4">

            <a href="/galerie/{{$galerie->id}}" style="text-decoration:none;" class="text-dark">{{$galerie->name}} <br>
                <img style="height: 50px;" src="{{asset('images/'. $galerie->imageCategorie)}}" alt="image de la categorie"><br></a>
            <form action="/galerie-delete/{{$galerie->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        @if($loop->iteration % 4 == 0)
    </div>
    <div class="row">
        @endif

        @endforeach
    </div>

    @endsection