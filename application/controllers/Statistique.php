<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller {

public function utilisateurinscrit(){
    // $this->load->helper("url");
    $this->load->model('fonction');

    $all = $this->fonction->selecting("utilisateur");
    $len = count($all)-1;
    return $len;
}
	
public function echangeeffectuer(){
    // $this->load->helper("url");
    $this->load->model('fonction');

    $all = $this->fonction->selecting_specified("echange", "statut=1");
    $len = count($all);
    return $len;
}

}
