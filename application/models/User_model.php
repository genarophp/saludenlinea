<?php
class User_model extends CI_Model { 
   
    public function __construct() {
      parent::__construct();
   }

    public function obtener_todos(){
        $this->db->select('id,
                           identificacion,
                           contrasena,
                           pnombre, 
                           snombre, 
                           papellido, 
                           sapellido, 
                           email, 
                           celular,
                           fecha_ingreso, 
                           tipo, 
                           estado,
                           nombresede'
                          );
        $this->db->from('usu_usuarios');
        $this->db->order_by('fecha_ingreso','desc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function guardar($id=null,
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
                            )
    {
        $data = array(
                        'identificacion'    => $identificacion,
                        'contrasena'        => $contrasena,
                        'pnombre'           => $pnombre, 
                        'snombre'           => $snombre, 
                        'papellido'         => $papellido, 
                        'sapellido'         => $sapellido, 
                        'email'             => $email, 
                        'celular'           => $celular,
                        'fecha_ingreso'     => $fecha_ingreso, 
                        'tipo'              => $tipo, 
                        'estado'            => $estado,
                        'nombresede'        => $nombresede
                    );
        if($id){
            $this->db->where('id', $id);
            $this->db->update('usu_usuarios', $data);
        }else{
            $this->db->insert('usu_usuarios', $data);
        } 
    }

    public function obtener_por_id($id){
        $this->db->select('id,
                           identificacion,
                           contrasena,
                           pnombre, 
                           snombre, 
                           papellido, 
                           sapellido, 
                           email, 
                           celular,
                           fecha_ingreso, 
                           tipo, 
                           estado,
                           nombresede');
        $this->db->from('usu_usuarios');
        $this->db->where('id', $id);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
        }

    public function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('usu_usuarios');
    }
}
?>