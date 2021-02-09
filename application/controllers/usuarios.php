<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Usuario', 'Usuario');
    $this->load->model('Nota', 'Nota');
    $this->load->helper('validation');
  }

  public function signup() {
    // 1ro Verificamos que no sean campos vacios
    if(!empty($_POST['correo']) || !empty($_POST['password']) || !empty($_POST['nombre'])) {
      $data['nombre'] = $_POST['nombre'];
      $data['correo'] = $_POST['correo'];

      // 2do Verificamos que el email no este duplicado
      $usuario = $this->Usuario->compareEmail($data);
      
      if(empty($usuario)) {
        $data['password'] = md5($_POST['password']);
        
        // 3ro Verificamos la contraseña tenga al menos minimo de longitud, minusculas, mayusculas, numeros y carateres especiales 
        if(check_complex($_POST['password'], 8, 5)) {
          $data['id_role'] = 2;
          // Guardamos los datos en la BBDD
          $this->Usuario->insert('usuarios', $data);
          header('Location:'.base_url().'login');
        }
        else {
          //echo "La contraseña debe incluir al menos un número, una mayuscula y un caracter especial y tener un mínimo de 8";
          $params['msg'] = 'La contraseña debe incluir números, mayusculas, caracteres especiales y tener un mínimo de 8';
          $params['showMsg'] = true;
          //header('Location:'.base_url().'register');
          $this->load->view('register', $params);
        }
      }
      else {
        $params['msg'] = 'email duplicado, prueba con otro';
        $params['showMsg'] = true;
        //header('Location:'.base_url().'register');
        $this->load->view('register', $params);
      }
    }
    else {
      $params['msg'] = 'Completa todos los campos';
      $params['showMsg'] = true;
      //header('Location:'.base_url().'register');
      $this->load->view('register', $params);
    }
  }

  public function login() {
    /* validacion de formulario en vervose POST no vacio */
    if(!empty($_POST['correo']) || !empty($_POST['password'])) {
      $data['correo'] = $_POST['correo'];
      $data['password'] = md5($_POST['password']);

      $usuario = $this->Usuario->verificar($data);
      // erificar que el usuario exista y la contraseña sea la correcta
      if(empty($usuario)) {
        $params['msg'] = 'Usuario no registrado o contraseña incorrecta';
        $params['showMsg'] = true;
        $this->load->view('login', $params);
      }
      else {
        /* $sessionUser = array('id' => $usuario[0]['id'], 'correo' => $data['correo'], 'nombre' => $usuario[0]['nombre']); */
        $sessionUser = array('id' => $usuario[0]['id'], 'correo' => $usuario[0]['correo'], 'nombre' => $usuario[0]['nombre'], 'id_role' => $usuario[0]['id_role']);
        $this->session->set_userdata($sessionUser);
        $notas = $this->Nota->obtenerNotas();
        $params['notas'] = $notas;
        header('Location:'.base_url().'home');
        $this->load->view('home', $params);
      }
    }
    else {
      $params['msg'] = 'Completa todos los campos';
      $params['showMsg'] = true;
      $this->load->view('login', $params);
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect(base_url().'login');
  }

  public function cambiarPwd() {
    // 1ra validacion
    if(!empty($_POST['password']) || !empty($_POST['passwordnew']) || !empty($_POST['passwordrenew'])) {
      $data['password'] = md5($_POST['password']);
      $data['correo'] = $this->session->userdata('correo');
      $usuario = $this->Usuario->verificar($data);
      // 2da validacion
      if(empty($usuario)) {
        $this->info('contraseña actual incorrecta', 'danger');  
      }
      else {
        // 3ra validación
        if(md5($_POST['passwordnew']) != $data['password']) {
          // 4ta validación
          if($_POST['passwordrenew'] == $_POST['passwordnew']) {
            // 5ta validación
            if(check_complex($_POST['passwordnew'], 8, 5)) {
              $data['passwordnew'] = md5($_POST['passwordnew']);
              $this->Usuario->updateUser($data);
              $this->info('Contraseña cambiada correctamente', 'success');
            }
            else {
              $this->info('La contraseña debe incluir números, mayusculas, caracteres especiales y tener un mínimo de 8', 'danger');
            }
          }
          else {
            $this->info('La verificación de la nueva contraseña debe coincidir', 'danger');    
          }
        }
        else {
          $this->info('La nueva contraseña no debe ser igual a la anterior', 'danger');    
        }
      }
    }
    else {
      $this->info('Completa todos los campos', 'danger');
    }
  }

  public function info($msg, $tipo) {
    $params['msg'] = $msg;
    $params['showMsg'] = true;
    $params['tipo'] = $tipo;
    $data['correo'] = $this->session->userdata('correo');
    $usuario = $this->Usuario->compareEmail($data);
    $params['nombre'] = $usuario[0]['nombre'];
    $params['correo'] = $usuario[0]['correo'];
    $params['created'] = $usuario[0]['created'];
    $params['updated'] = $usuario[0]['updated'];
    $this->load->view('account', $params);
  }
}