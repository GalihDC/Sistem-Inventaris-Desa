<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function loadProfile($id){
    $sql = "SELECT * FROM admin WHERE id_admin='$id'";
    return $this->db->query($sql)->result();
  }


  function dataBarang(){
    $sql = "SELECT * FROM barang";
    return $this->db->query($sql)->result();
  }

  function barangPinjaman(){
    $sql = "SELECT * FROM barang JOIN peminjam_has_barang WHERE barang.no_barang=peminjam_has_barang.no_barang";
    return $this->db->query($sql)->result();
  }

  // -------------------------  Barang -----------------
  function insertBarang($data){
    return $this->db->insert('barang', $data);
  }

  function deleteBarang($data){
    return $this->db->delete('barang', $data);
  }

}
