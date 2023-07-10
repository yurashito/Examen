<?php 
if(!defined('BASEPATH'))  exit('No direct script access allowed');
 class TraitrementLogin extends CI_Model{
    public function authentificationUtilisateur($nom , $mdp){
        $sql="SELECT * FROM utilisateur where nom='".$nom."' and mdp='".$mdp."'";
        
        $query=$this->db->query($sql);
        $tableau=$query->row();
        if($tableau== null){
            return null;
        }
        return $tableau->idUtilisateur;
    }
}