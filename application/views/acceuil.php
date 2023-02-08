<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>
    <center>
        <p><?php echo $_SESSION['utilisateur']['nomutilisateur']; ?></p>
        
        <h2>Gestion de mes objets</h2>

        <p><a href="<?php echo site_url('traitement/ajouterobjet'); ?>">Nouvel objet</a></p>

    <table>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>       
        
    <?php for ($i=0; $i <count($objets) ; $i++) { ?>
        <tr><a href=""></a>
            <td><?php echo $objets[$i]['idobjet'];?></td>
            <td><?php //echo $objets[$i]['titre'];?> inserer photo ici</td>
            <td><?php echo $objets[$i]['titre'];?></td>
            <td><?php echo $objets[$i]['description'];?></td>
            <td><?php echo $objets[$i]['prix'];?></td>
            
            <td><a href="<?php echo site_url("traitement/traitementdeleteobject?idobjet=".$objets[$i]['idobjet']); ?>">supprimer</a></td>           
        </tr>
    <?php } ?>
    </table>
    </center>
<?php
    $this->load->view('footer');
?>