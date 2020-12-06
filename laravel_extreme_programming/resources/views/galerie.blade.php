@extends('template.template')
@section('content')
<h1 class="text-center mt-5">Galleries d'images</h1>
<div class="container mt-5">
    <div class="row">
        @foreach($galeries as $galerie)
        <div class="col-4 text-center">
            <div class="card border-dark">
                <div class="card-body">
                    <a href="/galerie/{{$galerie->id}}" style="text-decoration:none; font-size: 25px;"
                        class="text-dark">{{$galerie->name}} <br>
                        <img style="height: 100px;" src="{{asset('images/'. $galerie->imageCategorie)}}"
                            alt="image de la categorie"><br></a>
                    <form action="/galerie-delete/{{$galerie->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @if($loop->iteration % 4 == 0)
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>

    @endsection