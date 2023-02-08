<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/css.css">
    <title>Detail</title>
</head>
<body>
    <center>
    <nav style="display: inline-flex;" >
            <div><a href="<?php echo site_url('traitement/acceuil'); ?>">Acceuil</a></div>
            <div><a href="">Echange</a></div>
            <div><a href="">Demandes</a></div>
            <div><a href="">Propositions</a></div>
            <div>
                <ul> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENU<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('traitement/categorie'); ?>">Categories</a></li>
                            <li><a href="<?php echo site_url('traitement/ajouterobjet'); ?>">Ajouter Objet</a></li>
                            <li><a href="#">Deconnexion</a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
        </nav>

        <h2>Details de l'objet</h2>
        <p>Proprietaire :</p>
        <p>idobjet :</p>
        <p>Nom :</p>
        <p>Prix estimatif: </p>
        <p>Status :</p>
        
        <div id="image">
            <div><img src="" alt=""></div>
            <div><img src="" alt=""></div>
            <div><img src="" alt=""></div>
        </div>

        <p><button><a href="">Echanger</a></button></p>
    </center>

    
    <script src="../assets/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/npm.min.js"></script>
</body>
</html>