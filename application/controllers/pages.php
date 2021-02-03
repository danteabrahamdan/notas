<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index() {
    $this->load->view('home');
  }

  public function login() {
    $params['showMsg'] = false;
    $this->load->view('login', $params);
  }

  public function nopagefound() {
    $this->load->view('nopagefound');
  }

  public function register() {
    $params['showMsg'] = false;
    $this->load->view('register', $params);
  }
}