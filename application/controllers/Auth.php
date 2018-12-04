<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('create_id');
    $this->load->helper('indonesian_month');
    $this->load->library('upload');
    $this->load->model('M_auth');
    //Codeigniter : Write Less Do More
    // $this->load->model('M_auth');
  }

  function index()
  {

  }

  function login(){
    $this->load->view('auth/v_login');
  }
  function register(){
    $this->load->view('auth/v_register');
  }
  function loginAdmin(){
    $this->load->view('auth/v_loginAdmin');
  }
  // ------------------------------  Regsiter -------------------------------

  function aksi_daftar(){
    $nama = $this->input->post('nama');
    $jk = $this->input->post('jk');
    $tglL = $this->input->post('tglL');
    $alamat = $this->input->post('alamat');
    $pwd = $this->input->post('pwd');
    $cPwd = $this->input->post('cPwd');
    $user = $this->input->post('user');
    $noTlp = $this->input->post('noTlp');

    $cek_user = $this->M_auth->cekUser($user);
    if ($cek_user < 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Maaf username sudah terpakai </p></div>');
      redirect('register');
    }else {
      if ($pwd != $cPwd) {
        $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Silahkan cek Confrim Password </p></div>');
        redirect('register');
      }else {
        $id = helper_createId($tglL);
        $tglLahir = helper_month($tglL);
        $data = array(
          'id_member' => $id,
          'nama' => $nama,
          'jn_klm' => $jk,
          'tgl_lahir' => $tglLahir,
          'alamat' => $alamat,
          'no_tlp' => $noTlp,
          'username' => $user,
          'pwd' => $pwd
        );
        $insert = $this->M_auth->insertData($data);
        if (!$insert) {
          $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Silahkan cek kembali </p></div>');
          redirect('register');
        }else {
          redirect('member/profileDiri');
        }


      }
    }

  }

  function aksi_login(){
    $user = $this->input->post('user');
    $pwd = $this->input->post('pwd');
    $submit = $this->input->post('submit');


    if (isset($submit)) {
      $cek = $this->M_auth->cekLogin($user, $pwd);
      if ($cek <= 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Silahkan cek kembali </p></div>');
        redirect('auth/login');
      }else {
        $id = $this->M_auth->cekId($user, $pwd)->id_member;
        $dataId = array('id' => $id);
        $this->session->set_userdata($dataId);
        redirect('member/profileDiri');
      }
    }else {
      redirect('auth/login');
    }

  }



  // ---------------- Login Admin -----------------

  function aksi_loginAdmin(){
    $user = $this->input->post('user');
    $pwd = $this->input->post('pwd');
    $submit = $this->input->post('submit');


    if ($submit) {
      $cek = $this->M_auth->cekLoginAdmin($user, $pwd);

      if ($cek <= 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-success"> <p> Silahkan cek kembali </p></div>');
        redirect('auth/loginAdmin');
      }else {
        $id = $this->M_auth->cekIdAdmin($user, $pwd)->id_admin;
        $dataId = array('id' => $id);
        $this->session->set_userdata($dataId);
        redirect('admin/profileDiri');
      }
    }else {
      redirect('auth/loginAdmin');
    }

  }

}
