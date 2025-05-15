<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

    public function resume() {
        $this->load->view('resume'); 
    }
}