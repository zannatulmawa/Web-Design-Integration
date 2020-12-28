<?php

echo include("header.php");

?>

<html>

<head> 
<style>
* {
	box-sizing: border-box;
}
.column {
	float: left;
	width: 33.33%;
	padding: 5px;
}
.row::after {
	content: "";
	clear: both;
	display: table;
}
h3{
	text-align: center;
	font-family: cursive;
	color: #470938;
}

.hover-opacity:hover{
	opacity:0.60;
	}


</style>
</head>

<body>

<h1 style="text-align:center"> Contact Us Here </h1>

<div class="row">
	<div class = "column">
			   <h3 >Phone Number: 302-765-7254</h3>
			   <img  src="images/BCI6.jpg"  class="hover-opacity" alt="Phone Image" style="width:80%">
	</div>
	<div class = "column">
			   <h3 >Email: zannatulmawa62@gmail.com</h3>	 
			   <img  src="images/BCI7.jpg" class="hover-opacity" alt="Email Image" style="width:80%">
	</div>
	<div class = "column">		   
			   <h3 >Text: 302-765-7254</h3>
			   <img  src="images/BCI8.jpg" class="hover-opacity" alt = "Text Image" style="width:80%">
	</div>		   
</div>

</body>

</html>

<?php

echo include("footer.php");

?>
