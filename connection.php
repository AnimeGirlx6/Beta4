<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "project02";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Connection Failed!");
}