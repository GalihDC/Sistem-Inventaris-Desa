<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  function helper_createId($tglL){
    $id_tgl = substr($tglL, 0, 2);
    $id_bln = substr($tglL, 3, 2);
    $id_thn = substr($tglL, 8, 2);
    $data = '1234567890';
    $string = '';
    for($i = 0; $i < 3; $i++) {
        $pos = rand(0, strlen($data)-1);
        $string .= $data{$pos};
    }
    return 'M'.$id_tgl.$id_bln.$id_thn.$string;
  }
