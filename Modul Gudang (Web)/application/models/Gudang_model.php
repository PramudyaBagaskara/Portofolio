<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Gudang_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Gudang_model extends CI_Model {

  

  public function getDB(){
    return $this->db->get('alat_kesehatan');
  }

  public function getPG(){
    return $this->db->get('pegawai');
  }

  var $table = 'obat'; //nama tabel dari database
  var $column_order = array(null, 'nama_obat','jenis_obat','cara_pemakaian','harga_obat','stock'); //field yang ada di table user
  var $column_search = array('nama_obat','jenis_obat','cara_pemakaian','harga_obat','stock'); //field yang diizin untuk pencarian 
  var $order = array('id_obat' => 'asc'); // default order 

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 

  // ------------------------------------------------------------------------

  public function save_one($id_obat)
  {
      return $this->db->insert("obat", $id_obat);
  }

  public function savepeg($id_pegawai)
  {
      return $this->db->insert("pegawai", $id_pegawai);
  }

  public function savealat($id_alatkesehatan)
  {
      return $this->db->insert("alat_kesehatan", $id_alatkesehatan);
  }

  public function getEdit($where){
      return $this->db->get_where('obat', $where);
  }

  public function pengeluaran($where){
    return $this->db->get_where('obat', $where);
}

  public function getEditAlat($where){
    return $this->db->get_where('alat_kesehatan', $where);
}

public function getAll(){
    return $this->db->get('obat')->result();
  }

public function getEditPeg($where){
  return $this->db->get_where('pegawai', $where);
}

  public function delete_one($id_obat)
  {
      $this->db->where('id_obat',$id_obat);
      return $this->db->delete('obat');
  }

  public function deletepeg($id_pegawai)
  {
      $this->db->where('id_pegawai',$id_pegawai);
      return $this->db->delete('pegawai');
  }

  public function deletealat($id_alatkesehatan)
  {
      $this->db->where('id_alatkesehatan',$id_alatkesehatan);
      return $this->db->delete('alat_kesehatan');
  }

  public function updatealats($id_alat, $data)
  {
      $this->db->where('id_alatkesehatan',$id_alat);
      return $this->db->update('alat_kesehatan', $data);
  }
  
  public function updatepegawai($id_pegawai, $data)
  {
      $this->db->where('id_pegawai',$id_pegawai);
      return $this->db->update('pegawai', $data);
  }

  public function trans($id_obat, $data)
  {
      $this->db->trans_start();
      $this->update($id_obat, $data);
      $this->db->trans_complete();

      if ($this->db->trans_status()== false) {
          echo "rollback";
      } else {
          echo "commited";
      }
        
  }

  public function update($id_obat, $data)
  {
    $this->db->where('id_obat',$id_obat);
    return $this->db->update('obat', $data);
  }

  

  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Gudang_model.php */
/* Location: ./application/models/Gudang_model.php */