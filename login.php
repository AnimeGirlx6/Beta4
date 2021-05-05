<?php
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style> 
    <div id = 'box'> 
        <div style = "font-size: 20px; margin: 10px; color: white;"> Log In</div>

        <form method = 'POST'>
        <input id = 'text' type = 'text' name = 'username' placeholder = Username><br><br> 
        <input id = 'text' type = 'password' name = 'password' placeholder = Password><br><br>
        <input id = 'button' type = 'submit' value = 'login'><br><br>
        <a href = "signup.php"> Sign Up </a><br><br>

        </form>
    </div>

</body>
</html>