<?php 
if(!defined('BASEPATH'))  exit('No direct script access allowed');
 class Utilisateur  extends CI_Model{
    public function insertionInfo($idUtilisateur , $poids , $taille , $adresse , $tel){
        $sql="insert into InfoUtilisateur values ( null, %s ,%s  , %s , '%s' , '%s' );";
        $sql=sprintf($sql,$idUtilisateur , $poids , $taille , $adresse , $tel);
        $this->db->query($sql);
    }

    public function insertionInscription($nom , $prenom , $genre ,$mail , $mdp){
        $sql="insert into utilisateur values ( null, '%s' ,'%s'  , %s , '%s' , '%s' );";
        $sql=sprintf($sql,$nom , $prenom , $genre ,$mail , $mdp);
        $this->db->query($sql);
    }
}