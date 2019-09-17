<?php
class Notfound extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        // echo "<h1>404 Error Not Found</h1>";
        $this->load->view('view_notfound');
    }

}
?>