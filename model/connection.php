<?php

/*
 * Connection form the DB
 */

//Creating the variables to connect, you cann change the password.
//******************************************************************************

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "shiping_db";

//******************************************************************************

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
