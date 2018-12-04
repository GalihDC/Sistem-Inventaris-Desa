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

  function dataStokBarang(){
    $sql = "SELECT * FROM barang";
    return $this->db->query($sql)->result();
  }

  function slcBarang($data){
    $this->db->select('no_barang, nama_barang, stok');
    $this->db->where_in('no_barang', $data);
    return $this->db->get('barang')->result();

  }
  function insertPeminjam($data){
    return $this->db->insert('peminjam', $data);
  }

  function insertDataBrg($data){
    $this->db->insert('peminjam_has_barang', $data);
  }


  // ---------------------------- Pinjaman -------------
  function loadPinjaman($id){
    $sql= "SELECT * FROM peminjam JOIN peminjam_has_barang JOIN barang WHERE peminjam.no_pinjaman=peminjam_has_barang.no_pinjaman AND peminjam_has_barang.no_barang=barang.no_barang AND peminjam.id_member='$id' AND peminjam_has_barang.status=0";
    return $this->db->query($sql)->result();
  }
  function cekPeminjaman($id){
    $sql= "SELECT * FROM peminjam_has_barang JOIN peminjam WHERE peminjam.no_pinjaman=peminjam_has_barang.no_pinjaman AND peminjam_has_barang.status=0 AND peminjam.id_member='$id'";
    return $this->db->query($sql)->num_rows();
  }
  function hapusPlhBrg($id){
    return $this->db->delete('peminjam', $id);
  }



}
