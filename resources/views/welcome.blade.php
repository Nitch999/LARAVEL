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


<h1>MR.JACK</h1>

    </body>
</html>
