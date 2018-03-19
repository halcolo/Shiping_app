<?php
/**
This archive is used to create function to print data show in number convert into characters.
*/

//This function translate the Status

function status($status){
  if ($status == '0'){
    return "In course";
  }elseif ($status == '1') {
    return "Canceled";
  }elseif ($status == '2') {
    return "Delivered";
  }
}
