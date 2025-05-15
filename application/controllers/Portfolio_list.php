<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_list extends CI_Controller {

    public function portfolio() {
        $this->load->view('portfolio_list'); 
    }
}