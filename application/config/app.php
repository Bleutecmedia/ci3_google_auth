<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
// https://console.developers.google.com
$config['google']['client_id']        = '';
$config['google']['client_secret']    = '';
$config['google']['redirect_uri']     = 'http://ci3-google-auth.net/ci3_google_auth/login/ingreso';
$config['google']['application_name'] = '';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array('email','profile');
