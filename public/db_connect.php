<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be19_cr5_animal_adoption_mehdisalimi" ;

// create connection 
$connect = mysqli_connect($localhost, $username, $password, $dbname);
//$connect = new mysqli($localhost,$username, $password,$dbname);




// check connection
if (!$connect) {

  die ("Connection failed");

}