<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

  private $db = null;

  function __construct() {
    parent::__construct();
    $this->db = $this->load->database('default', true);
  }

  public function devuelveData($sql) {
    $query = $this->db->query($sql);
    $rows = $query->result_array();
    $query->free_result();
    return ($rows);
  }

  public function compareEmail($data) {
    $sql = "select * from usuarios where correo='".$data['correo']."'";
    return ($this->devuelveData($sql));
  }

  public function insert($table, $data) {
    $this->db->insert($table, $data);
  }

  public function verificar($data) {
    //"select * from usuarios where correo = 'dante@gmail.com' and password = 'sdfsdfsdfsf'";
    $sql = "select * from usuarios where correo='".$data['correo']."' and password = '".$data['password']."'";
    return ($this->devuelveData($sql));
  }
}