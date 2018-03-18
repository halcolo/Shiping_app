<?php
/**
This archive is used to create function to print data show in number convert into characters.
*/

//Connection
require_once('../model/connection.php');

function type_id($type_id){
  if ($type_id = "1"){
    return "CC";
  }elseif ($type_id = "2") {
    return "NIT";
  }elseif ($type_id = "3") {
    return "Passport";
  }elseif ($type_id = "4") {
    return "CE";
  }
}

function status($status){
  if ($status = '0'){
    return "In course";
  }elseif ($status = '1') {
    return "Canceled";
  }elseif ($status = '2') {
    return "Delivered";
  }
}
