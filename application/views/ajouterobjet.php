<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>

    <center>
        <h2>Ajouter un Objet</h2>

        <?php if(isset($error)){ ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php } ?>

        <form action="<?php echo site_url('traitement/traitementajoutobjet'); ?>" method="post">
            <p><input type="text" name="nomobjet" placeholder="Nom de l'objet"></p>
            <p><select name="idcategorie">
                <?php for ($i=0; $i < count($categorie) ; $i++) { ?>
                    <option value=<?php echo '"'.$categorie[$i]['idcategorie'].'"'; ?>><?php echo $categorie[$i]['nomcategorie']; ?></option>
                <?php } ?>
            </select></p>
            <p><input type="number" name="prix" placeholder="prix estimatif"></p>
            <p><input type="textarea" name="description" placeholder="Description"></p>
            <p><input type="submit" values="Ajouter"></p>
        </form>
    </center>

<?php
    $this->load->view('footer');
?>