<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nota extends CI_Model {

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

  public function insert($table, $data) {
    $this->db->insert($table, $data);
  }

  public function obtenerNotas() {
    $sql = "select n.id, n.titulo, n.descripcion, n.created, n.updated from Notas n, Usuarios u where n.estado = 1 and n.id_usuario = u.id and u.id = ".$this->session->userdata('id').";";
    return ($this->devuelveData($sql));
  }

  public function obtenerNotasEliminadas() {
    $sql = "select n.id, n.titulo, n.descripcion, n.created, n.updated from Notas n, Usuarios u where n.estado = 0 and n.id_usuario = u.id and u.id = ".$this->session->userdata('id').";";
    return ($this->devuelveData($sql));
  }

  public function borrarNota($id) {
    $sql = "update Notas set estado = 0 where id = ".$id;
    $query = $this->db->query($sql);
    return $query;
  }

  public function actualizarNota($data) {
    $sql = "update Notas set titulo = '".$data['titulo']."', descripcion = '".$data['descripcion']."' where id = ".$data['id']." and id_usuario = ".$this->session->userdata('id');
    $query = $this->db->query($sql);
    return $query;
  }

  public function borrarTodo() {
    $sql = "update Notas set estado = 0 where id_usuario = ".$this->session->userdata('id');
    $query = $this->db->query($sql);
    return $query;
  }

  public function restoreItem($id) {
    $sql = "update Notas set estado = 1 where id = ".$id;
    $query = $this->db->query($sql);
    return $query;
  }
  
  public function borrarItemDef($id) {
    $sql = "delete from Notas where estado = 0 and id = ".$id;
    $query = $this->db->query($sql);
    return $query;
  }

  public function restoreAll() {
    $sql = "update Notas set estado = 1 where id_usuario = ".$this->session->userdata('id');
    $query = $this->db->query($sql);
    return $query;
  }

  public function deleteAll() {
    $sql = "delete from Notas where estado = 0 and id_usuario = ".$this->session->userdata('id');
    $query = $this->db->query($sql);
    return $query;
  }
}