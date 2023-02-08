<?php
    $this->load->view('header');
?>
    
    <center>
    <h2>Gestion de mes objets</h2>

    <p><a href="<?php echo site_url('traitement/ajouterobjet'); ?>">Nouvel objet</a></p>    
    <p><a href="<?php echo site_url('traitement/categorie'); ?>">categorie</a></p>    
    <table>
        <tr>
            <th width="200px">Id</th>
            <th width="200px">Titre</th>
            <th width="200px">Description</th>
            <th width="200px">Prix</th>
            <th width="200px">Action</th>     
        </tr>     

        
        <?php for ($i=0; $i <count($objets) ; $i++) { ?>
            <tr>
            <td><?php echo $objets[$i]['idobjet'];?></td>
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