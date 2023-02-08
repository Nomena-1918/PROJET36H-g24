<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <center>
    <div id="main">
        <h2>S'inscrire</h2>
     
        <?php if(isset($error)){ ?>
            <p style="color: red;"> <?php echo $error; ?></p>
            <?php } ?>
            
            <form action="<?php echo site_url('login/traitementinscription'); ?>" method="post">
                <p><input type="text" name="name" placeholder="Votre nom"></p>
                <p><input type="email" name="mail" placeholder="Votre mail"></p>
                <p><input type="password" name="mdp" placeholder="Votre mot dde passe"></p>
                <p><input type="submit" value="inscription"></p>
            </form>
            <p><button><a href="<?php echo site_url('login/index'); ?>">connexion</a></button></p>
    </div>
    </center>
</body>

</html>