<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('dashboard_model');
    }

	public function index()
	{	
		if ($this->session->userdata('login')) {

            $us_pnombre         = $this->session->userdata('us_pnombre');
            $us_papellido       = $this->session->userdata('us_papellido');   
            $us_email           = $this->session->userdata('us_email');   
            $us_identificacion  = $this->session->userdata('us_identificacion');  
            
            $this->load->view('dashboard_view',  array('nombre' => $us_pnombre." ".$us_papellido,
                                                        'email' => $us_email,
                                                        'identificacion' => $us_identificacion));
		}else{
			redirect(site_url(""));
		}
	}	

    // public function documentos()
	// {	
    //     if ($this->session->userdata('login')) {

    //         $us_pnombre         = $this->session->userdata('us_pnombre');
    //         $us_papellido       = $this->session->userdata('us_papellido');   
    //         $us_email           = $this->session->userdata('us_email');   
    //         $us_identificacion  = $this->session->userdata('us_identificacion');  
          
    //         $this->load->view('Documentos_view',  array('nombre'         => $us_pnombre." ".$us_papellido,
    //                                                     'email'          => $us_email,
    //                                                     'identificacion' => $us_identificacion));
    //     }else{
    //         redirect(site_url(""));
    //     }
    // }
}
