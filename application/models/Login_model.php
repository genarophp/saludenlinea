<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function login($usuario,$contrasena){

      try{
            $sql = "SELECT 
                          usu_usuarios.identificacion,
                          usu_usuarios.pnombre,
                          usu_usuarios.snombre,
                          usu_usuarios.papellido,
                          usu_usuarios.sapellido,
                          usu_usuarios.email,
                          usu_usuarios.tipo,
                          usu_usuarios.nombresede
                      FROM
                          usu_usuarios
                      WHERE
                          (usu_usuarios.email = '$usuario' OR
                           usu_usuarios.identificacion = '$usuario') AND
                           usu_usuarios.contrasena = '$contrasena'";
            //echo $sql;
            $query = $this->db->conn_id->prepare($sql);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
          }catch(PDOException $e) {
                  echo  $e->getMessage(); 
          }
  }

  public function actualizarContrasena($identificacion,$contra_actual,$contra_nueva){
      
      try{
            $sql = "UPDATE 
                      public.usu_usuarios
                    SET
                      us_clave = '$contra_nueva'
                    WHERE
                      public.usu_usuarios.identificacion = $identificacion AND 
                      public.usu_usuarios.us_clave = '$contra_actual'";

            $query = $this->db->conn_id->prepare($sql);
            $query->execute();
            return $query->rowCount() ? true : false;
             
          }catch(PDOException $e) {
                  echo  $e->getMessage(); 
          }
  }

}

?>