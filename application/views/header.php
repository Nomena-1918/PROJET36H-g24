
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>">
    <!--
        <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
    -->
    <title>LogAdmin</title>
</head>
<body>
    <header>
<!--    <?php
//        echo "Je suis un header";
        ?>
-->  

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">TAKALO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center p-1" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item px-4">
                    <a class="nav-link" href="">Mes objets</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="<?php echo site_url('traitement/listeobjetautre'); ?>">Tous les objets</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="<?php echo site_url('#'); ?>">Propositions envoyées</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="<?php echo site_url('#'); ?>">Propositions reçues</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link" href="<?php echo site_url('#'); ?>">Déconnexion</a>
                </li>
                </ul>
            </div>
        </nav>

    </header>

