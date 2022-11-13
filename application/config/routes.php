<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#LOGIN
$route['login'] = 'LoginController';
$route['registro'] = 'LoginController/registro';


#ADMIN
$route['admin'] = 'AdminController';
$route['admin/nueva'] = 'AdminController/add_peli';

#NUEVO USUARIO
$route['nuevo'] = 'NuevoUsuarioController';
$route['datos_usuario'] = 'NuevoUsuarioController/add_usuario';

#USUARIO YA REGISTRADO
$route['usuario'] = 'UserController';
$route['inicio_usuario'] = 'UserController/inicio_usuario';
$route['logout'] = 'LoginController/deslogar';


$route['default_controller'] = 'InicioController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
