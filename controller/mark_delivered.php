<?php
/**
This archive is used to mark as delivered a order.
*/

//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../model/connection.php');


//vars post
$order_to_mark = filter_input(INPUT_POST, 'order_to_mark');
$status = filter_input(INPUT_POST, 'status');

//Query
$sql_mark_order = "UPDATE table_order SET delivery_date = sysdate(), status = '$status' WHERE id_order = '$order_to_mark';";

//Validation
if ($connection->query($sql_mark_order) === TRUE) {
  echo $_SESSION['resp'] ="Order ".$order_to_mark." is marked as delivered.";
} else {
  echo $_SESSION['resp']  = "Error: " . $sql_mark_order . "<br>". mysqli_error($connection);
}

//Finish connection and return
$connection->close();
header('Location: ../mod_order.php');
