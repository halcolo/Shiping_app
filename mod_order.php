<?php
//Start the session and unnable the notice
error_reporting(E_ALL ^ E_NOTICE);
session_start();
//Connection and map import
require_once('model/connection.php');
require_once('controller\map_controll.php');
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?=$api_key?>" ></script>
<!--Style for the map-->
<style>
    #map{
        width: 100%;
        height: 400px;
        border: #2c3e50 solid;
        border-width: 4px 4px 4px 4px;
    }
</style>
<!--Script for the map using gmaps library-->
<script src="js/gmaps.min.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function(){
        map = new GMaps({
            div: '#map',
            lat: <?=$latitude?>,
            lng: <?=$longitude?>,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.HYBRID
        });

        map.addMarker({
            lat: <?=$latitude?>,
            lng: <?=$longitude?>,
            title: '<?=$formatted_address?>',
            infoWindow: {
                content: '<?=$formatted_address?>'
            }
        });
    });
</script>

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

<div class="col-xs-6 .col-md-4">

    <form class="form-horizontal" action="controller\order_consult.php" role="form" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center>Consult Order</center></legend>


<!-- Text input-->
<div class="form-group">

  <label class="col-md-4 control-label" for="idOrder">Id order</label>
  <div class="col-md-4">
  <input id="order" name="order" placeholder="Id order" class="form-control input-md" required="true" type="number" min ='1' max="100000000000000"/>

  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="send"></label>
  <div class="col-md-4">
    <button id="send" name="send" class="btn btn-primary">Send</button>


  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Type_id: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["type_id"]);
          unset($_SESSION["type_id"]);
        ?>

  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Id receiver: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["id_receiver"]);
          unset($_SESSION["id_receiver"]);
        ?>

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Name receiver: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["name_receiver"]);
          unset($_SESSION["name_receiver"]);
        ?>

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Address receiver: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["address_receiver"]);
          unset($_SESSION["address_receiver"]);
        ?>

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">City: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["city_receiver"]);
          unset($_SESSION["city_receiver"]);
        ?>

  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Content: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION['content']);
          unset($_SESSION['content']);
        ?>

  </div>
</div><!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Tracking: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["tracking"]);
          unset($_SESSION["tracking"]);
        ?>

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Status: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["status"]);
          unset($_SESSION["status"]);
        ?>

  </div>
</div>


<!-- Textarea -->

<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Id_vendor: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["id_vendor"]);
          unset($_SESSION["id_vendor"]);
        ?>

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis">Departure date: </label>
  <div class="col-md-4">

        <?php
          //print the value.
          echo ($_SESSION["departure_date"]);
          unset($_SESSION["departure_date"]);
        ?>

  </div>
</div>


<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="send"></label>
<div class="col-md-4">


</form>
</fieldset>

</div>

<div class="container" >
<div class="col-xs-6 .col-md-4">

<form class="form-horizontal" action="controller\mark_delivered.php" role="form" method="POST">
<fieldset>
  <!-- Text input-->
  <legend><center>Modify order</center></legend>
  <div class="form-group">

    <label class="col-md-4 control-label" for="order_to_mark">Id order</label>
    <div class="col-md-4">
    <input id="order_to_mark" name="order_to_mark" placeholder="Id order" class="form-control input-md" required="true" type="number" min ='1' max="100000000000000"/>

    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="status">Status</label>
    <div class="col-md-4">
      <select id="status" name="status" class="form-control">
        <option value="2">Delivered</option>
        <option value="1">canceled</option>
      </select>
    </div>

    <button id="send" name="send" class="btn btn-primary">Send</button>

    <?php
    $_SESSION['resp']
     ?>
  </div>

 </form>
</div>
</div>

<div class="row">
  <div class="container">
          <div class="row">
              <div class="col-xs-12 .col-md-8">
                <h1 style="text-align: center;">Map</h1>

                <br>
                <div style="text-align: center;">
                    <kbd><kbd>Latitude:</kbd><?=$latitude?>, <kbd>Longitude:</kbd><?=$longitude?></kbd>
                </div>
              </div>
          </div>
          <hr>
          <div class="row">
              <div id="map"></div>
          </div>
      </div>

</div>

<div class="row">
  <div class="container">
          <div class="row">
              <div class="col-xs-12 .col-md-8">
<br>
<br>
<br>

              </div>
              </div>
              </div>
              </div>

</div>



</body>
</html>
