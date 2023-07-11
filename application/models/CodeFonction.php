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
                try {
                    if($Code->Identifiant == 0 ){
                        $sql = "UPDATE Code SET Identifiant = 10 where IdCode=".$Code->IdCode;
                        $sql1 = "Insert into CodeAttente(IdUtilisateur,IdCode)  value(?,?)";
                        $this->db->query($sql);
                        $this->db->query($sql1,array($IdClient,$Code->IdCode));
                    }else {
                        throw new Exception("Code non valide");
                    }
                } catch (Exception $e) {
                    show_error($e->getMessage());
                }
            }
        }

        function ConfirmationCode($IdClient,$ValeurCode){
            $Code = $this->SelectCodeWhere($ValeurCode);
            $Client = $this->SelectMoneyParUtilisateur($IdClient);
            $ArgentActuelle = $Client->ValeurMoney;
            if($Code!=null){
                if($Code->Identifiant == 10 ){
                    $sql1 = "UPDATE Code SET Identifiant = 20 where IdCode=".$Code->IdCode;
                    $Vola = $ArgentActuelle + $Code->MontantCode;
                    $sql = "UPDATE PorteMoney SET ValeurMoney = ? WHERE idUtilisateur = ?";
                    $sql2 = "DELETE from CodeAttente where IdUtilisateur = ? and IdCode = ? ";
                    $this->db->query($sql, array($Vola, $IdClient));
                    $this->db->query($sql1);
                    $this->db->query($sql2, array($IdClient, $Code->IdCode));
                }
            }
        }

        function SelectCodeEnAttenteValidation(){
            $sql = $this->db->query("select utilisateur.idUtilisateur,code.IdCode,utilisateur.nom,ValeurCode,MontantCode 
            from Utilisateur join codeAttente 
            on codeAttente.IdUtilisateur=utilisateur.idUtilisateur 
            join Code 
            on Code.IdCode = CodeAttente.IdCode");
            $tableau = $sql->result_array();
            return $tableau;
        }
    }
?>