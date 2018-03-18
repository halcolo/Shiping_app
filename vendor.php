<?php
//Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
//Connection
require_once('model/connection.php');
//This is the query to print the db data in the table
$query ="SELECT * FROM  table_vendor ORDER BY sec_vendor DESC";
$result = mysqli_query($connection ,$query);
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
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" href="mod_order.php">Dashboard order</a></li>
						<div class="collapse navbar-collapse" id="navbarTogglerDemo01"><a class="navbar-brand" target="_blank" href="https://www.negotiatus.com/">Negotiatus page</a></li>


			</nav>
<div class = "container">
<!--Input  form vendor-->
    <form class="form-horizontal" action="controller/insert_vendor.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Add Vendor</center></legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Idvendor">Id vendor</label>
  <div class="col-md-4">
  <input id="id_vendor" name="id_vendor" placeholder="id vendor" class="form-control input-md" required="true" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name vendor</label>
  <div class="col-md-4">
  <input id="name_vendor" name="name_vendor" placeholder="Example: Amazon" class="form-control input-md" required="true" type="text">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City vendor</label>
  <div class="col-md-4">
  <input id="city" name="city" placeholder="Example: Chicago" class="form-control input-md" required="true" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Addres">Addres of warehouse</label>
  <div class="col-md-4">
  <input id="address_vendor" name="address_vendor" placeholder="Adrress" class="form-control input-md" required="true" type="text">

  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">send</button>

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis"></label>
  <div class="col-md-4">

        <?php
          //Print the result.
          echo ($_SESSION["resp"]);
          unset($_SESSION["resp"]);
        ?>

  </div>
</div>

<!--The table of vendors-->
<section class="col-md-9 card-wrapper col-md-offset-2">
        <div class="card background-card" style="min-height: 100px;">
          <h4 class="text-uppercase">Vendors</h4>
          <!--....-->
          <hr>
          <div class="background-details">

            <div class="table-responsive">
              <table id="employee_data" class="table table-striped table-bordered">
              <thead>
                   <tr>
                        <td>ID Vendor</td>
                        <td>Name</td>
                        <td>City</td>
                        <td>Addres</td>
                   </tr>
              </thead>
              <?php
              while($row = mysqli_fetch_array($result))
              {
                  //Print the values of the tabler
                  echo '
                   <tr>
                        <td>'.$row["id_vendor"].'</td>
                        <td>'.utf8_encode ( $row["name_vendor"]).'</td>
                        <td>'.utf8_encode ( $row["city_vendor"]).'</td>
                        <td>'.utf8_encode ( $row["address_vendor"]).'</td>
                   </tr>
                   ';

              }




              ?>
              </table>
            </div>




          </div>
      </section>

</fieldset>
</form>
</div>
</body>
</html>

<script>
 $(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>
