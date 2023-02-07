<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonction extends CI_Model {

    function selecting($table_name){
        $sql = sprintf('select * from %s order by id%s', $table_name, $table_name);
        $resultat = $this->db->query($sql);
        $answer = array();
        $index = 0;
        foreach ($resultat -> result_array() as $data){
            $answer[$index] = $data;
            $index++;
        }
        return $answer;
    }
    
    function selecting_specified($table_name, $condition){
        $sql = sprintf('select * from %s where %s', $table_name, $condition);
        $resultat = $this->db->query($sql);
        $answer = array();
        $index = 0;
        while( $data = $resultat ->result_array()){
            $answer[$index] = $data;
            $index++;
        }
        return $answer;
    }

    function updating($table_name, $nouveau, $condition){
        $sql = sprintf('update %s set  from %s where %s', $nouveau, $table_name, $condition);
        $resultat = $this->db->query($sql);
        return $answer;
    }
    
    function inserting($table, $values){
       $sql = sprintf( 'insert into %s values%s',$table, $values);
      $this->db->query($sql);
    }

    function deleting($table, $condition){
        $sql = sprintf('delete from %s where %s', $table, $condition);
       $this->db->query($sql);
    }

    function login($mail, $mdp){
		$utilisateur = $this->fonction->selecting('utilisateur');
		for($i=0; $i<count($utilisateur); $i++){
			if($utilisateur[$i]['mail'] == $mail && $utilisateur[$i]['mdp']==$mdp){
				return true;
			}
		}
        return false;
    }

    function inscription($nom, $mail, $mdp){
        $values = sprintf("(NULL,'%s', '%s', '%s', 0)", $nom, $mail, $mdp);
        $this->fonction->inserting("utilisateur", $values);
    }  
}
