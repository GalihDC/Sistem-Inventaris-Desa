<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function loadProfile($id){
    $sql = "SELECT * FROM members WHERE id_member='$id'";
    return $this->db->query($sql)->result();
  }  

}
