<?php 
if(!defined('BASEPATH'))  exit('No direct script access allowed');
 class SuggestionModel  extends CI_Model{
    
    public function getInfoUtilisateur($objectif){
        $sql="";
        if($objectif == 0){
            $sql=" select * from  regimePourAugmenter";
        }else{
            $sql = "select * from  regimePourDiminuer";
        }
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    // function grouperDonnees($donnees) {
    //     $groupes = array();
    //     $nombreDonnees = count($donnees);
    //     $nombreGroupes = $nombreDonnees / 3;
    
    //     for ($i = 0; $i < $nombreGroupes; $i++) {
    //         $groupe = array_slice($donnees, $i * 3, 3);
    //         $groupes[] = $groupe;
    //     }
    
    //     return $groupes;
    // }

    function grouperDonnees($donnees) {
        $resultat = array();
        $groupe = array();
        $compteur = 0;
        
        foreach ($donnees as $donnee) {
            $groupe[] = $donnee;
            $compteur++;
            
            if ($compteur == 3) {
                $resultat[] = $groupe;
                $groupe = array();
                $compteur = 0;
            }
        }
        
        if (!empty($groupe)) {
            $resultat[] = $groupe;
        }
        
        return $resultat;
    }
    
    

 }