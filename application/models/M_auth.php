<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function cekUser($user){
    $sql ="SELECT username FROM members WHERE username='$user'";
    return $this->db->query($sql)->num_rows();
  }
  function insertData($data){
    return $this->db->insert('mytable', $data);
  }


  function cekLogin($user, $pwd){
    $sql = "SELECT * FROM members WHERE username='$user' AND pwd='$pwd'";
    return $this->db->query($sql)->num_rows();
  }
  function cekId($user, $pwd){
    $sql = "SELECT * FROM members WHERE username='$user' AND pwd='$pwd'";
    return $this->db->query($sql)->row();
  }


  // ---------------- Login Admin --------------------

  function cekLoginAdmin($user, $pwd){
    $sql = "SELECT * FROM admin WHERE username='$user' AND pwd='$pwd'";
    return $this->db->query($sql)->num_rows();
  }
  function cekIdAdmin($user, $pwd){
    $sql = "SELECT id_admin FROM admin WHERE username='$user' AND pwd='$pwd'";
    return $this->db->query($sql)->row();
  }

}
