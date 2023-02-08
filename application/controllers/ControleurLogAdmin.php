<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControleurLogAdmin extends CI_Controller {

	public function index(){
		$this->load->view("LogAdmin/vueLogAdmin");
	}

	public function formConnexionClient()
	{
		//redirect('ControleurLogClient');
		$this->load->view('LogClient/vueLogClient');
	}

	public function formInscription()
	{
		// redirect('inscription');
		$this->load->view('inscription/inscription');

	}

    public function traitementlogin(){
		$this->load->helper("url");

		$this->load->model('fonction');
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('mdp');
		if($mail == "" || $mdp == ""){
			$a['error'] = 'Les champs ne doit pas etre vide';
			$this->load->view('login', $a);
		}else{		
		$existe = $this->fonction->login($mail, $mdp);

		if($existe==false){
			$a['error'] = 'Ce compte n exite pas. Veuiller creer un compte';
			$this->load->view('login', $a);
		}else{
			$this->load->library('session');
			$condition = sprintf("mail='%s' and mdp='%s'", $mail, $mdp);
			$user = $this->fonction->selecting('utilisateur');
			$len = count($user);
			$_SESSION['utilisateur'] = $user[$len-1];

			$sql = sprintf('idutilisateur=%s', $_SESSION['utilisateur']['idutilisateur']);
			$all['objets'] = $this->fonction->selecting_view_specified('mesobjet', $sql);
			$this->load->view('acceuil', $all);
			}
		}
	}

	public function traitementinscription(){
		$this->load->helper("url");

		$this->load->model('fonction');
		$nom = $this->input->post('name');
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('mdp');

		if($nom=="" || $mail=="" || $mdp==""){
			$a['error'] = 'Les champs ne doivent pas etre vide';
			$this->load->view('inscription', $a);
		}else{
			$this->fonction->inscription($nom, $mail, $mdp);
			$this->load->view("login");
		}

	}


}
