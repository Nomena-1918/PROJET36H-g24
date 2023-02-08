<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class ControleurObjets extends CI_Controller
{
	public function index()
	{
        $this->listeMesObjets();
		
	}

    public function listeLeursObjets(){
        $this->load->view('objets/vueLeursObjets');
    }
    public function listeMesObjets(){
        $this->load->view('objets/vueMesObjets');
    }

}
?>