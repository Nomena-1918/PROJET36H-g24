<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="d-flex justify-content-center align-items-center"  >
        <center >
            <div id="main">
                

                <?php if(isset($error)){ ?>
                <p style="color: red;"> <?php echo $error; ?></p>
                <?php } ?>

                <form action="<?php echo site_url('controleurLogAdmin/traitementlogin'); ?>" method="post">
                    <p><input type="email" name="mail" placeholder="Email"></p>
                    <p><input type="password" name="mdp" placeholder="password"></p>
                    <p><input type="submit" value="connexion"></p>
                </form>
                <!-- <p><button><a href="<?php //echo site_url('controleurLogAdmin/inscription'); ?>">inscription</a></button></p> -->
                
            </div>
            </div>
        </center>
    <div>
    
