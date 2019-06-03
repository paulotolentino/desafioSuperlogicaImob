<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login
$route['logout'] = 'home/logout';
$route['cadastro'] = 'home/cadastro';

// consultar
$route['consultar/proprietarios/(:num)'] = 'consultas/proprietarios/$1';
$route['consultar/locatarios/(:num)'] = 'consultas/locatarios/$1';
$route['consultar/fiadores/(:num)'] = 'consultas/fiadores/$1';
$route['consultar/corretores/(:num)'] = 'consultas/corretores/$1';
$route['consultar/imoveis/(:num)'] = 'consultas/imoveis/$1';
$route['detalhes/proprietario/(:num)'] = 'consultas/detalhesProprietario/$1';
$route['detalhes/locatario/(:num)'] = 'consultas/detalhesLocatario/$1';
$route['detalhes/fiador/(:num)'] = 'consultas/detalhesFiador/$1';
$route['detalhes/corretor/(:num)'] = 'consultas/detalhesCorretor/$1';
$route['detalhes/imovel/(:num)'] = 'consultas/detalhesImovel/$1';

// cadastrar
$route['cadastrar/proprietario'] = 'cadastros/proprietario';
$route['cadastrar/locatario'] = 'cadastros/locatario';
$route['cadastrar/fiador'] = 'cadastros/fiador';
$route['cadastrar/corretor'] = 'cadastros/corretor';
$route['cadastrar/imovel'] = 'cadastros/imovel';