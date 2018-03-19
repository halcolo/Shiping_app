
<?php
//Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
//Connection
require_once('model/connection.php');
//This is the query to print the db data in the table
$query ="SELECT  os.id_order, c.id_client, c.name_client, os.tracking ,v.name_vendor, ct.name_city, os.expected_date
FROM  order_shipment os, city ct, client c, vendor v
WHERE status = '0'
AND c.id_client = os.id_client
AND v.id_vendor = os.id_vendor
AND c.city_client = ct.id_city
ORDER BY id_order DESC";
$result = mysqli_query($connection ,$query);
//This is the function to controll the dates calculator, if the actual date is not grater than the delivery date this function shows  a green truck.
require_once('controller/function/calculate_dates.php');


?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shiping</title>
<meta charset="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script data-rocketsrc="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" data-rocketoptimized="true" type="text/javascript" async=""></script>
<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/b7ef205d/cloudflare-static/rocket.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin" media="all">
<title>Negotiatus</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/main_index.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/style.css">

</head>
  <body>

      <div class="container-fluid">
  <div class="row main clearfix">
    <nav class="navbar navbar-default" role="navigation">

    </nav>
    <nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
      <a class="navbar-brand" href="index.php"><img src="img/logo_fit3_white.png" style="max-width:120px; margin: -7px;" name="Inicio"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="vendor.php">Add vendor</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="client.php">Add client</a></li>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="order.php">Add order</a></li>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="mod_order.php">Order Dashboard</a></li>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" target="_blank" href="https://www.negotiatus.com/">Negotiatus page</a></li>


    </nav>



    <section class="col-md-9 card-wrapper col-md-offset-2">
            <div class="card background-card" style="min-height: 100px;">
              <h4 class="text-uppercase">Wellcome</h4>
              <!--....-->
              <hr>
              <div class="background-details">

                <div class="table-responsive">
                  <table id="employee_data" class="table table-striped table-bordered">
                  <thead>
                       <tr>
                            <td>ID Order</td>
                            <td>ID Client</td>
                            <td>Name Client</td>
                            <td>ID Tracking</td>
                            <td>Name vendor</td>
                            <td>City delivery</td>
                            <td>Expected date</td>
                            <td>Status</td>
                       </tr>
                  </thead>
                  <?php

                  while($row = mysqli_fetch_array($result))
                  {
                      //Print the values of the tabler
                      echo '
                       <tr>
                            <td>'.$row["id_order"].'</td>
                            <td>'.$row["id_client"].'</td>
                            <td>'.utf8_encode ( $row["name_client"]).'</td>
                            <td>'.$row["tracking"].'</td>
                            <td>'.utf8_encode ( $row["name_vendor"]).'</td>
                            <td>'.utf8_encode ( $row["name_city"]).'</td>
                            <td>'.$row["expected_date"].'</td>
                            <td>'.act_status($row["expected_date"]).'</td>
                       </tr>
                       ';

                  }

                  ?>
                  </table>
                </div>




              </div>
          </section>
          </div>
          </div>

  </body>
</html>
<!--The next script call the table filters and pagination-->
<script>
$(document).ready(function(){
    $('#employee_data').DataTable();
});
</script>
