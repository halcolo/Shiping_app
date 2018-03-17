 <?php

    session_start();
    require_once('../model/connection.php');

$id_order = filter_input(INPUT_POST, 'id_order');
$content = filter_input(INPUT_POST, 'content');
$tracking = filter_input(INPUT_POST, 'tracking');
$vendor = filter_input(INPUT_POST, 'vendor');
$typid = filter_input(INPUT_POST, 'typid');
$idreceiv = filter_input(INPUT_POST, 'idreceiv');
$name = filter_input(INPUT_POST, 'name');
$addr = filter_input(INPUT_POST, 'addr');
$city = filter_input(INPUT_POST, 'city');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$departure = filter_input(INPUT_POST, 'departure');
$delivery = filter_input(INPUT_POST, 'delivery');
$status = 0;



function insert_order(){
    
$sql_insert_order = "INSERT INTO table_order (id_order, content, tracking, days_expected, id_vendor, type_id, id_receiver, name_receiver, address_receiver, city_receiver, telephone_receiver, email_receiver, departure_date, delivery_date, creation_date)
VALUES ('10001221', 'Tecnology','HJT12345687', '6', '2', '1',1,'PEREZ RIVAS FERNANDO MAURICIO','CL 90 # 9 - 06','Medellín','3118443423', 'mail@mail.com', sysdate(), NULL, sysdate());)";

if ($sql_insert_order === TRUE) {
    echo $_SESSION['resp'] ="The order is now in the Database";
} else {
    echo $_SESSION['resp']  = "Error: " . $sql_insert_order . "<br>" ;
}

}


$conn->close();

header('Location: ../order.php');


