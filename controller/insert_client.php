<?php
/**
This archive is used to add a client to the data base.
*/


//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../model/connection.php');


//vars post of clients

$idreceiv = filter_input(INPUT_POST, 'idreceiv');
$name = filter_input(INPUT_POST, utf8_encode ('name'));
$addr = filter_input(INPUT_POST, utf8_encode ('addr'));
$city = filter_input(INPUT_POST, utf8_encode ('city'));
$phone = filter_input(INPUT_POST, utf8_encode ('phone'));


//Query
$sql_insert_order = "INSERT INTO client (`id_client`, `name_client`, `city_client`, `address_client`, `phone_client`)
                    VALUES ('$idreceiv','$name','$city','$addr','$phone')";

//Validation
if ($connection->query($sql_insert_order) === TRUE) {
   echo $_SESSION['resp'] ="The client is now in the Database.";
} else {
   echo $_SESSION['resp']  = "Error: " . $sql_insert_order . "<br>". $mysqli->error;
}

//Finish connection and return
$connection->close();
header('Location: ../client.php');
