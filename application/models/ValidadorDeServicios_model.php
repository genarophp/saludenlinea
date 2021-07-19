<?php

class ValidadorDeServicios_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE); 
    }

}

?>