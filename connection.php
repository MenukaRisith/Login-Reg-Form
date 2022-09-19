<?php

$dbhost = "your hosting / If u need db hosting contact me";
$dbuser = "user name";
$dbpass = "user password";
$dbname = "database name";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
