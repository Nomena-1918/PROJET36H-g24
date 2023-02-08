<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/style.css">
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6-dist/css/css.css">
    <title>Log In</title>
</head>

<body>
    <center>
        <div id="main">
            <h2>Se Connecter</h2>

            <?php if(isset($error)){ ?>
            <p style="color: red;"> <?php echo $error; ?></p>
            <?php } ?>

            <form action="<?php echo site_url('login/traitementlogin'); ?>" method="post">
                <p><input type="email" name="mail" placeholder="Email"></p>
                <p><input type="password" name="mdp" placeholder="password"></p>
                <p><input type="submit" value="connexion"></p>
            </form>
            <p><button><a href="<?php echo site_url('login/inscription'); ?>">inscription</a></button></p>
        </div>
        </div>
    </center>

</body>

</html>