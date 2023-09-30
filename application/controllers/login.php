<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	   
	}
	public function index(){ 
		$this->load->view('login');
		  
	}
	public function startSesion(){
		$user = $_POST['user'];
		$password = $_POST['password'];

		$this->load->model('user');		
		$status = $this->user->validUser($user,$password);
		 
		if($status != false) {
			$data = array(
				'name' => $status->nombre,
				'userName'=> $status->usuario,
				'password'=> $status->contrasena,
				'login' => true,
			); 
		    $this->session->set_userdata('LoginSession',$data);
			echo ("1");
		}  	
		 
	}
	public function closeSesion(){
		$this->session->sess_destroy();
		echo "Sesion cerrada con exito"; 
	}
	public function dataUser(){
		echo json_encode($data = $_SESSION['LoginSession']);			
	}
}

     