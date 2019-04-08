
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>So Milano</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="{{route('contact')}}">Contactez-nous</a></li>
            <li><a href="{{route('login')}}">Se Connecter</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="{{route('accueil')}}">Accueil</a> </li>
            <li><a href="{{route('vet')}}">Vêtements</a></li>
            <li><a href="{{route('nouv')}}">Nouveautés</a></li>
            <li><a href="{{route('chaus')}}">Chaussures</a></li>

        </ul>
    </div>
</div>

@yield('content')

<div class="callout large secondary">
    <div class="row">
        <div class="large-4 columns">
            <h5><strong>Nous trouver</strong></h5>
            <p>m.me/somilano.conceptstore
                Appeler 07 68 86 52 15</p>
            <p>sophia@somilano.fr
                http://somilano.fr
                categories
                Magasin de vêtements</p>
        </div>
        <div class="large-3 large-offset-2 columns">
            <ul class="menu vertical">
                <li><p><strong>Notre société</strong></p></li>
                <li><a href="#">
                        Livraison
                        Mentions légales
                        Conditions d'utilisation
                        A propos
                        Paiement sécurisé
                        Contactez-nous
                        sitemap
                        Magasins

                    </a></li>

            </ul>
        </div>
        <div class="large-3 columns">
            <ul class="menu vertical">
                <li><a</li>
                <img src="https://external-cdg2-1.xx.fbcdn.net/map_tile.php?v=1014&osm_provider=2&x=16770&y=11744&z=15&language=fr_FR" class="img-fluid" alt="Responsive image">
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>