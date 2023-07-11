<?php
    if( !defined('BASEPATH') ) exit('No direct script access allowed') ;

    class ObjectifClientModel extends CI_Model
    {

        function SelectObjectif(){
            $sql = $this->db->query("SELECT * FROM Objectif");
            $tableau = $sql->result_array();
            return $tableau;
        }

        function InfoUtilisateurFinal($IdUtilisateur){
            $sql = $this->db->query("SELECT * FROM infoUtilisateur where IdUtilisateur =".$IdUtilisateur." order by IdInfoUtilisateur desc limit 1");
            $tableau = $sql->result_array();
            return $tableau;
        }

        function InsererObjectif($IdClient,$IdObjectif,$Poids){
            echo $this->InfoUtilisateurFinal($IdClient);
            
        }
    }
?>