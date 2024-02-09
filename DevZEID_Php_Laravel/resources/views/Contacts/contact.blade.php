@extends('layout')


@section('content')
    <h3 class="text-align:center">SYSTEME DE GESTION DES CONTACTS</h3>
        <div class="container">
            <a class="btn btn-primary" style="margin-left: 500px" href="{{ route('contact.create')}}">Ajouter</a>
            <table class="table">
                thead>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">email</th>
                        <th scope="col">Téléphone</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div style="display: flex;" class="button">
            <a class="btn btn-primary " href="{{route('Ajouter')}}">Ajouter</a>
            <a class="btn btn-primary " href="{{route('Modifier')}}">Modifier</a>
            <a class="btn btn-primary " href="{{route('Supprimer')}}">Supprimer</a>
        </div>



@endsection

