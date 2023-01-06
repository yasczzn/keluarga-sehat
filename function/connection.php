<?php

$dbhost = $_ENV["DB_HOST"];
$dbuser = $_ENV["DB_USER"];
$dbpass = $_ENV["DB_PASSWORD"];
$dbname = $_ENV["DB_NAME"];
$dbport = $_ENV["DB_PORT"];

$conn  = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname, $dbport);

if($conn->connect_error){
  die('Could not connect connect: '.$conn->connect_error);
}

?>