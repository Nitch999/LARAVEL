@extends('layouts.app')

@section('titre')
Fortune
@endsection


@section('contenu')

<h1>Liste des Produits</h1>
    <ul>
        @foreach ($produits as $produit)
            <div class="well">
                <h1>{{$produits->product_name}}</h1>
            </div>
        @endforeach
    </ul>

@endsection
