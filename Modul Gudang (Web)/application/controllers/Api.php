<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id_obat');
        if ($id == '') {
            $kontak = $this->db->get('obat')->result();
        } else {
            $this->db->where('id_obat', $id);
            $kontak = $this->db->get('obat')->result();
        }
        $this->response($kontak, 200);
    }

    //Masukan function selanjutnya disini

      //Mengirim atau menambah data kontak baru
      function index_post() {
        $data = array(
                    'nama_obat'          => $this->post('nama_obat'),
                    'jenis_obat'    => $this->post('jenis_obat'),
                    'cara_pemakaian'    => $this->post('cara_pemakaian'),
                    'harga_obat'    => $this->post('harga_obat'),
                    'stock'    => $this->post('stock'));
        $insert = $this->db->insert('obat', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini

      //Memperbarui data kontak yang telah ada
      function index_put() {
        $id = $this->put('id_obat');
        $data = array(
            'nama_obat'          => $this->put('nama_obat'),
            'jenis_obat'    => $this->put('jenis_obat'),
            'cara_pemakaian'    => $this->put('cara_pemakaian'),
            'harga_obat'    => $this->put('harga_obat'),
            'stock'    => $this->put('stock'));
        $this->db->where('id_obat', $id);
        $update = $this->db->update('obat', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini

     //Menghapus salah satu data kontak
     function index_delete() {
        $id = $this->delete('id_obat');
        $this->db->where('id_obat', $id);
        $delete = $this->db->delete('obat');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


}
?>
