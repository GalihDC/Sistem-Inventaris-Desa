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

  function editBarang(){
    $idBarang = $this->uri->segment(3);
    $data['eBarang'] = $this->M_admin->editBarang($idBarang);
    $this->load->view('admin/barang/v_editBarang', $data);
  }


  // ----------------------- Peminjam -----------------------------------------
  function peminjam(){
    $this->load->view('admin/peminjam/v_peminjam');
  }

  // -------------------- Pemberitahuan -------------------
  function pemberitahuan(){
    $idPinjaman = [];
    $tglPeminjam = [];
    $namaPeminjam = [];
    $cekData = $this->M_admin->loadPemberitahuan();
    for ($i=0; $i < count($cekData) ; $i++) {
      array_push($idPinjaman, $cekData[$i]->no_pinjaman);
      array_push($namaPeminjam, $cekData[$i]->nama);
    }
    for ($i=0; $i < count($idPinjaman); $i++) {
      array_push($tglPeminjam, $this->M_admin->tglBarang($idPinjaman[$i]));
    }

    $data['idPeminjam'] = $idPinjaman;
    $data['namaPeminjam'] = $namaPeminjam;
    $data['tglPinjam'] = $tglPeminjam;

    $this->load->view('admin/pemberitahuan/v_pemberitahuan', $data);
  }
}
