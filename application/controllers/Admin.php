<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_admin');
    $this->load->helper('create_no_barang');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function profileUser(){
    $this->load->view('admin/profile/v_profileDusun');
  }

  function profileDiri(){
    $id = $this->session->userdata('id');
    $load['data'] = $this->M_admin->loadProfile($id);
    $this->load->view('admin/profile/v_profileDiri', $load);
  }

  // --------------- Stok Barang ---------------------------------------
  function barang(){
    $data['barang'] = $this->M_admin->dataBarang();
    $data['barangPinjam'] = $this->M_admin->barangPinjaman();
    $this->load->view('admin/barang/v_stokBarang', $data);
  }
  function tambahBarang(){
    $namaBarang = $this->input->post('namaBarang');
    $jumlahBarang = $this->input->post('jumlahBarang');
    $kategori = $this->input->post('ketegoriBarang');
    $submit = $this->input->post('submit');
    $noBarang = helper_createNoBarang();
    if (isset($submit)) {
      $data = array(
        'no_barang' => $noBarang,
        'nama_barang' => $namaBarang,
        'total' => $jumlahBarang,
        'kategori' => $kategori
      );
      $cek = $this->M_admin->insertBarang($data);
      if ($cek) {
        $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Barang Berhasil di Tambahkan </p></div>');
        redirect('admin/barang');
      }else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger"> <p> Gagal Tambah Barang Siahkan Cek Kembali </p></div>');
        redirect('admin/barang');
      }
    }else {
      redirect('admin/barang');
    }
  }

  function hapusBarang(){
    $idBarang = $this->uri->segment(3);
    $data = array('no_barang' => $idBarang);
    $cek = $this->M_admin->deleteBarang($data);
    if ($cek) {
      $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Barang Berhasil di Delete </p></div>');
      redirect('admin/barang');
    }else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger"> <p> Barang Gagal di Delete </p></div>');
      redirect('admin/barang');
    }
  }

  // function editBarang(){
  //   $idBarang = $this->uri->segment(3);
  //   $data = array()
  // }


  // ----------------------- Peminjam -----------------------------------------
  function peminjam(){
    $this->load->view('admin/peminjam/v_peminjam');
  }
}
