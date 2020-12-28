<?php
if (isset($_GET["First_Name"]) && isset($_GET["Last_Name"]) && isset($_GET["Phone_Number"]) && isset($_GET["Email_Address"]) && isset($_GET["Desired_Password"]) && isset($_GET["Confirm_Password"]) && isset($_GET["Affiliation"]) && isset($_GET["ZipCode"]))  //checking the existence of variables
{
	$inputFirstName = $_GET["First_Name"];
	$inputLastName = $_GET["Last_Name"];
	$inputPhoneNum = $_GET["Phone_Number"];
	$inputEmail = $_GET["Email_Address"];
	$inputPassword = $_GET["Desired_Password"];
	$inputConfirmPassword = $_GET["Confirm_Password"];
	$inputAffiliation = $_GET["Affiliation"];
	$inputZipcode = $_GET["ZipCode"];
	
	if (!empty($_GET["First_Name"]) && !empty($_GET["Last_Name"]) && !empty($_GET["Phone_Number"]) && !empty($_GET["Email_Address"]) && !empty($_GET["Desired_Password"]) && !empty($_GET["Confirm_Password"]) && !empty($_GET["Affiliation"]) && !empty($_GET["ZipCode"]))
	{
		
			//header ("Location: Registration.php");
			
			session_start();
			$my_user = 'root';
			$my_password = '';
			$my_db = 'registrationdb';
			$con = mysqli_connect("localhost", $my_user ,$my_password,$my_db);


			if (!mysqli_connect_errno())
			{
				//echo " <font color= #b5525c size='10pt' > Connection established! ";
			}
			else
			{
			  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$ret_check = mysqli_query($con," SELECT * FROM `registrationinfo`where Email_Address = '". $inputEmail . "' ");
			$result = mysqli_fetch_row($ret_check);
			if (!empty($result))
			{
				echo " <font color= #db75c5 size='10pt' > Email already exists, Please try again!";
				mysqli_free_result($ret_check);
			}
			else
			{
				if ($inputPassword == $inputConfirmPassword)
				{
					$ret_write = mysqli_query($con,"INSERT INTO registrationinfo (First_Name, Last_Name, Phone_Number, Email_Address, Desired_Password, Confirm_Password, Affiliation, ZipCode)
					VALUES ('".$inputFirstName."', '".$inputLastName."', '".$inputPhoneNum."', '".$inputEmail."', '".$inputPassword."', '".$inputConfirmPassword."', '".$inputAffiliation."', '".$inputZipcode."')");
					if ($ret_write == 1)
					{
					echo " < font color= #db75c5 size='10pt' > Registration Successful";
					header ("Location: LoginInfo.php");
					}
					else
					{
						echo " <font color= #db75c5 size='10pt' > Registration failed. Cannot Write to DB. Please Try Again!<br>";
					}
				}
				else 
				{
					echo " <font color= #db75c5 size='10pt' > Registration Failed. Password Confirmation Failed.<br>";
				}
					
			}
	}

	else
	{
		echo " <font color= #db75c5 size='10pt' > Registration failed. One/More missing fields!<br> ";
	}
}
	


?>



<html>
<head> 
<style>
body{
	background-color: #f2d6eb;
}
.top-img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.button{
	border-radius: 4px;
	width:250px;
	position: relative;
    left: 50%;
    margin-left: -100px; 
	color: #00818a;
	padding: 14px 40px;
	font-size: 16px;
	
}
.button:hover{
	background-color: #db75c5 ;
}
</style>

</head>
<body>
<form action = "BookClubFront.php" method="get">
<br>
<input class="button" type = "submit" value="Try Again">
</form>
<img class = "top-img" src = "images/BC3.jpg" alt = "top-img">
</body>
</html>