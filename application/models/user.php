<?php defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Model  {
    
    function __construct(){
        parent::__construct();
    }
    public function validUser($user,$password){
        
        $result = $this->db->query("SELECT * FROM Login where usuario='$user' AND  contrasena= '$password' ");

        if($result->num_rows() != false){
            return  $result->row();
        }else{
            return $msg = "BD sin datos";            
        }
        
        
    }
}

