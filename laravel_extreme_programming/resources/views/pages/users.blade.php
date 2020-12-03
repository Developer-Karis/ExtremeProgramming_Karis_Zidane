@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Tous les Users</h1>
<div class="container mt-5">
    <div class="row">
        @foreach ($users as $item)
        <div class="col-4">
            <div class="card mt-5 mb-5 border-dark p-3" style="width: 22rem;">
                <h1 class="mb-4">User {{$item->id}}</h1>
                <h5>Name : {{$item->name}}</h5>
                <h5>Email : {{$item->email}}</h5>
                <div class="d-flex">
                    <a href="/show-user/{{$item->id}}" class="btn btn-primary mt-4 mr-2">Info User</a>
                    <a href="/delete-user/{{$item->id}}" class="btn btn-danger mt-4">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop