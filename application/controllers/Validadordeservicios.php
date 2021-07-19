<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidadorDeServicios extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('validadorDeServicios_model');
    }

	public function index()
	{	
		if ($this->session->userdata('login')) {

                $us_pnombre = $this->session->userdata('us_pnombre');
                $us_papellido = $this->session->userdata('us_papellido');   
                $us_email = $this->session->userdata('us_email');   
                $us_identificacion = $this->session->userdata('us_identificacion'); 
                $us_tipo = $this->session->userdata('us_tipo'); 
                
                $this->load->view('validadorDeServicios_view', array('nombre' => $us_pnombre." ".$us_papellido,
                                                                     'email' => $us_email,
                                                                     'identificacion' => $us_identificacion,
                                                                     'tipo' => $us_tipo));
		}else{
			redirect(site_url(""));
		}
    }
    
    public function validarServicios(){
        /*
        $tipoDocumento = "CC";
        $numeroIdentificacion = "94490066";
        */
        $us_identificacion = $this->session->userdata('us_identificacion'); 
        $us_nombresede = $this->session->userdata('nombresede'); 
        $tipoDocumento = $this->input->post('tipoDeDocumento');
        $numeroIdentificacion = $this->input->post('numeroIdentificacion');
        if ($numeroIdentificacion == "" || $tipoDocumento == "") {
            echo json_encode('error');
        }else{
                $hoy = date("Y-m-d H:i:s"); 
            
                $host = "https://virtual.comfenalcovalle.com.co/esb/RESTJSONChannelAdapterV2";
                $username = "SUCURSALVIRTUALEPS";
                $password = "e95SucV7rtual";

                $headers = array(
                    'Content-type: charset=iso-8859-1; charset=utf-8',
                    'Authorization: Basic '. base64_encode("$username:$password") // place your auth details here
                );
                $payload = '{
                    "requestMessageOut": {
                    "header": {
                        "invokerDateTime": "'.$hoy.'",
                        "moduleId": "VALIDADORSERVICIOS",
                        "systemId": "SALUDENLINEA",
                        "messageId": "SALUDENLINEA|'.$numeroIdentificacion.'|'.$tipoDocumento.'",
                        "logginData": {
                        "sourceSystemId": "'.$us_identificacion.'",
                        "destinationSystemId": "'.$us_nombresede.'"
                        },
                        "destination": {
                        "namespace": "http://co/com/comfenalcovalle/esb/ws/ValidadorServiciosEps",
                        "name": "ValidadorServiciosEps",
                        "operation": "execute"
                        },
                        "securityCredential": {
                        "userName": "",
                        "userToken": ""
                        },
                        "classification": ""
                    },
                    "body": {
                        "request": {
                        "validadorRequest": {
                            "abreviatura":"'.$tipoDocumento.'",
                            "identificacion": "'.$numeroIdentificacion.'"
                        }
                        }
                    }
                    }
                }';
                header("Content-type: charset=iso-8859-1");
                $process = curl_init($host); //your API url
                curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($process, CURLOPT_HEADER, 0);
                curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
                curl_setopt($process, CURLOPT_TIMEOUT, 30);
                curl_setopt($process, CURLOPT_POST, 1);
                curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
                curl_setopt($process, CURLOPT_ENCODING, "UTF-8" );
                curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
                $return = curl_exec($process);
                curl_close($process);
            
                //finally print your API response
                //print_r($return);
                echo utf8_encode($return);
        }
       
    }
}
