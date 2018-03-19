<?php

//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('../model/connection.php');
require_once('function/change_data.php');

//Var post
$order = filter_input(INPUT_POST, 'order');

//******************************************************************************

//Query
$query ="SELECT cl.id_client, cl.name_client, cl.address_client, ct.name_city, os.tracking, os.status, os.Content, v.id_vendor, os.expected_date
FROM  order_shipment os, client cl, city ct, vendor v
WHERE id_order = '$order'
AND os.id_vendor = v.id_vendor
AND os.id_client = cl.id_client
AND cl.city_client = ct.id_city;";
$result = mysqli_query($connection ,$query);

//Create the while to chow the regist
    while($row = mysqli_fetch_array($result))
    {
        echo $_SESSION['id_client'] = $row["id_client"];
        echo $_SESSION['name_client'] = utf8_encode ( $row["name_client"]);
        echo $_SESSION['address_client'] = $row["address_client"];
        echo $_SESSION['name_city'] = utf8_encode ( $row["name_city"]);
        echo $_SESSION['content'] = $row["Content"];
        echo $_SESSION['tracking'] = $row["tracking"];
        echo $_SESSION['status'] = status($row["status"]);
        echo $_SESSION['id_vendor'] = $row["id_vendor"];
        echo $_SESSION['expected_date'] = $row["expected_date"];


    }

//Finish connection and return
$connection->close();
header('Location: ../mod_order.php');
