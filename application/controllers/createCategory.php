<?php defined('BASEPATH') OR exit('No direct script access allowed');


class CreateCategory extends CI_Controller {

	function __construct(){
		parent::__construct();	 
		 if($this->session->userdata('LoginSession') == false){
			header('Location: '.'login'); 
			
          }
		}
		 
	public function index(){
		$data['js'] [0]= '<script src="public/js/createCategory.js"></script>';
		$data['js'] [1]= '<script src="public/templates/gentelella-master/vendors/sweetAlert/sweetalert.min.js"></script>  ';
		$data['js'] [2]= '<script src="public/js/lib.js"></script>';	
		$header['style'] [0]= '<link href= "public/templates/gentelella-master/vendors/sweetAlert/sweetalert.min.css" rel="stylesheet"> ';
		$header['title'] = 'Crear Categoria';

		$this->load->view('hero',$header);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('createCategory');    
		$this->load->view('footer',$data);	 
		 
	}
	 
    
	 
}
