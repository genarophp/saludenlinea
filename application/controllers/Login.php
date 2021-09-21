<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Login_model'); 
    }

	public function index()
	{	
		if ($this->session->userdata('login')) {
			   redirect(site_url("validadordeservicios"));
		}else{
			   $this->load->helper('url');
			   $this->load->view('login', array('error' => ' ' ));
		}
	}

	public function ingresar()
	{	
		//$usuario = 1144151765;
		//$contrasena = md5('0sp3d4l3'); 
		//sha1
		$usuario = $this->input->post('email');
		$contrasena = md5($this->input->post('contrasena'));

		$response = $this->Login_model->login($usuario,$contrasena);

		if ($response) {
			$userdata = [	"us_identificacion" => $response->identificacion,
							"nombresede" 		=> $response->nombresede,
							"us_email" 			=> $response->email,
							"us_pnombre" 		=> $response->pnombre,
							"us_snombre" 		=> $response->snombre,
							"us_papellido"		=> $response->papellido,
							"us_sapellido" 		=> $response->sapellido,
							"us_tipo" 			=> $response->tipo,
							"login" 			=> TRUE,
						];
			$this->session->set_userdata($userdata);
			echo json_encode($this->session->userdata('login'));
		}else{
			echo json_encode('error');
		}
	}

	public function actualizarContrasena()
	{
		$contra_actual = md5($this->input->post('contra_actual'));
		$contra_nueva = md5($this->input->post('contra_nueva'));
		$usid = $this->session->userdata('id');

		$response = $this->Login_model->actualizarContrasena($usid,$contra_actual,$contra_nueva);
		echo json_encode($response);
	}

	public function cerrar()
	{
		$this->session->sess_destroy();
		echo json_encode($this->session->userdata('login'));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url("/"));
	}
}