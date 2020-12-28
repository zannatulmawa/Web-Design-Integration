<?php 
session_start();
?>

<?php

//store incoming values
if (isset($_GET["Username"]) && isset($_GET["Password"]))  //checking the existence of variables
{
	$inputUser = $_GET["Username"];
	$inputPass = $_GET["Password"];
	
	if (!empty($_GET["Username"]) && !empty($_GET["Password"]))
	{
		
			$my_user = 'root';
			$my_password = '';
			$my_db = 'registrationdb';
			$con = mysqli_connect("localhost", $my_user ,$my_password,$my_db);
			
			$ret = mysqli_query($con," SELECT * FROM `registrationinfo`where Email_Address = '". $inputUser . "' ");
			$result = mysqli_fetch_row($ret);
			if (!empty($result))
			{
				if ($inputPass == $result[5])
				{
					echo " <font color= #db75c5 size='10pt' > Login Successful";
					$_SESSION['currentUser'] = $inputUser;	

					header ("Location: index.php");
				}
				else
				{
					echo "Invalid Password";
				}
			}
			else
			{
				echo "Invalid Username";
			}


			
			// Free result set
			mysqli_free_result($ret);
			
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<style>
	body{
	 background-color: #f2d6eb;
	 background-image: url("BCI9.jpg");
}

h1{
	color: #602080;
	font-size: 1.5rem;
	padding: 20px;
}
	

b{
	color: black;
	font-size: 1rem;
}	
	
div{
	background-color: #e5e5e5;
	text-align: center;
	font-family: serif;
	padding: 40px;
	position: absolute;
	width: 300px;
	height: 200px;
	top: 50%;
	left: 50%;
	margin: -120px 0 0 -190px;	
}

.button{
	background-color: #602080;
	color: white;
}


.button:hover{
	background-color: #3c70a4
}

</style>

</head>

<body>
<div>
<h1> Welcome to Book Club </h1>
<form action = "LoginInfo.php" method="get">
<b> Username <b> <input type="text" name= "Username">
<br>
<br>
<b> Password <b> <input type="password" name= "Password">
<br>
<br>
<input class="button" type = "submit" value="Login">
</form>
</div>
</body>
</html>