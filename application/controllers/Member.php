<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_member');
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

}
