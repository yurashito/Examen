<?php
    if( !defined('BASEPATH') ) exit('No direct script access allowed') ;

    class CodeFonction extends CI_Model
    {
        function SelectCode(){
            $sql = $this->db->query("SELECT * FROM Code");
            $tableau = $sql->result_array();
            return $tableau;
        }

        function SelectCodeWhere($ValeurCode){
            $sql = "SELECT * FROM Code where ValeurCode=" . intval($ValeurCode);
            $query = $this->db->query($sql);
            $tableau = $query->row();
            return $tableau;
        }

        function SelectMoneyParUtilisateur($IdClient){
            $sql = "SELECT * FROM PorteMoney where idUtilisateur=" . intval($IdClient);
            $query = $this->db->query($sql);
            $tableau = $query->row();
            return $tableau;
        }

        function DemandeCode($IdClient,$ValeurCode){
            $Code = $this->SelectCodeWhere($ValeurCode);
            $Client = $this->SelectMoneyParUtilisateur($IdClient);
            $ArgentActuelle = $Client->ValeurMoney;
            if($Code!=null){
                if($Code->Identifiant < 10 ){
                    $sql = "UPDATE Code SET Identifiant = 10 where IdCode=".$Code->IdCode;
                    $sql1 = "Insert into CodeAttente(IdUtilisateur,IdCode)  value(?,?)";
                    $this->db->query($sql);
                    $this->db->query($sql1,array($IdClient,$Code->IdCode));
                }
            }
        }

        function ConfirmationCode($IdClient,$ValeurCode){
            $Code = $this->SelectCodeWhere($ValeurCode);
            $Client = $this->SelectMoneyParUtilisateur($IdClient);
            $ArgentActuelle = $Client->ValeurMoney;
            if($Code!=null){
                echo $Code->Identifiant;
                if($Code->Identifiant >=10 && $Code->Identifiant< 20 ){
                    $sql1 = "UPDATE Code SET Identifiant = 20 where IdCode=".$Code->IdCode;
                    $Vola = $ArgentActuelle + $Code->MontantCode;
                    $sql = "UPDATE PorteMoney SET ValeurMoney = ? WHERE idUtilisateur = ?";
                    $this->db->query($sql, array($Vola, $IdClient));
                    $this->db->query($sql1);
                }
            }
        }
    }
?>