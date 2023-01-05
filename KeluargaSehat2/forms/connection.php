<?php

$dbhost = 'localhost';
$dbuser = 'yasczzn';
$dbpass = '1saythename7';
$db     = 'keluarga_sehat';


$conn  = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if($conn->connect_error){
  die('Could not connect connect: '.$conn->connect_error);
}

?>