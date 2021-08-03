<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->form_validation->set_message('required', '%s es obligatorio.');
        $this->form_validation->set_message('numeric', '%s debe ser numérico.');
    }

    public function index($flag = 0) {

        if ($this->session->userdata('login')) {

            $data = array();
            $this->load->model('user_model');
            $data['usuarios'] = $this->user_model->obtener_todos();
            
            $us_pnombre         = $this->session->userdata('us_pnombre');
            $us_papellido       = $this->session->userdata('us_papellido');   
            $us_email           = $this->session->userdata('us_email');   
            $us_identificacion  = $this->session->userdata('us_identificacion');
            
            

            $this->load->view('usuarios/header', array( 'nombre'         => $us_pnombre." ".$us_papellido,
                                                        'email'          => $us_email,
                                                        'identificacion' => $us_identificacion,
                                                        'flag'           => $flag,
                                                    ));
            $this->load->view('usuarios/index', $data);
            $this->load->view('usuarios/footer');            
		}else{
			redirect(site_url(""));
		}
    }

    public function ver($id){

        if ($this->session->userdata('login')) {

            $data = array();
            $this->load->model('user_model');
            $usuario = $this->user_model->obtener_por_id($id);
            $data['usuario'] = $usuario;
            
            $us_pnombre         = $this->session->userdata('us_pnombre');
            $us_papellido       = $this->session->userdata('us_papellido');   
            $us_email           = $this->session->userdata('us_email');   
            $us_identificacion  = $this->session->userdata('us_identificacion');
            
            $this->load->view('usuarios/header', array( 'nombre'         => $us_pnombre." ".$us_papellido,
                                                        'email'          => $us_email,
                                                        'identificacion' => $us_identificacion));
            $this->load->view('usuarios/ver', $data);
            $this->load->view('usuarios/footer');            
		}else{
			redirect(site_url(""));
		}
    }

    public function guardar($id=null){

        if ($this->session->userdata('login')) {
            $us_pnombre         = $this->session->userdata('us_pnombre');
            $us_papellido       = $this->session->userdata('us_papellido');   
            $us_email           = $this->session->userdata('us_email');   
            $us_identificacion  = $this->session->userdata('us_identificacion');

            $data = array(); 
            $this->load->model('user_model');
            if($id){
                $usuario = $this->user_model->obtener_por_id($id); 
                $data['id']             = $usuario->id;
                $data['identificacion'] = $usuario->identificacion;
                $data['contrasena']     = $usuario->contrasena;
                $data['pnombre']        = $usuario->pnombre;
                $data['snombre']        = $usuario->snombre;
                $data['papellido']      = $usuario->papellido;
                $data['sapellido']      = $usuario->sapellido;
                $data['email']          = $usuario->email;
                $data['celular']        = $usuario->celular;
                $data['fecha_ingreso']  = $usuario->fecha_ingreso;
                $data['tipo']           = $usuario->tipo;
                $data['estado']         = $usuario->estado;
                $data['nombresede']     = $usuario->nombresede;
            }else{
                $data['id']             = null;
                $data['identificacion'] = null;
                $data['contrasena']     = null;
                $data['pnombre']        = null;
                $data['snombre']        = null;
                $data['papellido']      = null;
                $data['sapellido']      = null;
                $data['email']          = null;
                $data['celular']        = null;
                $data['fecha_ingreso']  = null;
                $data['tipo']           = null;
                $data['estado']         = null;
                $data['nombresede']     = null;
            }

            
            $this->load->view('usuarios/header', array( 'nombre'         => $us_pnombre." ".$us_papellido,
                                                        'email'          => $us_email,
                                                        'identificacion' => $us_identificacion,
                                                        ));
            $this->load->view('usuarios/guardar', $data);
            $this->load->view('usuarios/footer');

        }else{
			redirect(site_url(""));
        }
    }

    public function guardar_post($id=null){
        if($this->input->post()){
            
            $identificacion     = $this->input->post('identificacion');
            $contrasena         = $this->input->post('contrasena');
            $pnombre            = $this->input->post('pnombre');
            $snombre            = $this->input->post('snombre');
            $papellido          = $this->input->post('papellido');
            $sapellido          = $this->input->post('sapellido');
            $email              = $this->input->post('email');
            $celular            = $this->input->post('celular');
            $fecha_ingreso      = $this->input->post('fecha_ingreso');
            $tipo               = $this->input->post('tipo');
            $estado             = $this->input->post('estado');
            $nombresede         = $this->input->post('nombresede');

            $this->form_validation->set_rules('identificacion', 'Identificación', 'required|numeric');
            $this->form_validation->set_rules('contrasena', 'Contraseña', 'required');
            $this->form_validation->set_rules('pnombre', 'Primer Nombre', 'required');
            $this->form_validation->set_rules('papellido', 'Primer Apellido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            //Verifica que el formulario esté validado.
            if ($this->form_validation->run() == TRUE){
                $this->load->model('user_model');
                $this->user_model->guardar(
                                        $id,
                                        $identificacion,
                                        $contrasena,
                                        $pnombre, 
                                        $snombre, 
                                        $papellido, 
                                        $sapellido, 
                                        $email, 
                                        $celular,
                                        $fecha_ingreso, 
                                        $tipo, 
                                        $estado,
                                        $nombresede
                                        );
            $flag = 1; 
            redirect('usuarios/index/'.$flag);

            }else{
                $data = array();
                $data['id']             = $id;
                $data['identificacion'] = $identificacion;
                $data['contrasena']     = $contrasena;
                $data['pnombre']        = $pnombre;
                $data['snombre']        = $snombre;
                $data['papellido']      = $papellido;
                $data['sapellido']      = $sapellido;
                $data['email']          = $email;
                $data['celular']        = $celular;
                $data['fecha_ingreso']  = $fecha_ingreso;
                $data['tipo']           = $tipo;
                $data['estado']         = $estado;
                $data['nombresede']     = $nombresede;

                $this->load->view('usuarios/header');
                $this->load->view('usuarios/guardar', $data);
                $this->load->view('usuarios/footer');
            }
        }else{
            $this->guardar();
        } 
    }

    public function eliminar($id){
        $this->load->model('user_model');
        $this->user_model->eliminar($id);
         $flag = 2; 
            
        redirect('usuarios/index/'.$flag);
        
    }
}