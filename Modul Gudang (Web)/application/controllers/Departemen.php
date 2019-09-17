<?php 

class Departemen extends CI_Controller {
    public function __construct() {
        parent::__construct();
       
        $this->load->database();    
        $this->load->model('Departemen_model');
    }
    public function index(){
        $data['departemen'] = $this->Departemen_model->bacaAll();
      
        $this->load->view('departemen/view',$data);
        }
        
    public function form_tambah(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('departemen_id', 'ID Departemen', 'required');
        $this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('departemen/input');
        }else{
            $id  = $this->input->post('departemen_id');
            $nama= $this->input->post('nama_departemen');
            $this->load->view('departemen/suksesDepartemen');
            $this->simpan_baru($id,$nama);
        }
        
    }
    public function simpan_baru($id, $nama){
        
        $save = array('dep_id'=>$id, 'nama'=>$nama);
        $this->Departemen_model->insertOne($save);
    }
}

?>


