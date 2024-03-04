<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body >
    <style>

body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        background: #fff;
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
        border: 1px solid #ccc;
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
    /* Style de base pour la barre de navigation */
    nav {
        background-color: #333;
        overflow: hidden;
    }

    /* Style pour les liens de navigation */
    nav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    /* Style pour les liens de navigation au survol */
    nav a:hover {
        background-color: #ddd;
        color: black;
    }


</style>
</head>
<body>


<nav>
    <a href="{{URL ::to('/')}}">HOME</a>
    <a href="{{URL ::to('/sit')}}">À propos</a>
    <a href="{{URL ::to('/frm')}}">Service</a>
</nav>
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

<h1>MR.JACK DARE</h1>

    </body>
</html>
