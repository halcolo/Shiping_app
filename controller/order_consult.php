<?php

//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../model/connection.php');
require_once('function/change_data.php');

//Var post
$order = filter_input(INPUT_POST, 'order');


//Query
$query ="SELECT * FROM  table_order WHERE id_order = '$order' ORDER BY id_order DESC";
$result = mysqli_query($connection ,$query);

//Create the while to chow the regist
    while($row = mysqli_fetch_array($result))
    {
        echo $_SESSION['id_order'] = $row["id_order"];
        echo $_SESSION['content'] = $row["content"];
        echo $_SESSION['tracking'] = $row["tracking"];
        echo $_SESSION['status'] = status($row["status"]);
        echo $_SESSION['id_vendor'] = $row["id_vendor"];
        echo $_SESSION['type_id'] = type_id($row["type_id"]);
        echo $_SESSION['id_receiver'] = $row["id_receiver"];
        echo $_SESSION['name_receiver'] = utf8_encode ( $row["name_receiver"]);
        echo $_SESSION['address_receiver'] = $row["address_receiver"];
        echo $_SESSION['city_receiver'] = utf8_encode ( $row["city_receiver"]);
        echo $_SESSION['departure_date'] = $row["departure_date"];
    }

//Finish connection and return
$connection->close();
header('Location: ../mod_order.php');
