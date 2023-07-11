html<?php 
if(!defined('BASEPATH'))  exit('No direct script access allowed');
 class Sport  extends CI_Model{
        public function select($id){
            if($id==2){
                $sql=" select * from Sport where Poids <0";
            }else if($id==1){
                $sql= " select * from Sport where Poids >=0";
            }
            $sql=sprintf($sql);
            $data = $this->db->query($sql)->result_array();
            return $data;
        }        
}