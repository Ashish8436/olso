<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '330405225340-hv62iqt3q70d6df3s3mu12lktqigr937.apps.googleusercontent.com';
$config['google']['client_secret']    = '98t-zCuaZ-buYtnHEniI290t';
$config['google']['redirect_uri']     = 'http://localhost/olso2/user_login/google_login/';
$config['google']['application_name'] = 'Login to CodexWorld.com';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();

?>