<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>

    <center>

        <h2>Ajouter un Categorie</h2>

        <?php if(isset($error)){ ?>
            <p style="color:red;"><?php echo $error ?></p>
        <?php } ?>

        <form action="<?php echo site_url('traitement/traitementajoutcategorie'); ?>" method="post">
            <p><input type="text" name="nomcategorie" placeholder="Nom du categorie"></p>
            <p><input type="submit" values="Ajouter"></p>
        </form>
       
        <p> <a href="<?php echo site_url('traitement/categorie'); ?>">Retour liste categorie</a></p>
    </center>

<?php
    $this->load->view('footer');
?>