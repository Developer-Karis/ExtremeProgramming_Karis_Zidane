@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Mettre à jour les données</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card-body p-0">
                <form action="/update-user/{{$edit->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card border-dark p-4 m-auto" style="width: 20rem;">
                        <label for="">Nom : </label>
                        <input type="text" name="newName" value="{{$edit->name}}">

                        <label for="" class="mt-3">Age : </label>
                        <input type="number" name="newAge" class="w-25" value="{{$edit->age}}">

                        <label for="" class="mt-3">Nom de l'image : </label>
                        <input type="text" name="newNameAvatar" value="{{$edit->avatar->nom}}" class="w-75">

                        <label for="" class="mt-3">Changer l'Avatar : </label>
                        <input type="file" name="newPhoto">

                        <label for="" class="mt-3">Email : </label>
                        <input type="email" name="newEmail" value="{{$edit->email}}">

                        <label for="" class="mt-3">Password : </label>
                        <input type="password" name="newPassword" value="{{$edit->password}}">

                        <button class="btn btn-primary mt-4 w-50">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@stop