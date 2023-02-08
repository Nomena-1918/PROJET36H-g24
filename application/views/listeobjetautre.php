<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>

    <center>
        <h2>Gestion des objets des autres utilisateurs</h2>

    <table>
        <tr>
            <th width="200px">Id</th>
            <th width="200px">Titre</th>
            <th width="200px">description</th>
            <th width="200px">Prix</th>
            <th width="200px">idproprietaire</th>
        </tr>       
        
    <?php for ($i=0; $i <count($objets) ; $i++) { ?>
        <tr><a href=""></a>
            <td><?php echo $objets[$i]['idobjet'];?></td>
            <td><?php echo $objets[$i]['titre'];?></td>
            <td><?php echo $objets[$i]['description'];?></td>
            <td><?php echo $objets[$i]['prix'];?></td>           
            <td><?php echo $objets[$i]['idutilisateur'];?></td>           
        </tr>
    <?php } ?>
    </table>
    </center>
<?php
    $this->load->view('footer');
?>