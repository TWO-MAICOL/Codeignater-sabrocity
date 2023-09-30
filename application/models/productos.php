<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Productos extends CI_Model  {
    
    function __construct(){
        parent::__construct();
    }
    public function getCategory(){
        
        $result = $this->db->query("SELECT * FROM Categoria");
        if($result->num_rows() != false ){
            return  $result->result_array();
        }else{
            return $msg = "BD sin datos";            
        }
    
    }
    public function getIngredients(){
        $result = $this->db->query("SELECT * FROM ingredientes");
        // return $this->db->get("Menu")->result();
        if($result->num_rows() != false ){
            return  $result->result_array();
        }else{
            return $msg = "BD sin datos";            
        }   
    }
    public function insertMenu($array,$dataImg){        
        $rote = "public/imgProducts";
        
        $result =  $this->db->insert('menu',$array);
        if ($result) {
            move_uploaded_file($dataImg, $rote."/".$array['imagen']);
            return $msg = "Producto guardado";
        }else {
            return $msg = 'ERROR al guardar Producto';
            
        }           
        
    }
    public function insertCategory($category){
        
        
        
    }
    public function insertIngredient($array){

        for ($i=0; $i < count($array['car']); $i++) {          
			 
            // print_r( $array['cate'][$i]);
           $result =  $this->db->insert('ingredientes', array('ingredientes'=>$array['cate'][$i]['ingredientes']));
           if($result) { echo json_encode('Data insertated');};
       }
     
        
    }
}

