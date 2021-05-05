<?php 
session_start();  
include("connection.php");
include("functions.php");
$_SESSION;
$userData = check_login($con);


?>

<html>
    <head>
        <title> Said Website</title>
    </head>
    <body>
        <a href = "logout.php">Log Out</a>
        <h1> This is the index page</h1>
        <br>
        Hello, Username.
    </body>
</html>