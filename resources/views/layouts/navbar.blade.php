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
