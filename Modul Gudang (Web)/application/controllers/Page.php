<?php

class Page extends CI_Controller {
    public function __Construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = "Home Page Of SIM RS";
        $data['description'] = "Lorem ipsum wjw ndamdnandu nmandkaj";
        $this->load->view('page/homepage', $data);
    }
}

?>