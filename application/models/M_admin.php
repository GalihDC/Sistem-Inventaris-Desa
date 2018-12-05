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

  function editBarang($data){
    $sql = "SELECT * FROM barang WHERE no_barang='$data'";
    return $this->db->query($sql)->result();
  }

  // ------------------------ Pemberitahuan -----------------------------
  function loadPemberitahuan(){
    $sql = "SELECT peminjam.no_pinjaman, members.nama FROM peminjam JOIN members WHERE peminjam.id_member=members.id_member AND peminjam.status=0";
    return $this->db->query($sql)->result();
  }
  function tglBarang($data){
    $sql = "SELECT tgl_pinjam, tgl_kembali FROM peminjam_has_barang WHERE no_pinjaman='$data' AND status=0";
    return $this->db->query($sql)->row();
  }

}
