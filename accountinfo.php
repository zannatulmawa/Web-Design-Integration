<?php
	
		session_start();
		include ('header.php');
		//echo $_SESSION['currentUser'] ;
		$inputUser = $_SESSION['currentUser'] ;   
		//$inputPass = $_GET["Password"];
	
			$my_user = 'root';
			$my_password = '';
			$my_db = 'registrationdb';
			$con = mysqli_connect("localhost", $my_user ,$my_password,$my_db);
			
			$ret = mysqli_query($con," SELECT * FROM `registrationinfo`where Email_Address = '". $inputUser . "' ");
			$result = mysqli_fetch_row($ret);
			if (!empty($result))
			{
				{
					
				echo	"<html>
					<body>
					
					<style>
				.boxInfo{
					background-color: #e5e5e5;
					text-align: center;
					font-family: serif;
					padding: 10px;
					position: relative;
					width: 300px;
					height: 500px;
					top: 20%;
					left: 50%;
					bottom: 50%;
					margin: -120px auto 150px -190px;	
				}
				.p_info{
					color: #470938;
				}
					</style>
					
					<div class = 'boxInfo'>
					<h1> Member Information </h1>
					<p class='p_info'> First Name : ". $result[1]." </p>
					<p class='p_info'> Last Name : " . $result[2]. " </p>
					<p class='p_info'> Phone: " . $result[3]. " </p>
					<p class='p_info'> Email: " . $result[4]. " </p>
					<p class='p_info'> Password : " . $result[5]. " </p>
					<p class='p_info'> Confirm Password : " . $result[6]. " </p>
					<p class='p_info'> Affiliation : " . $result[7]. " </p>
					<p class='p_info'> ZipCode : " . $result[8]. " </p>
					</div>
					</body>
					</html>";
				}
			}
	
			// Free result set
			mysqli_free_result($ret);
			include ('footer.php');
			
?>


