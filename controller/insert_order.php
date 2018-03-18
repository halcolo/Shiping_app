 <?php
 /**
 This archive is used to add an order to the data base.
 */


//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../model/connection.php');


//vars post of vendors
$content = filter_input(INPUT_POST, 'content');
$tracking = filter_input(INPUT_POST, 'tracking');
$expected = filter_input(INPUT_POST, 'expected');
$vendor = filter_input(INPUT_POST, 'vendor');
$typid = filter_input(INPUT_POST, 'typid');
$idreceiv = filter_input(INPUT_POST, 'idreceiv');
$name = filter_input(INPUT_POST, utf8_encode ('name'));
$addr = filter_input(INPUT_POST, utf8_encode ('addr'));
$city = filter_input(INPUT_POST, utf8_encode ('city'));
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, utf8_encode ('email'));
$departure = filter_input(INPUT_POST, 'departure');
$status = 0;


//Query
$sql_insert_order = "INSERT INTO table_order (content, tracking, days_expected, status, id_vendor,type_id,id_receiver,name_receiver,address_receiver,city_receiver,telephone_receiver,email_receiver,departure_date,delivery_date,creation_date)
VALUES ('$content', '$tracking', '$expected', '0', '$vendor', '$typid', '$idreceiv','$name', '$addr', '$city', '$phone', '$email', '$departure', NULL, sysdate());";

//Validation
if ($connection->query($sql_insert_order) === TRUE) {
    echo $_SESSION['resp'] ="The order is now in the Database.";
} else {
    echo $_SESSION['resp']  = "Error: " . $sql_insert_order . "<br>". $connection->error;
}

//Finish connection and return
$connection->close();
header('Location: ../order.php');
