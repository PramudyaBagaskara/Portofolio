<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Pegawai_model
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

class Pegawai_model extends CI_Model {

  public function getAll(){
    return $this->db->get('pegawai');
  }

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function delete_one($id)
  {
      $this->db->where('id',$id);
      return $this->db->delete('pegawai');
  }

  public function editpegawai($id)
  {
      $this->db->where('id',$id);
      return $this->db->update($data);
  }

  public function save_one($id)
  {
      return $this->db->insert($data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */