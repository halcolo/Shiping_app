<?php
//Imports, Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once('model/connection.php');

//This is the query to print the db data of clients in the form
$query_clients ="SELECT * FROM  client";
$result_clients = mysqli_query($connection ,$query_clients);

//This is the query to print the db data of vendor in the form
$query_vendor ="SELECT * FROM  vendor";
$result_vendor = mysqli_query($connection ,$query_vendor);

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
<!--Input  form-->
    <form class="form-horizontal" action="controller/insert_order.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Add Order</center></legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tracking">ID tracking</label>
  <div class="col-md-4">
  <input id="tracking" name="tracking" placeholder="Example: UHJH123456778" class="form-control input-md" required="true" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="content">Content</label>
  <div class="col-md-4">
  <input id="content" name="content" placeholder="Example: 'clothes, tecnology, computer, toys'" class="form-control input-md" required="true" type="text">

  </div>
</div>



<!-- Select Basic-->
<div class="form-group">
  <label class="col-md-4 control-label" for="type id receiver">ID vendor</label>
  <div class="col-md-4">
    <select required id="vendor" name="vendor" class="form-control">
      <option value="" selected disabled hidden>Choose vendor</option>
      <?php
      while($row_vendor = mysqli_fetch_array($result_vendor))
      {
          //Print the values of the tabler
          $option_vendor = '<option value = "'.$row_vendor["id_vendor"].'">'.$row_vendor["name_vendor"].'</option>';
          echo utf8_encode ($option_vendor);
      }

      ?>

    </select>
  </div>
</div>


<!-- Select Basic-->
<div class="form-group">
  <label class="col-md-4 control-label" for="type id receiver">ID client</label>
  <div class="col-md-4">
    <select required id="idreceiv" name="idreceiv" class="form-control">
      <option value="" selected disabled hidden>Choose client</option>
      <?php
      while($row_client = mysqli_fetch_array($result_clients))
      {
          //Print the values of the tabler
          $option_client = '<option value = "'.$row_client["id_client"].'">'.$row_client["name_client"].'</option>';
          echo utf8_encode ($option_client);
      }

      ?>

    </select>
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

</fieldset>
</form>
</div>
</body>
</html>
