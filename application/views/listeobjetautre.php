<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>
    <center>
        <h2>Gestion des objets de autree utilisateurs</h2>

    <table>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>proprietaire</th>
        </tr>       
        
    <?php for ($i=0; $i <count($objets) ; $i++) { ?>
        <tr>
            <td><?php echo $objets[$i]['idobjet'];?></td>
            <td><?php //echo $objets[$i]['titre'];?> Inserer photo ici</td>
            <td><?php echo $objets[$i]['titre'];?></td>
            <td><?php echo $objets[$i]['prix'];?></td>
            <td><?php echo $objets[$i]['idutilisateur'];?></td>         
        </tr>
    <?php } ?>
    </table>
    </center>
<?php
    $this->load->view('footer');
?>