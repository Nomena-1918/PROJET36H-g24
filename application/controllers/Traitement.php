<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement extends CI_Controller {

    public function deconnexion(){
        unset($_SESSION['utilisateur']);
        redirect('ControleurLogAdmin/index');
    }

    public function ajouterobjet(){
       
        $all['categorie'] = $this->fonction->selecting('categorie');
        
        $this->load->view('ajouterobjet', $all);
    }

    public function ajoutercategorie(){
        $this->load->view('ajoutercategorie');
    }

    public function categorie(){
        $all['categorie'] =  $this->fonction->selecting('categorie');
        $this->load->view('categorie', $all);
    }

    public function acceuil(){
        $all['objets'] = $this->fonction->selecting_view_specified('mesobjet', 'idutilisateur='.$_SESSION['utilisateur']['idutilisateur']);
        $this->load->view('acceuil', $all);
    }

    public function detailobjet(){
       
        
        $id = $this->input->get('idobjet');

        $sql = sprintf("idobjet=%s", $id);
        $objet= $this->fonction->selecting_specified("objet", $sql);

        $send['objet'] = $objet[0];
        $this->load->view('detailobjet', $send);
    }

    public function listeobjetautre(){
        $sql = sprintf("idutilisateur!=%s", $_SESSION['utilisateur']['idutilisateur']);
        $send['objets'] = $this->fonction->selecting_view_specified('mesobjet', $sql);
        $this->load->view('listeobjetautre', $send);
    }

    //OBJET
	public function traitementajoutobjet(){
		$this->load->helper("url");
       

        $nom = $this->input->post('nomobjet');
        $categorie = $this->input->post('idcategorie');
        $prix  = $this->input->post('prix');
        $description = $this->input->post('description');

        $all['categorie'] = $this->fonction->selecting('categorie');
        

        if($nom=="" || $categorie=="" || $prix=="" || $description==""){
        $all['objets'] = $this->fonction->selecting_view_specified('mesobjet', 'idutilisateur='.$_SESSION['utilisateur']['idutilisateur']);

            $all['error'] = "Les Champs ne doivent pas etre vide";
            $this->load->view('ajouterobjet', $all);
        }else{
            $values = sprintf("(default, '%s', '%s', %s, '%s')", $nom,  $description, $categorie, $prix);
            $this->fonction->inserting("objet", $values);
            $objet = $this->fonction->selecting('objet');
			$len = count($objet);

            $idutilisateur =  $_SESSION['utilisateur']['idutilisateur'];

            $values = sprintf("(default, %s, %s, default, 0)", $idutilisateur, $objet[$len-1]['idobjet']);
            $this->fonction->inserting("objetutilisateur", $values);

            $all['objets'] = $this->fonction->selecting_view_specified('mesobjet', 'idutilisateur='.$_SESSION['utilisateur']['idutilisateur']);

            $this->load->view('acceuil', $all);
        }
	}

	public function traitementupdateobjet(){
		$this->load->helper("url");
       

        $id = $this->input->post('idobjet');
        $nom = $this->input->post('nomobjet');
        $idcategorie = $this->input->post('idcategorie');
        $prix  = $this->input->post('prix');
        $description = $this->input->post('description');

        if($nom=="" || $idcategorie=="" || $prix=="" || $description==""){
            $a['error'] = "Les Champs ne doivent pas etre vide";
            $this->load->view('traitement/ajouterobjet');
        }else{
            $nouveau= sprintf("nom='%s', idcategorie='%s', prix=%s, description='%s')", $nom, $idcategorie, $prix, $description);
            $condition = sprintf("idobjet= %s", $id);
            $this->fonction->updating("objet", $nouveau, $condition);
            $this->load->view('acceuil');
        }
	}

    public function traitementdeleteobject(){
        $id = $this->input->get('idobjet');
        $sql = sprintf("idobjet1=%s || idobjet2=%s", $id, $id);
        $this->fonction->deleting('echange', $sql);

        $sql = sprintf("idobjet=%s", $id);
        $this->fonction->deleting("objet", $sql);

        $sql = sprintf("idobjet=%s", $id);
        $this->fonction->deleting('objet', $sql);

        $all['objets'] = $this->fonction->selecting_view_specified('mesobjet', 'idutilisateur='.$_SESSION['utilisateur']['idutilisateur']);
        $this->load->view('acceuil', $all);
    }

    //CATEGORIE
    public function traitementajoutcategorie(){
		$this->load->helper("url");
       

        $nomcategorie = $this->input->post('nomcategorie');

        if($nomcategorie == ""){
            $a['error'] = "Le Champ ne doit pas etre vide";
            $this->load->view('ajoutercategorie', $a);
        }else{
            $values = sprintf("(NULL, '%s')", $nomcategorie);
            $this->fonction->inserting("categorie", $values);

            $all['categorie'] =  $this->fonction->selecting('categorie');
            $this->load->view('categorie', $all);
        }
	}

    public function traitementupdatecategorie(){
		$this->load->helper("url");
       

        $idcategorie = $this->input->post('idcategorie');
        $nomcategorie = $this->input->post('nomcategorie');

        if($nomcategorie == ""){
            $a['error'] = "Le Champ ne doit pas etre vide";
            $this->load->view('traitement/ajoutercategorie');
        }else{
            $nouveau = sprintf("nomcategorie='%s'", $nomcategorie);
            $condition = sprintf("idcategorie=%s", $idcategorie);
            $this->fonction->updating("categorie", $nouveau, $condition);
            $this->load->view('categorie');
        }
	}

    public function traitementdeletecategorie(){
       

        $idcategorie = $this->input->get('idcategorie');
        $sql = sprintf("idcategorie=%s", $idcategorie);
        $this->fonction->deleting("categorie", $sql);
        
        $this->load->view('categorie');
    }

    //ECHANGE
    public function proposerechange($idobjet1, $idobjet2){
        $idtransaction = $this->fonction->getseq_transaction();
        $sql = sprintf("(default, %s, %s, %s, default, '0')", $idtransaction, $idobjet1, $idobjet2);
        $this->fonction->inserting("echange", $sql);
    }

    public function annulerechange($idtransaction){
        //Pour avoir idobjet1 et idobjet2  de l'echange
        $sql = sprintf("idtransaction=%s", $idtransaction);
        $select = $this->fonction->selecting_specified("echange", $sql);
        $echange = $select[0];

        $sql = sprintf("(default, %s, %s, %s, default, '1')", $idtransaction, $echange['idobjet1'], $echange['idobjet2']);
        $this->fonction->inserting("echange", $sql);
    }

    //Celui qui recoit une proposition qui valide
    public function validerechange($idtransaction){

    //Debut transaction
        $this->db->trans_start();

        //Insertion dans echange
        $sql = sprintf("idtransaction=%s", $idtransaction);
        $select = $this->fonction->selecting_specified("echange", $sql);
        $echange = $select[0];
                                                                            //son objet  a echanger avec //mon objet    
        $sql = sprintf("(default, %s, %s, %s, default, '2')", $idtransaction, $echange['idobjet1'], $echange['idobjet2']);
        $this->fonction->inserting("echange", $sql);

    //Echange possession avec objetutilisateur
        //Recherche des idProprio
        $idProprio2 = $this->fonction->proptietaireactuel($echange['idobjet2']);
        $idProprio1 = $this->fonction->proptietaireactuel($echange['idobjet1']);

        //Je ne possede plus l objet2
        $sql = sprintf("(default, %s, %s, default, 1)", $idProprio2, $echange['idobjet2']);
        $this->fonction->inserting("objetutilisateur", $sql);
        

        //Maintenant objet2 est a l autre
        $sql = sprintf("(default, %s, %s, default, 0)", $idProprio1, $echange['idobjet2']);
        $this->fonction->inserting("objetutilisateur", $sql);

////////////////////////////////////

        //Il ne possede plus objet1
        $sql = sprintf("(default, %s, %s, default, 1)", $idProprio1, $echange['idobjet1']);
        $this->fonction->inserting("objetutilisateur", $sql);
        

        //Maintenant objet1 est a moi
        $sql = sprintf("(default, %s, %s, default, 0)", $idProprio2, $echange['idobjet1']);
        $this->fonction->inserting("objetutilisateur", $sql);

        if($this->db->trans_complete() === false) 
            $this->db->trans_rollback();
        
        else 
            $this->db->trans_commit();

    }







    // public function traitementacceptationproposition(){
    //    

    //     $idechange = $this->input->get('idechange');

    //     $nouveau = "statut=1";
    //     $condition = sprintf("idechange=%s", $idechange);
    //     $this->fonction->updating("echange", $nouveau, $condition);

    //     $condition = sprintf('idechange=%s', $idechange);
    //     $echange = $this->fonction->selecting_specified("echange", $condition);

    //     $demandeur = $echange[0]['iddemandeur'];
    //     $objet1 = $echange[0]['idobjet1'];
    //     $demande = $echange[0]['iddemande'];
    //     $objet2 = $echange[0]['idobjet2'];
        
    //     $nouveau = sprintf("idutilisateur=%s", $demande);
    //     $condition = sprintf("idobjet=%s", $objet1);
    //     $this->fonction->updating("objetutilisateur", $nouveau, $condition);

    //     $nouveau = sprintf("idutilisateur=%s", $demandeur);
    //     $condition = sprintf("idobjet=%s", $objet2);
    //     $this->fonction->updating("objetutilisateur", $nouveau, $condition);
        
    //     $this->load->view('demandeproposition');
    // }

    // public function traitementrefusproposition(){
    //    

    //     $idechange = $this->input->get('idechange');

    //     $nouveau = "statut=-1";
    //     $condition = sprintf("idechange=%s", $idechange);
    //     $this->fonction->updating("echange", $nouveau, $condition);
        
    //     $this->load->view('demandeproposition');
    // }

    // public function traitementdeletemesproposition(){
    //    

    //     $idechange = $this->input->get('idechange');
    //     $sql = sprintf("idechange=%s", $idcategorie);
    //     $this->fonction->deleting("echange", $sql);

    //     $this->load->view("echange");
    // }

    


	

}
