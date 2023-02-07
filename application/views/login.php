<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <center>
        <div id="main">
            <h2>Se Connecter</h2>

            <?php if(isset($error)){ ?>
            <p style="color: red;"> <?php echo $error; ?></p>
            <?php } ?>

            <form action="<?php echo site_url('controleurLogAdmin/traitementlogin'); ?>" method="post">
                <p><input type="email" name="mail" placeholder="Email"></p>
                <p><input type="password" name="mdp" placeholder="password"></p>
                <p><input type="submit" value="connexion"></p>
            </form>
            <p><button><a href="<?php echo site_url('controleurLogAdmin/inscription'); ?>">inscription</a></button></p>
            
        </div>
        </div>
    </center>
    
