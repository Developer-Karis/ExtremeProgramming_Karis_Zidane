@extends('template.template')
@section('content')
<h1 class="text-center mt-5 pb-5">Bienvenue dans la Catégorie : {{$galerie->name}}</h1>
<div class="row p-0 m-0">
    @foreach($images as $image)
    <div class="col-2 text-center">
        <div class="card border-dark">
            <div class="card-body">
                @if($image->categorie_id==$galerie->id)
                <img src="{{asset('images/'.$image->image)}}" alt="" height="100px" width="100px">
                <form action="/image-delete/{{$image->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mt-3 mr-2">Delete</button>
                    <a href="/download-photo/{{$image->id}}" class="btn btn-success mt-3">Download</a>
                </form>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection