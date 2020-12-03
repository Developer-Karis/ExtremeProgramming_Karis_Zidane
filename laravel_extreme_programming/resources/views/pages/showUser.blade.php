@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Info User</h1>
<div class="container mt-5">
    <div class="row">
        <div class="card bg-warning mt-5 mb-5 ml-5 border-dark p-3 m-auto" style="width: max-content;">
            <img src="{{asset('imagesAvatar/'.$show->avatar->src)}}" alt="" width="200" height="200" class="m-auto">
            <div class="card-body mt-4">
                <h5 class="font-weight-bold">Name : {{$show->name}}</h5>
                <h5 class="font-weight-bold">Age : {{$show->age}}</h5>
                <h5 class="font-weight-bold">Email : {{$show->email}}</h5>
                <h5 class="font-weight-bold">Password : {{str_repeat("*", strlen($show->password))}}</h5>
                <h5 class="font-weight-bold">Nom de l'image : {{$show->avatar->nom}}</h5>
                <h5 class="font-weight-bold">Src : {{$show->avatar->src}}</h5>
                <div class="d-flex">
                    <a href="/edit-user/{{$show->id}}" class="btn btn-primary mt-4 mr-2">Edit</a>
                    <a href="/delete-user/{{$show->id}}" class="btn btn-danger mt-4">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop