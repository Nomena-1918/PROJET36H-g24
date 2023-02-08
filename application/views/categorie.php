<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>

<center>
        <h2>Les Categories</h2>

    <p><a href="<?php echo site_url('traitement/ajoutercategorie'); ?>">Nouvelle categorie</a></p>

        <div id="main">
        <table>
            <tr>
                <th>Id</th>
                <th>Nom Categorie</th>
            </tr>       
            
        <?php for ($i=0; $i <count($categorie) ; $i++) { ?>
            <tr>
                <td><?php echo $categorie[$i]['idcategorie'];?></td>
                <td><?php echo $categorie[$i]['nomcategorie'];?></td>
            </tr>
        <?php } ?>
        </table>
    </div> 
</center>

<?php
    $this->load->view('footer');
?>