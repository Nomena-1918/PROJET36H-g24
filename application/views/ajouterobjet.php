<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/css.css">
    <title>Ajouter Objet</title>
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

        <h2>Ajouter un Objet</h2>

        <?php if(isset($error)){ ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php } ?>

        <form action="<?php echo site_url('traitement/traitementajoutobjet'); ?>" method="post">
            <p><input type="text" name="nomobjet" placeholder="Nom de l'objet"></p>
            <p><select name="categorie">
                <?php for ($i=0; $i < count($categorie) ; $i++) { ?>
                    <option value=<?php echo '"'.$categorie[$i]['idcategorie'].'"'; ?>><?php echo $categorie[$i]['nomcategorie']; ?></option>
                <?php } ?>
            </select></p>
            <p><input type="number" name="prix" placeholder="prix estimatif"></p>
            <p><input type="textarea" name="description" placeholder="Description"></p>
            <p><input type="submit" values="Ajouter"></p>
        </form>
    </center>

    <script src="../assets/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/npm.min.js"></script>
</body>
</html>