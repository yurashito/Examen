<?php
    if( !defined('BASEPATH') ) exit('No direct script access allowed') ;

    class StatFonction extends CI_Model
    {
        public function getChartData()
        {
            // Récupération des données de la base de données
            $query = $this->db->get('StatClient');
    
            // Tableaux pour stocker les valeurs des axes x et y
            $xValues = array();
            $yValues = array();
    
            // Parcourir les résultats de la requête
            foreach ($query->result() as $row)
            {
                $xValues[] = $row->Mois;
                $yValues[] = $row->NombreClient;
            }
    
            // Retourner les données du graphique
            return array(
                'xValues' => $xValues,
                'yValues' => $yValues
            );
        }
    }
?>