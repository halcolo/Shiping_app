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
$vendor = filter_input(INPUT_POST, 'vendor');
$idreceiv = filter_input(INPUT_POST, 'idreceiv');
$status = 0;

//******************************************************************************
//This process calculate the average time of the vendor in the shipments
$query_expecting_date ="SELECT ROUND(AVG(F.D)) AS result
        FROM (SELECT DATEDIFF(delivered_date, creation_register_date) AS D
        FROM order_shipment, client , vendor
        WHERE order_shipment.id_vendor = '$vendor'
        AND order_shipment.id_client = '$idreceiv'
        AND vendor.city_vendor = client.city_client
        AND status = 2) AS F";

echo "$query_expecting_date";
$result = mysqli_query($connection ,$query_expecting_date);

while($row = mysqli_fetch_array($result))
//Set the variable and calculate the number of days
$days_add = $row["result"]+1;

if($days_add === 1){
$days_add = 5;
}

$act_date = date("Y-m-d");
$expect_date = strtotime($act_date."+ ".$days_add ." days") ;
$expect_date = date("Y-m-d", $expect_date );
//******************************************************************************



//Start the process to add the data
//Query
$sql_insert_order = "INSERT INTO `order_shipment` (`tracking`, `status`, `id_vendor`, `id_client`, `expected_date`, `delivered_date`, `creation_register_date`, `Content`)
                      VALUES ('$tracking','$status','$vendor','$idreceiv','$expect_date',NULL,sysdate(),'$content');";

//Validation
if ($connection->query($sql_insert_order) === TRUE) {
    echo $_SESSION['resp'] ="The order is now in the Database, The expecting delivery date is: ".$expect_date;
} else {
    echo $_SESSION['resp']  = "Error: " . $sql_insert_order . "<br>". $mysqli->error;
}

//Finish connection and return
$connection->close();
header('Location: ../order.php');
