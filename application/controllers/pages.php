<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index() {
    if(!$this->session->userdata('id')) {
      redirect(base_url().'login');
    }
    else {
      $this->load->view('home');
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
}