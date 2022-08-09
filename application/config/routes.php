<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'C_Ticket/get_ticket';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE; 

$route['get_ticket']            = 'C_Ticket/get_ticket';
$route['list_ticket']           = 'C_Ticket/list_ticket';
$route['location']              = 'C_Ticket/location_booth';