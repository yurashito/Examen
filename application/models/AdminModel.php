<?php
    if( !defined('BASEPATH') ) exit('No direct script access allowed') ;

    class AdminModel extends CI_Model
    {
        public function InsererAliment($Nom,$Poids,$Montant){
            try{
                if($Montant >= 100 && $Nom != null && $Poids != 0){
                    $sql = "Insert into Aliment(Nom, Poids, Montant) value(?,?,?)";
                    $this->db->query($sql,array($Nom,$Poids,$Montant));
                }else{
                    throw new Exception("Insertion qui ne suit pas les normes");
                }
            } catch (Exception $e) {
                show_error($e->getMessage());
            }
        }

        public function SelectAliment(){
            $sql = $this->db->query("SELECT * FROM Aliment");
            $tableau = $sql->result_array();
            return $tableau;
        }

        public function SupprimerAliment($IdAliment){
            $sql = "DELETE FROM Aliment WHERE Id=".$IdAliment;
            $this->db->query($sql);
        }

        public function SelectAlimentWhere($IdAliment){
            $sql = $this->db->query("SELECT * FROM Aliment where Id=".$IdAliment);
            $tableau = $sql->result_array();
            return $tableau;
        }

        public function Modifier($IdAliment,$Nom,$Poids,$Montant){
            $sql = "UPDATE Aliment SET Nom = ? , Poids = ? , Montant = ? where Id=".$IdAliment;
            $this->db->query($sql,array($Nom,$Poids,$Montant)); 
        }

// --------------------------------Sport
        public function SelectSport(){
            $sql = $this->db->query("SELECT * FROM Sport");
            $tableau = $sql->result_array();
            return $tableau;
        }

        public function InsererSport($Nom,$Poids,$Durre){
            $sql = "INSERT INTO Sport(Nom,Poids,Duree) value(?,?,?) ";
            $this->db->query($sql,array($Nom,$Poids,$Durre)); 
        }

        public function SupprimerSport($IdSport){
            $sql = "DELETE FROM Sport WHERE Id=".$IdSport;
            $this->db->query($sql);
        }

        public function SelectSportWhere($IdSport){
            $sql = $this->db->query("SELECT * FROM Sport where id=".$IdSport);
            $tableau = $sql->result_array();
            return $tableau;
        }

        public function ModifierSport($IdSport,$Nom,$Poids,$Durre){
            $sql = "UPDATE Sport SET Nom = ? , Poids = ? , Duree = ? where Id=".$IdSport;
            $this->db->query($sql,array($Nom,$Poids,$Durre)); 
        }

//------------------------------IMC
        public function SelectInfoUtilisateur($Id){
            $sql = $this->db->query("SELECT * FROM InfoUtilisateur where IdUtilisateur=".$Id." order by IdInfoUtilisateur desc limit 1");
            $tableau = $sql->result_array();
            return $tableau;
        }

        public function IMCUtilisateur($Id){
            $tab = $this->SelectInfoUtilisateur($Id);
            if($tab != null){
                $Poids = $tab[0]['Poids'];
                $Taille = $tab[0]['Taille']/100;
                $IMC = $Poids /($Taille*$Taille);
                $imcArrondi = round($IMC, 2);
                return $imcArrondi;
            }
            return -1;
        }

        public function IMCIdeal($Id){
            $Info = $this->SelectInfoUtilisateur($Id);
            $ImcAvant = $this->IMCUtilisateur($Id);
            $IMCMety = 19 *(($Info[0]['Taille']/100)*($Info[0]['Taille']/100));
            if($ImcAvant != -1){
                $ImAnazy = $ImcAvant * (($Info[0]['Taille']/100)*($Info[0]['Taille']/100));
                $ImcFarany = $IMCMety - $ImAnazy;
                return $ImcFarany;
            }
            return null;
        }

//--------------------------Tableau croisee
        public function TableauCroisee(){
            $sql = $this->db->query("    SELECT Objectif.NomObjectif,count(idClient) as NombreClient,
            DATE_FORMAT(DateInsertion, '%M') AS Mois 
            FROM ObjectifClient 
            join Objectif on 
            Objectif.IdObjectif = ObjectifClient.IdObjectif GROUP BY DATE_FORMAT(DateInsertion, '%M') ,
            Objectif.IdObjectif
            ORDER BY MONTH(DateInsertion) ");
            $tableau = $sql->result_array();
            return $tableau;
        }
        
    }
?>