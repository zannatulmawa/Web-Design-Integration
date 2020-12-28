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
		
			header ("Location: Registration.php");
	
	}
		else
		{
			echo " <font color= #b5525c size='10pt' > Log in failed <br> ";    //what does it do?
		}

	
}

?>

<html>
<style>
body{
	background-color: #f2d6eb;
	top-margin: 0;
	left-margin: 0;
	margin-height: 0;
	margin-width: 0;
}
table{
	width: 100%;
	height: 100%;
	border: 0;
	cellspacing: 0;
	cellpadding: 0;
}
.img{
	align: center;
	valign: top;
	colspan: 2;
}
.td{
	width: 80%;
	align: center;
}
.main-img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
		
}
.top-img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.common{
	text-align: center;
	color: #6A1051;
}


.p{
	margin-top: 40pt;
}
.td1{
	width: 20%;
	background-color: #e5b0ea;
}
.div{
	color: white;
	link: white;

}
.p1{
	text-align: center;
	font-size: 15pt;
}

.br{
	color: white;
}

.field{
	color: white;
	width: 100%;
	padding: 12px 30px;
	margin: 8px 0;
	box-sizing: border-box;

}


.button:hover{
	background-color: #db75c5 ;
}
.button{
	border-radius: 4px;
	margin: auto auto auto 100px;
}


/*------- Header Navigation Section-----------*/

.nav ul {
	margin:0;
}

.nav li {
	display: inline;
}

.nav a {
	display: inline-block;
 	padding: .5em;
 	color: white;
 	text-decoration: none;
 }

 .main-nav {
 	text-align: center;
 	font-size: 1.1em;
 	font-weight: lighter;
 	border-bottom: 1px solid rgba(255, 255, 255, .3);
 }

.main-nav li {
	padding: 0 5%;
}
 .nav a:hover {
 	background-color: rgba(255, 255, 255, .3); /* .3 means transparency of 30%*/
 }


.main-header {
	background-color: rgba(0, 0, 0, .6);
	background-image: url("../Images/HB.jpg");
	background-size: cover;
	background-blend-mode: multiply;
	padding-bottom: 30px;
}

h2{
	text-align: center;
}

</style>
<head> 
<title> Book Club Front Page </title>

</head>
<body>
<table>
<tr>
<td class = "img" > <img class = "top-img" src = "images/BC2.jpg" alt = "top-img">
</td>
</tr>
<tr>
<td class = "td">
<p class = "p" > <img class = "main-img" src = "images/BC1.jpg" alt="main-img">
<p> <h2 class = "common"> Looking for Books? </h2> </p>
<p class = "common" > Check Out Our Website </p>
<p class = "common" > We may have just what you are looking for.</p>
</td>
<td class = "td1">
<div class = "div">
<p class = "p1">
<h1> Registration Form </h1>
<form action = "Registration.php" method="get">
<b class = "field"> <input type="text" name= "First_Name" placeholder="First Name">
<br>
<br>
<b class = "field">  <input type="text" name= "Last_Name" placeholder="Last Name">
<br>
<br>
<b class = "field"> <input type="text" name= "Phone_Number" placeholder="Phone">
<br>
<br>
<b class = "field"> <input type="text" name= "Email_Address" placeholder="Email">
<br>
<br>
<b class = "field">  <input type="password" name= "Desired_Password" placeholder="Password">
<br>
<br>
<b class = "field">  <input type="password" name= "Confirm_Password" placeholder="Confirm Password">
<br>
<br>
<b class = "field"><input list="listAffiliation" name="Affiliation" placeholder="Affiliation" />
<datalist id="listAffiliation">
  <option value="Student">
  <option value="Part-Time">
  <option value="Unemployed">
  <option value="Employed">
  <option value="Veteran">
</datalist>
<br>
<br>
<b class = "field"> <input type="text" name= "ZipCode" placeholder="Zip Code">
<br>
<br>
<input class="button" type = "submit" value="Register">
</form>
<br>
<br>
<h2> Already Member! </h2>
<form action = "LoginInfo.php" method="get">
<input class="button" type = "submit" value="Login">
</form>
</p>
</div>
</td>
</tr>
</table>
</body>
</html>

