<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>
    <center>
        <nav style="display: inline-flex;" >
            <div><a href="">Acceuil</a></div>
            <div><a href="">Echange</a></div>
            <div><a href="">Demandes</a></div>
            <div><a href="">Propositions</a></div>
            <div>
                <ul> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENU<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Deconnexion</a></li>
                        </ul>
                            </li> 
                </ul>
            </div>
        </nav>
        <p><?php echo $_SESSION['utilisateur']['nomutilisateur']; ?></p>
    </center>

    <script src="../assets/bootstrap-3.3.6-dist/js/jquery.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap-3.3.6-dist/js/npm.min.js"></script>
<?php
    $this->load->view('footer');
?>