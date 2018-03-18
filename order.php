<?php
//Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
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
<!--Input  form-->
    <form class="form-horizontal" action="controller/insert_order.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Add Order</center></legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tracking">Id tracking</label>
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


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="expected">Days expected</label>
  <div class="col-md-4">
  <input id="expected" name="expected" placeholder="Days expected for delivery" class="form-control input-md" required="true" type="text">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vendor">ID vendor</label>
  <div class="col-md-4">
  <input id="vendor" name="vendor" placeholder="Example: 01" class="form-control input-md" required="true" type="number" min ='1' max="100000000000">

  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="type id receiver">Type Id receiver</label>
  <div class="col-md-4">
    <select id="typid" name="typid" class="form-control">
      <option value="1">CC</option>
      <option value="2">NIT</option>
      <option value="3">Passport</option>
      <option value="4">CE</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_receiver">Id receiver</label>
  <div class="col-md-4">
  <input id="idreceiv" name="idreceiv" placeholder="Example: 10225488874" class="form-control input-md" required="true" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <input id="name" name="name" placeholder="Robert Snowman" class="form-control input-md" required="true" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr">Address</label>
  <div class="col-md-4">
  <input id="addr" name="addr" placeholder="Address" class="form-control input-md" required="true"  type="text">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>
  <div class="col-md-4">
  <input id="city" name="city" placeholder="Chicago" class="form-control input-md" required="true"  type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telephone">Telephone</label>
  <div class="col-md-4">
  <input id="phone" name="phone" placeholder="Code - phone Example (57 - 9665887)" class="form-control input-md" required="true"  type="number" min ='1' max="100000000000"/>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" placeholder="email@emailhost.com" class="form-control input-md" type="email" maxlength="50" required="true" >

  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CP">Departure date</label>
  <div class="col-md-2">
  <input id="departure" name="departure" placeholder="Example 01-01-1995" class="form-control input-md" required="" type="date" required="true" >

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
