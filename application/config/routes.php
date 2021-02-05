<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// GET
$route['default_controller'] = 'pages';
$route['home'] = 'pages';
$route['recyclebin'] = 'pages/recyclebin';
$route['login'] = 'pages/login';
$route['register'] = 'pages/register';
$route['404_override'] = 'pages/nopagefound';
$route['translate_uri_dashes'] = FALSE;

// POST
$route['signup'] = 'usuarios/signup';
$route['signin'] = 'usuarios/login';
$route['nuevanota'] = 'pages/nuevanota';
$route['actualizarnota'] = 'pages/actualizarNota';
