<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>
    <center>
    <div id="main">
        <h2>S'inscrire</h2>
     
        <?php if(isset($error)){ ?>
            <p style="color: red;"> <?php echo $error; ?></p>
            <?php } ?>
            
            <form action="<?php echo site_url('index.php/ControleurLogAdmin/traitementinscription'); ?>" method="post">
                <p><input type="text" name="name" placeholder="Votre nom"></p>
                <p><input type="email" name="mail" placeholder="Votre mail"></p>
                <p><input type="password" name="mdp" placeholder="Votre mot dde passe"></p>
                <p><input type="submit" value="inscription"></p>
            </form>
            <p><button><a href="<?php echo site_url('index.php/ControleurLogAdmin/formConnexionClient'); ?>">connexion</a></button></p>
    </div>
    </center>
<?php
    $this->load->view('footer');
?>