<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/css.css">
    <title>Acceuil</title>
</head>
<body>
    <center>
        <!-- header -->
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

        <h2>Gestion de mes objets</h2>
        <p><?php echo $_SESSION['utilisateur']['nomutilisateur']; ?> </p>

        <p><a href="<?php echo site_url('traitement/ajouterobjet'); ?>">Nouvel objet</a></p>

    <div id="main">
    <table>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Titre</th>
        </tr>       
        
    <?php for ($i=0; $i <count($objets) ; $i++) { ?>
        <tr><a href=""></a>
            <td><?php echo $objets[$i]['idobjet'];?></td>
            <td><?php //echo $objets[$i]['titre'];?> inserer photo ici</td>
            <td><?php echo $objets[$i]['titre'];?></td>
            <td><a href="<?php echo site_url("traitement/detailobjet?idobjet=".$objets[$i]['idobjet']); ?>">details</a></td>
            <td><a href="">modifier</a></td>
            <td><a href="">supprimer</a></td>            
        </tr>
    <?php } ?>
    </table>
</div> 
     </div>
    </center>

    <script src="../assets/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/npm.min.js"></script>
</body>
</html>