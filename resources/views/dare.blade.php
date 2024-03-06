@extends('layouts.app')

@section('titre')
Connexion
@endsection


@section('contenu')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f41b;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        background: #ffffff7d;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #f77104ac;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .terms {
        text-align: center;
    }

    .terms a {
        color: #007bff;
        text-decoration: none;
    }
</style>

<div class="container">
    <h2>Inscription</h2>
    <form action="#" method="post">
        <label for="name">Nom complet</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="S'inscrire">

        <p class="terms">En cliquant sur "S'inscrire", vous acceptez nos <a href="#">conditions d'utilisation</a>.</p>
    </form>
</div>

<h1>MR.JACK DARE</h1>
@endsection
