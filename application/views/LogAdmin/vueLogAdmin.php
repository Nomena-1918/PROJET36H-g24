<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->view('header');
?>  
    <div class="flex-column justify-content-center align-items-center">
        <?php
            $this->load->view('LogAdmin/titreLogAdmin');
            $this->load->view('login');
            $this->load->view('LogAdmin/specLogAdmin');
        ?>
    </div>
<?php    
    $this->load->view('footer');
?>
