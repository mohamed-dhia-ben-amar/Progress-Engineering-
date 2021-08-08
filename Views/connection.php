<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "dhia";
$dbname = "progressengineering";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
