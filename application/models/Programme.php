<?php 
if(!defined('BASEPATH'))  exit('No direct script access allowed');
 class Programme  extends CI_Model{
        public function select(){
            $sql=" select IdProgramme from  Programme ";
            $sql=sprintf($sql, );
            $data = $this->db->query($sql)->row();
            return $data;
        }
        public function getDernierProgramme(){
            $sql=" select IdProgramme from  Programme  order by IdProgramme desc";
            $sql=sprintf($sql);
            $data = $this->db->query($sql)->row();
            return $data->IdProgramme;
        }

        public function selectProgrammeParObjectif($idObjectif){
            $sql=" select IdProgramme from  Programme  where IdObjectif= %s";
            $sql=sprintf($sql, $idObjectif);
            $data = $this->db->query($sql)->row();
            return $data;
        }

        public function insertionProgramme($nom , $idObjectif){
            $sql="insert into Programme values ( null,'%s' ,%s );";
            $sql=sprintf($sql , $nom , $idObjectif);
            $this->db->query($sql);
        }

        public function insertionAliment($idProgramme , $idAliment){
            $sql="insert into ProgrammeAlimentation values (%s ,%s );";
            $sql=sprintf($sql ,$idProgramme , $idAliment);
            $this->db->query($sql);
        }

        public function insertionSport($idProgramme , $idSport){
            $sql="insert into programmeSport values (%s ,%s );";
            $sql=sprintf($sql ,$idProgramme , $idSport);
            $this->db->query($sql);
        }

        public function selectProgrammeAlimentationParIdProgramme($idProgramme){
            $sql=" select * from  ProgrammeAlimentation join aliment on programmeAlimentation.IdAlimentation= aliment.Id  where idProgramme=".$idProgramme;
            $sql=sprintf($sql);
            $data = $this->db->query($sql)->result_array();
            $sommeMontant= 0;
            $resultat = array();
            $poids=0;
            $duree=0;
            for($i=0 ; $i<count($data) ; $i++){
                $sommeMontant=$sommeMontant+$data[$i]['Montant'];
                $poids=$poids+$data[$i]['Poids'];
                $duree=$duree+$data[$i]['duree'];
            };
            $resultat['Aliment']= $data;
            $resultat['Montant']=abs($sommeMontant/count($data));
            $resultat['Poids']= abs($poids/count($data));
            $resultat['Duree']= ceil($duree/count($data));
            $resultat['MontantTotal']=abs($sommeMontant);

            return $resultat;
        }
        public function selectProgrammeSportParIdProgramme($idProgramme){
            $sql=" select * from  ProgrammeSport join Sport on programmesport.IdSport= Sport.Id  where idProgramme=".$idProgramme;
            $sql=sprintf($sql);
            $data = $this->db->query($sql)->result_array();
            $resultat = array();
            echo count($data);
            $poids=0;
            $duree=0;

            for($i=0 ; $i<count($data) ; $i++){
                $poids=$poids+$data[$i]['Poids'];
                $duree=$duree+$data[$i]['NbrJours'];
            }
            echo count($data);
            $resultat['Sport']= $data;
            $resultat['Poids']= $poids/count($data);
            $resultat['Duree']= ceil($duree/count($data));
            return $resultat;
        }

        public function selectProgrammeGeneraleParIdProgramme($idProgramme){
            $resultat = array();
            $resultat['Aliment']= $this->selectProgrammeAlimentationParIdProgramme($idProgramme);
            $resultat['Sport']= $this->selectProgrammeSportParIdProgramme($idProgramme);
            return $resultat;
        }
        public function selectProgrammeAdequat(){
            
        }
        



        
}