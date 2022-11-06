<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#LOGIN
$route['login'] = 'LoginController';
$route['registro'] = 'LoginController/registro';


#ADMIN
$route['admin'] = 'AdminController';

#NUEVO USUARIO
$route['nuevo'] = 'NuevoUsuarioController';
$route['datos_usuario'] = 'NuevoUsuarioController/add_usuario';

#USUARIO REGISTRADO
$route['usuario'] = 'UserController';



$route['default_controller'] = 'InicioController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
