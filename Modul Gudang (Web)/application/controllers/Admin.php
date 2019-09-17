<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller ADMIN
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Pegawai_model');
    $this->load->model('Gudang_model');
  }

  public function index()
  {
   $data['title']="Admin SIRMS";
   $this->renderAdmin($data);
  }
  public function pegawai(){
    $data['title']="List Data Pegawai";
    $data['page']="pegawai";
    $data['pegawai']=$this->Pegawai_model->getAll()->result();
    $this->renderAdmin($data);
  }
  public function renderAdmin($data){
    $this->load->view('layout/header', $data);
    $this->load->view('layout/sidebar');
    $this->load->view('layout/maincontent');
    $this->load->view('layout/footer');

  }

  public function inputpegawai(){
    $data['title']="Form Input Pegawai";
    $data['page']="inputpegawai";
    $this->renderAdmin($data);

  }

  public function hapuspegawai($id){
    $del=$this->Pegawai_model->delete_one($id);
    if($del==TRUE){
      echo "Data Pegawai Berhasil Dihapus";
    }else{
      echo "Data Pegawai Gagal Dihapus";
    }
  }

  public function gudang(){
    $data['title']="Form Gudang";
    $data['page']="gudang";
    $this->renderAdmin($data);
  }

  public function obat(){
    $data['title']="Form Obat";
    $data['page']="obat";
    $this->renderAdmin($data);
    
  }

  public function pegawaii(){
    $data['title']="Form Pegawai";
    $data['page']="pegawaii";
    $data['pegawaii']=$this->Gudang_model->getPG();
    $this->renderAdmin($data);
    
  }

  public function alatkesehatan(){
    $data['title']="Form Alat Kesehatan";
    $data['page']="alatkesehatan";
    $data['alatkesehatan']=$this->Gudang_model->getDB();
    $this->renderAdmin($data);
    
  }


  public function tambahalatkesehatan(){
    $data['title']="Form Alat Kesehatan";
    $data['page']="tambahalatkesehatan";
    $data['tambahalatkesehatan']=$this->Gudang_model->getDB();
    $this->renderAdmin($data);
    
  }


  public function tambahobat(){
    $data['title']="Form Input Obat";
    $data['page']="tambahobat";
    $this->renderAdmin($data);
  }

  public function tambahpegawaii(){
    $data['title']="Form Input Pegawai";
    $data['page']="tambahpegawaii";
    $this->renderAdmin($data);
  }

  public function editobat($id){
    $where = array('id_obat'=> $id);
    $data['title']="Form Edit Obat";
    $data['page']="editobat";
    $data['obat']=$this->Gudang_model->getEdit($where)->result();
    $this->renderAdmin($data);
  }

  public function editalatkesehatan($id){
    $where = array('id_alatkesehatan'=> $id);
    $data['title']="Form Edit Alat Kesehatan";
    $data['page']="editalatkesehatan";
    $data['alatkesehatan']=$this->Gudang_model->getEditAlat($where)->result();

    $this->renderAdmin($data);
  }

 public function pengeluaran($id)
 {
  $where = array('id_obat'=> $id);
    $data['title']="Pengeluaran";
    $data['page']="pengeluaran";
    $data['pengeluaran']=$this->Gudang_model->pengeluaran($where)->result();

    $this->renderAdmin($data);
    

 }

 public function pengeluaranaja($id)
 {
  $data = array(


    'stock'               => $this->input->post("stock"),
  

);

$this->Gudang_model->trans($id, $data);
redirect('admin/obat');
 }

  public function editpegawaii($id){
    $where = array('id_pegawai'=> $id);
    $data['title']="Form Edit Pegawai";
    $data['page']="editpegawaii";
    $data['pegawaii']=$this->Gudang_model->getEditPeg($where)->result();

    $this->renderAdmin($data);
  }

  public function ajaxobat()
    {
        $list = $this->Gudang_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
        $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->id_obat;
            $row[] = $field->nama_obat;
            $row[] = $field->jenis_obat;
            $row[] = $field->cara_pemakaian;
            $row[] = $field->harga_obat;
            $row[] = $field->stock;
            $row[] = '<a href="editobat/'.$field->id_obat.'" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                     <a href="hapusobat/'.$field->id_obat.'" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Gudang_model->count_all(),
            "recordsFiltered" => $this->Gudang_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }



     public function save_one()
    {
      
        $data = array(

            'nama_obat'       => $this->input->post("nama_obat"),
            'jenis_obat'         => $this->input->post("jenis_obat"),
            'cara_pemakaian'    => $this->input->post("cara_pemakaian"),
            'harga_obat'         => $this->input->post("harga_obat"),
            'stock'         => $this->input->post("stock"),
        );
        
        $this->Gudang_model->save_one($data);


        //redirect
        redirect('admin/obat');

    }

    public function savealat()
    {
      
        $data = array(

            'nama_alatkesehatan'          => $this->input->post("nama_alatkesehatan"),
            'cara_pemakaian'              => $this->input->post("cara_pemakaian"),
            'harga_alatkesehatan'         => $this->input->post("harga_alatkesehatan"),
            'stock'                       => $this->input->post("stock"),
        );
        
        $this->Gudang_model->savealat($data);


        //redirect
        redirect('admin/alatkesehatan');

    }

    public function savepeg()
     {

        $data = array(

          
          'id_pegawai'             => $this->input->post("id_pegawai"),
          'nama'                   => $this->input->post("nama"),
          'jk'                      => $this->input->post("jk"),
          'tmp_lahir'      => $this->input->post("tmp_lahir"),
          'tgl_lahir'          => $this->input->post("tgl_lahir"),
          'alamat'               => $this->input->post("alamat"),
          'mulai_kerja'               => $this->input->post("mulai_kerja"),
          'status_hadir'               => $this->input->post("status_hadir"),    
          

        );

        $this->Gudang_model->savepeg($data);

        //redirect
        redirect('admin/pegawaii');

    }

    public function update($id)
    {

        $data = array(

            'id_obat'             => $this->input->post("id_obat"),
            'nama_obat'           => $this->input->post("nama_obat"),
            'jenis_obat'          => $this->input->post("jenis_obat"),
            'cara_pemakaian'      => $this->input->post("cara_pemakaian"),
            'harga_obat'          => $this->input->post("harga_obat"),
            'stock'               => $this->input->post("stock"),
          

        );

        $this->Gudang_model->update($id, $data);

        //redirect
        redirect('admin/obat');

    }

    public function updatepegawaii($id)
    {

        $data = array(

            'id_pegawai'             => $this->input->post("id_pegawai"),
            'nama'                   => $this->input->post("nama"),
            'jk'                      => $this->input->post("jk"),
            'tmp_lahir'      => $this->input->post("tmp_lahir"),
            'tgl_lahir'          => $this->input->post("tgl_lahir"),
            'alamat'               => $this->input->post("alamat"),
            'mulai_kerja'               => $this->input->post("mulai_kerja"),
            'status_hadir'               => $this->input->post("status_hadir"),          

        );

        $this->Gudang_model->updatepegawai($id, $data);

        //redirect
        redirect('admin/pegawaii');

    }


    public function updatealat($id)
    {

        $data = array(

            'id_alatkesehatan'            => $this->input->post("id_alatkesehatan"),
            'nama_alatkesehatan'          => $this->input->post("nama_alatkesehatan"),
            'cara_pemakaian'              => $this->input->post("cara_pemakaian"),
            'harga_alatkesehatan'         => $this->input->post("harga_alatkesehatan"),
            'stock'                       => $this->input->post("stock"),
          

        );


        $this->Gudang_model->updatealats($id, $data);

        //redirect
        redirect('admin/alatkesehatan');

    }

    public function export(){
      
      header("Content-type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=Data_Obat.xls");
      
      $data['obat']=$this->Gudang_model->getAll();
      $this->load->view('gudang/export_excel', $data);
    }


    public function hapuspeg($id_pegawai){
      $del=$this->Gudang_model->deletepeg($id_pegawai);
      if($del==TRUE){
        redirect("admin/pegawaii");
      }else{
        echo "Data Pegawai Gagal Dihapus";
      }
      
  
      
    }

  public function hapusobat($id_obat){
    $del=$this->Gudang_model->delete_one($id_obat);
    if($del==TRUE){
      redirect("admin/obat");
    }else{
      echo "Data Obat Gagal Dihapus";
    }
    

    
  }

  public function hapusalat($id_alatkesehatan){
    $del=$this->Gudang_model->deletealat($id_alatkesehatan);
    if($del==TRUE){
      redirect("admin/alatkesehatan");
    }else{
      echo "Data Obat Gagal Dihapus";
    }
    

    
  }
       
       
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
