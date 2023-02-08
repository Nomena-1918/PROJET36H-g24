
    <center>
        <h2>Gestion des objets de autree utilisateurs</h2>

    <table>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Titre</th>
            <th>proprietaire</th>
        </tr>       
        
    <?php for ($i=0; $i <count($objets) ; $i++) { ?>
        <tr><a href=""></a>
            <td><?php echo $objets[$i]['idobjet'];?></td>
            <td><?php echo $objets[$i]['nomobjet'];?></td>
            <td><?php echo $objets[$i]['nomobjet'];?></td>
            <td><a href="<?php echo site_url("traitement/detailobjet?idobjet=".$objets[$i]['idobjet']); ?>">details</a></td>
            <td><a href="">modifier</a></td>
            <td><a href="">supprimer</a></td>            
        </tr>
    <?php } ?>
    </table>
    </center>