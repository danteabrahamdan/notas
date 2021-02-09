<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Nota', 'Nota');
    $this->load->model('Usuario', 'Usuario');
  }

  public function index() {
    if(!$this->session->userdata('id')) {
      redirect(base_url().'login');
    }
    else {
      $notas = $this->Nota->obtenerNotas();
      $params['notas'] = $notas;
      $this->load->view('home', $params);
    }
  }

  public function recyclebin() {
    if(!$this->session->userdata('id')) {
      redirect(base_url().'login');
    }
    else {
      $notas = $this->Nota->obtenerNotasEliminadas();
      $params['notas'] = $notas;
      $this->load->view('recyclebin', $params);
    }
  }

  public function login() {
    if($this->session->userdata('id')) {
      redirect(base_url());
    }
    else {
      $params['showMsg'] = false;
      $this->load->view('login', $params);
    }
  }

  public function nopagefound() {
    $this->load->view('nopagefound');
  }

  public function register() {
    if($this->session->userdata('id')) {
      redirect(base_url());
    }
    else {
      $params['showMsg'] = false;
      $this->load->view('register', $params);
    }
  }

  public function nuevanota() {
    if(!empty($_POST['titulo']) || !empty($_POST['descripcion'])) {
      $data['titulo'] = $_POST['titulo'];
      $data['descripcion'] = $_POST['descripcion'];
      $data['estado'] = 1;
      $data['id_usuario'] = $this->session->userdata('id');
      $this->Nota->insert('notas', $data);
      header('Location:'.base_url().'home');
    }
  }

  public function borrarnota($idNota = 0) {
    $this->Nota->borrarNota($idNota);
    header('Location:'.base_url().'home');
  }

  public function actualizarNota() {
    if(!empty($_POST['titulo']) || !empty($_POST['descripcion'])) {
      $data['id'] = $_POST['id'];
      $data['titulo'] = $_POST['titulo'];
      $data['descripcion'] = $_POST['descripcion'];
      $this->Nota->actualizarNota($data);
      header('Location:'.base_url().'home');
    }
  }

  public function borrar() {
    $this->Nota->borrarTodo();
    header('Location:'.base_url().'home');
  }

  public function restore($id) {
    $this->Nota->restoreItem($id);
    header('Location:'.base_url().'recyclebin');
  }

  public function borrarItemDef($id) {
    $this->Nota->borrarItemDef($id);
    header('Location:'.base_url().'recyclebin');
  }

  public function restoreall() {
    $this->Nota->restoreAll();
    header('Location:'.base_url().'recyclebin');
  }

  public function deleteall() {
    $this->Nota->deleteAll();
    header('Location:'.base_url().'recyclebin');
  }

  public function account() {
    if(!$this->session->userdata('id')) {
      redirect(base_url().'login');
    }
    else {
      $data['correo'] = $this->session->userdata('correo');
      $usuario = $this->Usuario->compareEmail($data);
      $params['showMsg'] = false;
      $params['nombre'] = $usuario[0]['nombre'];
      $params['correo'] = $usuario[0]['correo'];
      $params['created'] = $usuario[0]['created'];
      $params['updated'] = $usuario[0]['updated'];
      $this->load->view('account', $params);
    }
  }
}