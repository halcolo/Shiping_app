<?php

/**
 This archive is used to add a vendor to the data base.
 */

//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../model/connection.php');


//vars post of vendors
$id_vendor = filter_input(INPUT_POST, 'id_vendor');
$name_vendor = filter_input(INPUT_POST, 'name_vendor');
$city = filter_input(INPUT_POST, 'city');
$address_vendor = filter_input(INPUT_POST, 'address_vendor');


//Query
$sql_insert_vendor = "INSERT INTO table_vendor (id_vendor, name_vendor, city_vendor, address_vendor)
VALUES ('$id_vendor', '$name_vendor', '$city', '$address_vendor');";

//Validation
if ($connection->query($sql_insert_vendor) === TRUE) {
    echo $_SESSION['resp'] ="Vendor is now in the Database.";
} else {
    echo $_SESSION['resp']  = "Error: " . $sql_insert_vendor . "<br>". mysqli_error($connection);
}

//Finish connection and return
$connection->close();
header('Location: ../vendor.php');
