<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Products extends CI_Controller {

	function __construct(){
		parent::__construct();	 
		 if($this->session->userdata('LoginSession') == false){
			header('Location: '.'login'); 
			
          }
		}
		 
	public function index(){
		$data['js'] [0]= '<script src="public/js/home.js"></script>';
		$data['js'] [1]= '<script src="public/templates/gentelella-master/vendors/sweetAlert/sweetalert.min.js"></script>  ';
		$data['js'] [2]= '<script src="public/js/lib.js"></script>';	
		$header['style'] [0]= '<link href= "public/templates/gentelella-master/vendors/sweetAlert/sweetalert.min.css" rel="stylesheet"> ';
		$header['title'] = 'Mis Productos';

		$this->load->view('hero',$header);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('products');
		$this->load->view('footer',$data);	 
		 
	}
	public function getCategory(){

		 $this->load->model('products');		
		 echo json_encode($this->products->getCategory());
	
	}
	public function getIngredients(){

		$this->load->model('products');		
	    echo json_encode($this->products->getIngredients());
   }
   public function insertProducts(){
		$data = array(
			'nombre'            => $_POST['name'],
			'imagen'            => $_FILES['file']['name'],
			'Ingrediente_id'    => $_POST['ingredients'],
			'Caregoria_id'      => $_POST['category'],
			'precio '           => $_POST['price'],
		);	
		$dataImg = $_FILES['file']['tmp_name'];

		$this->load->model('products');		
		echo ($this->products->insertMenu($data,$dataImg));
  
   }
   public function insertIngredient(){ 

		$this->load->model('productos');
		$this->productos->insertIngredient($_POST);
	    
	

   }
	 
}
