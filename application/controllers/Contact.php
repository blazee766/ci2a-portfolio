<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function contact() {
        $this->load->view('contact'); 
    }
}