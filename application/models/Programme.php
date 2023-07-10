<?php 
if(!defined('BASEPATH'))  exit('No direct script access allowed');
 class Programme  extends CI_Model{
    public function selectRegimeAdequat($poids){
        if($poids < 0){
            $sql=" select * from  regimePourAugmenter  where PoidsTotal>=%s   group by nomAliement";
        }else{
            $sql=" select * from  regimePourAugmenter  where PoidsTotal<=%s  group by nomAliement";
        }
        $sql=sprintf($sql,$poids);
        $data = $this->db->query($sql)->result_array();
        $resultat =array();
        for($i=0 ; $i< count($data) ; $i++){
            $somme =$data[$i]['PoidsTotal'] ; 
            $tableauRegimeD= array();
            for($j=$i ; $j<count($data) ; $j++){
                $somme= $somme+$data[$i]['PoidsTotal'];
                $tableauRegime = array();
                $moyenne = ($data[$i]['NbrJours']+ $data[$i]['dureeAliment'])/2;
                $data[$i]['jour'] = (int)(($moyenne*$poids )/$data[$i]['PoidsTotal']);

                // $resultat[]= $data[$i];
                // echo  "Sport :".$data[$i]['NomSport']."  -------------  Aliment : ".$data[$i]['nomAliement']."".$data[$i]['PoidsTotal']." ----- ".$data[$i]['jour']."<br>";
            }
        }
        return $resultat;
    }
}