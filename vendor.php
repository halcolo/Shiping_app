<?php
//Start session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
//Connection
require_once('model/connection.php');
//This is the query to print the db data in the table
$query_vendor ="SELECT v.id_vendor, v.name_vendor, c.name_city
FROM vendor v, city c
WHERE c.id_city = v.city_vendor
ORDER BY id_vendor DESC";
$result_vendor = mysqli_query($connection ,$query_vendor);

//This is the query to print the db data of city in the form
$query_city ="SELECT * FROM  city";
$result_city = mysqli_query($connection ,$query_city);
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
<div class = "container">
<!--Input  form vendor-->
    <form class="form-horizontal" action="controller/insert_vendor.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Add Vendor</center></legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Idvendor">ID vendor</label>
  <div class="col-md-4">
  <input id="id_vendor" name="id_vendor" placeholder="ID vendor" class="form-control input-md" required="true" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name vendor</label>
  <div class="col-md-4">
  <input id="name_vendor" name="name_vendor" placeholder="Example: Amazon Spain" class="form-control input-md" required="true" type="text">

  </div>
</div>



<!-- Select Basic-->
<div class="form-group">
  <label class="col-md-4 control-label" for="type id receiver">City</label>
  <div class="col-md-4">
    <select required id="city" name="city" class="form-control">
      <option value="" selected disabled hidden>Choose a city</option>
      <?php
      while($row_city = mysqli_fetch_array($result_city))
      {
          //Print the values of the table
          $option_city = '<option value = "'.$row_city["id_city"].'">'.$row_city["name_city"].'</option>';
          echo utf8_encode ($option_city);
      }

      ?>

    </select>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Send</button>

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

<!--The table of vendor-->
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
                        <td>ID</td>
                        <td>Name</td>
                        <td>City</td>
                   </tr>
              </thead>
              <?php
              while($row_vendor = mysqli_fetch_array($result_vendor))
              {
                  //Print the values of the table vendor
                  echo '
                   <tr>
                        <td>'.$row_vendor["id_vendor"].'</td>
                        <td>'.utf8_encode ( $row_vendor["name_vendor"]).'</td>
                        <td>'.utf8_encode ( $row_vendor["name_city"]).'</td>
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
