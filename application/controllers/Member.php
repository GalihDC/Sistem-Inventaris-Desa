<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_member');
    $this->load->helper('create_no_pinjaman');
    $this->load->helper('indonesian_month');

    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function profileDiri(){
    $id = $this->session->userdata('id');
    $load['data'] = $this->M_member->loadProfile($id);
    $this->load->view('member/profile/v_profileDiri', $load);
  }
  function profileDesa(){
    $this->load->view('member/profile/v_profileDesa');
  }

  // ---------------------------- Barang ----------------------------------
  function barang(){
    $idData = $this->session->userdata('id');
    $data['barang'] = $this->M_member->dataStokBarang();
    $data['cekPeminjam'] = $this->M_member->cekPeminjaman($idData);
    $this->load->view('member/barang/v_dataStokBarang', $data);
  }
  function pilihBarang(){
    
    if ($this->session->userdata('id')) {
      $tgl = $this->input->post('tglPinjam');
      // -----------------------------------
      $tglP = substr($tgl, 3,2);
      $blnP = substr($tgl, 0,2);
      $thnP = substr($tgl, 6,4);

      $tglK = substr($tgl, 16,2);
      $blnK = substr($tgl, 13,2);
      $thnK = substr($tgl, 19,4);

      $tglPinjam = $tglP."/".$blnP."/".$thnP;
      $tglKembali = $tglK."/".$blnK."/".$thnK;

      // -----------------------------------
      $barang = $this->input->post('barang');
      $submit = $this->input->post('submit');
      if (isset($submit)) {
        if (!$barang) {
          redirect('member/barang');
        }else {
          date_default_timezone_set('Asia/Jakarta');
          $tglSkr = date("Y-m-d");
          $wktSkr = date("H:i:s");
          $idData = $this->session->userdata('id');
          $data['noPinjaman'] = helper_createNoPinjaman();
          $data['tglSkr'] = $tglSkr;
          $data['wktSkr'] = $wktSkr;
          $data['tglPinjam'] = helper_month($tglPinjam);
          $data['tglKembali'] = helper_month($tglKembali);
          $data['dataMember'] = $this->M_member->loadProfile($idData);
          $data['dataBarang'] = $this->M_member->slcBarang($barang);
          $this->load->view('member/barang/v_jmlStok', $data);
        }

      }else {
        redirect('member/barang');
      }
    }else {
      redirect('member/barang');
    }


  }
  function kirimData(){
    $idBarang = $this->input->post('idBarang');
    $jmlBarang = $this->input->post('jmlBarang');
    $noPinjaman = $this->input->post('noPinjaman');
    $tglPinjam = $this->input->post('tglPinjam');
    $tglKembali = $this->input->post('tglKembali');
    $tglSekarang = $this->input->post('tglSekarang');
    $idMember = $this->session->userdata('id');

    $dataPeminjam = array(
      'no_pinjaman' => $noPinjaman,
      'id_member' => $idMember,
      'no_urut' => $tglSekarang
    );
    $insertPeminjam = $this->M_member->insertPeminjam($dataPeminjam);
    if ($insertPeminjam) {
      for ($i=0; $i < count($idBarang) ; $i++) {
        $dataBrg = array(
          'no_pinjaman' => $noPinjaman,
          'no_barang' => $idBarang[$i],
          'tgl_pinjam' => $tglPinjam,
          'tgl_kembali' => $tglKembali,
          'jml_pinjam' => $jmlBarang[$i],
          'status' => 0
        );
        $this->M_member->insertDataBrg($dataBrg);
      }
      $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Data anda sudah terkirim, silahkan cek status peminjamam anda dan tunggu konfirmasi dari admin </p></div>');
      redirect('member/barang');
    }else {
      redirect('member/pilihBarang');
    }

  }

  // ------------------------------------- Peminjaman ---------------------
  function peminjaman(){
    $id = $this->session->userdata('id');
    $dataPeminjam = $this->M_member->loadPinjaman($id);
    if ($dataPeminjam) {
      $tglSkr = substr($dataPeminjam[0]->no_urut, 8,2);
      $blnSkr = substr($dataPeminjam[0]->no_urut, 5,2);
      $thnSkr = substr($dataPeminjam[0]->no_urut, 0,4);
      $wktSkr = substr($dataPeminjam[0]->no_urut, 10,8);
      $tglFix = $tglSkr."/".$blnSkr."/".$thnSkr;
      $data['from'] = $this->M_member->loadProfile($id);
      $data['noPinjaman'] = $dataPeminjam[0]->no_pinjaman;
      $data['tglPinjam'] = $dataPeminjam[0]->tgl_pinjam;
      $data['tglKembali'] = $dataPeminjam[0]->tgl_kembali;
      $data['peminjam'] = $dataPeminjam;
      $data['tglBuat'] = helper_month($tglFix);
      $data['wktBuat'] = $wktSkr;
      $this->load->view('member/peminjaman/v_peminjaman', $data);
    }else {
      $this->load->view('member/peminjaman/v_tdkPeminjaman');
    }

  }

  function batalPilih(){
    $id = $this->input->post('noPinjaman');
    $submit = $this->input->post('submit');
    if (isset($submit)) {
      $data = array('no_pinjaman' => $id);
      $this->M_member->hapusPlhBrg($data);
      redirect('member/peminjaman');
    }

  }

}
