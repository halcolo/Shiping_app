<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once('model/connection.php');
$query ="SELECT * FROM  table_order WHERE status != '3' ORDER BY sec_order DESC";
$result = mysqli_query($connection ,$query);
?>
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
  <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>
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
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="vendor.php">Create vendor</a>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="order.php">Add order</a></li>
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
                              <td>ID Receiver</td>
                              <td>Name</td>
                              <td>ID Tracking</td>
                              <td>Delivery City</td>
                              <td>status</td>
                         </tr>
                    </thead>
                    <?php
                    
                    while($row = mysqli_fetch_array($result))
                    {
                         echo '
                         <tr>
                              <td>'.$row["id_order"].'</td>
                              <td>'.$row["id_receiver"].'</td>
                              <td>'.utf8_encode ( $row["name_receiver"]).'</td>
                              <td>'.$row["tracking"].'</td>
                              <td>'.utf8_encode ( $row["city_receiver"]).'</td>
                              <td>'.$row["status"].'</td>
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
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  