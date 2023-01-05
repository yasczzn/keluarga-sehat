<?php

$dbhost = $_ENV['localhost'];
$dbuser = $_ENV['yasczzn'];
$dbpass = $_ENV['1saythename7'];
$db     = $_ENV['keluarga_sehat'];


$conn  = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if($conn->connect_error){
  die('Could not connect connect: '.$conn->connect_error);
}

?>