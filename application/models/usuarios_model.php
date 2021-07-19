<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {

	function __construct(){
		parent::__construct();
        //$this->db = $this->load->database('default', TRUE);
		$this->load->database();
	}

	public function ver()
	{
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM usu_usuarios;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }

	public function add($identificacion,
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
						)
	{
        $consulta=$this->db->query("SELECT identificacion FROM usu_usuarios WHERE identificacion = $identificacion");
		if($consulta->num_rows()==0){
            $consulta=$this->db->query(
				"INSERT INTO 
					usu_usuarios 
				VALUES(
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
						$estado
						$nombresede,
					   );
				");
            if($consulta==true){
              console.log('guardó');
			  return true;
            }else{
				console.log('no guardó');
                return false;
            }
        }else{
            return false;
        }
    }

	public function mod($identificacion, 
						$modificar		= "NULL",
						$contrasena		= "NULL",
						$pnombre		= "NULL",
						$snombre		= "NULL",
						$papellido		= "NULL",
						$sapellido		= "NULL",
						$email			= "NULL",
						$celular		= "NULL",						
						$fecha_ingreso	= "NULL",
						$tipo			= "NULL",
						$estado			= "NULL",
						$nombresede		= "NULL"
						)
	{
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM usu_suarios WHERE identificacion=$identificacion");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
										UPDATE 
											usu_usuarios 
										SET
											contrasena		= '$contrasena',
											pnombre			= '$pnombre',
											snombre			= '$snombre',
											papellido		= '$papellido',
											sapellido		= '$sapellido',
											email			= '$email',
											celular			= '$celular',
											fecha_ingreso	= '$fecha_ingreso',
											tipo			= '$tipo',
											estado			= '$estado',
											nombresede		= '$nombresede'
										WHERE 
											identificacion	=	$identificacion;
									");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }

	public function eliminar($identificacion){
		$consulta=$this->db->query("DELETE FROM usu_usuarios WHERE identificacion=$identificacion");
		if($consulta==true){
			return true;
		}else{
			return false;
		}
	 }
}
?>