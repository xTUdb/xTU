<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->library(array('ion_auth'));

function is_logged_in() {
    if (!$this->ion_auth->logged_in()) {
        redirect('auth/login');
    }
}