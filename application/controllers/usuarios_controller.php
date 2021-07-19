<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//extendemos CI_Controller
class Usuarios_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();         
        $this->load->helper(array("url"));          
        $this->load->model("usuarios_model");         
        $this->load->library("session");
    }
     
    public function index()
	{	
		if ($this->session->userdata('login')) {

                $us_pnombre         = $this->session->userdata('us_pnombre');
                $us_papellido       = $this->session->userdata('us_papellido');   
                $us_email           = $this->session->userdata('us_email');   
                $us_identificacion  = $this->session->userdata('us_identificacion'); 
                $us_tipo            = $this->session->userdata('us_tipo'); 
                
                $this->load->view('usuarios_view', array('nombre'           => $us_pnombre." ".$us_papellido,
                                                         'email'            => $us_email,
                                                         'identificacion'   => $us_identificacion,
                                                         'tipo'             => $us_tipo));
		}else{
			redirect(site_url(""));
		}
    }
    
    //controlador por defecto
    // public function index(){
         
    //     //array asociativo con la llamada al metodo del modelo
    //     $usuarios["ver"]=$this->usuarios_model->ver();
         
    //     //cargo la vista y le paso los datos
    //     $this->load->view("usuarios_view",$usuarios);
    // }
     
    //controlador para añadir
    public function add(){
         
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
        //llamo al metodo add
        $add=$this->usuarios_model->add(
                $this->input->post("identificacion"),
                $this->input->post("contrasena"),
                $this->input->post("pnombre"),
                $this->input->post("snombre"),
                $this->input->post("papellido"),
                $this->input->post("sapellido"),
                $this->input->post("email"),
                $this->input->post("celular"),
                $this->input->post("fecha_ingreso"),
                $this->input->post("tipo"),
                $this->input->post("estado"),
                $this->input->post("nombresede")
                );
        
            if($add==true){
                //Sesión de una sola ejecución
                $this->session->set_flashdata('correcto', 'Usuario añadido correctamente');
            }else{
                $this->session->set_flashdata('incorrecto', 'Usuario no se pudo añadir');
            } 
        }        
        //redirecciono la pagina a la url por defecto
        redirect(base_url("index.php/dashboard/usuarios"));
    }
     
    //controlador para modificar al que le paso por la url un parametro
    public function mod($identificacion){
        if(is_numeric($identificacion)){
          $datos["mod"]=$this->usuarios_model->mod($identificacion);
          $this->load->view("modificar_view",$datos);
          if($this->input->post("submit")){
                $mod=$this->usuarios_model->mod(
                        $identificacion,
                        $this->input->post("submit"),
                        $this->input->post("contrasena"),
                        $this->input->post("pnombre"),
                        $this->input->post("snombre"),
                        $this->input->post("papellido"),
                        $this->input->post("sapellido"),
                        $this->input->post("email"),
                        $this->input->post("celular"),
                        $this->input->post("fecha_ingreso"),
                        $this->input->post("tipo"),
                        $this->input->post("estado"),
                        $this->input->post("nombresede")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'No se pudo modificar el usuario');
                }
                redirect(base_url());
            }
        }else{
            redirect(base_url());
        }
    }
     
    //Controlador para eliminar
    public function eliminar($identificacion){
        if(is_numeric($identificacion)){
          $eliminar=$this->usuarios_model->eliminar($identificacion);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'No se pudo eliminar el usuario');
          }
          redirect(base_url());
        }else{
          redirect(base_url());
        }
    }
}
?>