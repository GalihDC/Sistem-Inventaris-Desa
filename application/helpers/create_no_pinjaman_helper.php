<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function helper_createNoPinjaman(){
  $data = '1234567890';
  $string = '';
  for($i = 0; $i < 9; $i++) {
      $pos = rand(0, strlen($data)-1);
      $string .= $data{$pos};
  }
  return 'P'.$string;
}
