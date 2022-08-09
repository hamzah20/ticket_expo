<?php
defined('BASEPATH') or exit('No direct script access allowed');

// User
$route['default_controller']    = 'C_Ticket/getTicket';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE; 

$route['get_ticket']            = 'C_Ticket/getTicket';
$route['list_ticket']           = 'C_Ticket/listTicket';
$route['location_booth']        = 'C_Ticket/locationBooth';

$route['confirmationTicket']    = 'C_Ticket/confirmationTicket';

// Admin
$route['admin']                 = 'C_Admin/loginAdmin';

// Print
$route['print']                 = 'C_Print/printTicket';