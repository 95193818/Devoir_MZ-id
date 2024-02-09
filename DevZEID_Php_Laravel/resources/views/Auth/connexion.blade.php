@extends('layouts.base')

@section('contenu')

<div class="container col-4 mt-5">
    <h3 class="text-center">CONNEXION</h3><br>
    <form method="POST" action="{{ route('connexion')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Adress email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="password" name="mot de passe" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Se rapeller de moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>


@endsection
