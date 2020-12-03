@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Ajouter un Avatar</h1>
<div class="container mt-5">
    <div class="card mt-5 border-dark p-3" style="width: 20rem;">
        <form action="/add-avatar" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Nom de l'Avatar </label>
            <input type="text" name="addNameAvatar">

            <label for="" class="mt-3">Ajouter un Avatar : </label>
            <input type="file" name="addAvatar">

            <button type="submit" class="btn btn-primary mt-4">Créer</button>
        </form>
    </div>
</div>
@stop