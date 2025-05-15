<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_c extends CI_Controller {

    public function index() {
        $this->load->view('portfolio'); 
    }

    public function about() {
        $this->load->view('about'); 
    }

    public function resume() {
        $this->load->view('resume'); 
    }

    public function portfolio() {
        $this->load->view('portfolio_list'); 
    }

    public function contact() {
        $this->load->view('contact'); 
    }

    public function detail($slug = NULL) {
        
        $data['slug'] = $slug;
        $this->load->view('portfolio_detail', $data);
    }
}
