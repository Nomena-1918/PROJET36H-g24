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
        </tr>       
        
    <?php for ($i=0; $i <count($objets) ; $i++) { ?>
        <tr><a href=""></a>
            <td><?php echo $objets[$i]['idobjet'];?></td>
            <td><?php //echo $objets[$i]['titre'];?> inserer photo ici</td>
            <td><?php echo $objets[$i]['titre'];?></td>
            <td><a href="">details</a></td>
            <td><a href="">modifier</a></td>
            <td><a href="">supprimer</a></td>            
        </tr>
    <?php } ?>
    </table>
    </center>
<?php
    $this->load->view('footer');
?>