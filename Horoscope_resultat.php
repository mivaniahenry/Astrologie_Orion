<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/3_MonHoroscope.css" />
    <title>Résultat de l'horoscope</title>
</head>

<body>
    <nav>
        <div class="ruban">
            <a href="index.html#Accueil"><img src="images/Orion logo officiel.jpg" alt="Astrologie Orion"></a>
            <h1 id="Hautdepage">Astrologie Orion</h1>
        </div>
        <div class="menu">   
            <a href="Accueil">Accueil</a>
            <a href="APropos.html">À propos</a>
            <a href="MonHoroscope.html">Mon horoscope</a>
            <a href="#Joindre">Nous joindre</a>
        </div>
    </nav>
    <main>
        <h1>Votre Horoscope</h1>
        <div class="resultat">
            <?php
            $signe = $_GET['signe'];
            include ($signe . '.html');
            ?>
        </div>
    </main>
    <footer>
    <h1 id="Joindre">Nous joindre</h1>
        <p>Pour plus d'information sur nos services, veuillez nous contacter
        <a href="mailto:info@astrologieorion.ca">par courriel</a>.</p>
        <button><a href="#Hautdepage">Haut de la page ↑</a></button><br/>
        <small><sup>&copy</sup>Astrologie Orion, tous droits réservés</small><br/>
        <small>Dernière mise à jour le 20 juin 2022<small>
    </footer>
</body>

</html>
