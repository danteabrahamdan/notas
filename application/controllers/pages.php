<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function index() {
    $this->load->view('home');
  }

  public function login() {
    $this->load->view('login');
  }

  public function nopagefound() {
    $this->load->view('nopagefound');
  }

  public function register() {
    $this->load->view('register');
  }
  /*  */
  /* public function index($page="home") {
    $this->load->view($page);
  } */
  /*  */
}