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
            // $PoidsUser = $this->InfoUtilisateurFinal($IdClient)[0]['Poids'];

            // try{
            //     if($Poids > 0){
            //         if($IdObjectif == 2){
            //             if($Poids > $Poids+30){
            //                 $sql1 = "Insert into ObjectifClient(IdClient,IdObjectif,ObjectifPoids) value(?,?,?)";
            //                 $this->db->query($sql1,array($IdClient,$IdObjectif,$Poids));
            //             }else{
            //                 throw new Exception('Poids trop basse pour maigrir de telle kilo');
            //             }
            //         }else{
            //             $sql1 = "Insert into ObjectifClient(IdClient,IdObjectif,ObjectifPoids) value(?,?,?)";
            //             $this->db->query($sql1,array($IdClient,$IdObjectif,$Poids));
            //         }
            //     }
            // } catch (Exception $e) {
            //     show_error($e->getMessage());
            // }
        }
    }
?>