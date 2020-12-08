@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Tous les Avatars</h1>
<div class="container mt-5">
    <div class="row">
        @foreach ($avatars as $item)
        <div class="col-4">
            <div class="card mt-5 mb-5 border-dark p-3" style="width: 22rem;">
                <img src="{{asset('imagesAvatar/'.$item->src)}}" alt="" width="120" height="120" class="m-auto">
                <div class="d-flex">
                    <a href="/delete-avatar/{{$item->id}}" class="btn btn-danger mt-4 btn-lg">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop