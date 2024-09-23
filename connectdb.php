<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","Micros0ft");
define("DATABASE","orezaar");

// Create connection
$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}


?>