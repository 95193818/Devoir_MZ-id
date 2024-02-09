@extends('layouts.base')

@section('contenu')

<div class="container mt-5 col-4">
    <h3 class="text-center">INSCRIPTION</h3><br>
    <form method="POST" action="{{ route('inscription')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Téléphone</label>
            <input type="text" name="téléphone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Adress email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Photo</label>
            <input class="form-control" name="photo" type="file" id="formFile">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="mot de passe" name="mot de passe" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmer Mot de passe</label>
            <input type="password" name="mot de passe_confirmation" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>


@endsection
