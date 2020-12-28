<html>
<head>
<title> Welcome to Book Club </title>

<style>
body{
	background-color: #ffcccc;
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
 	color: black;
 	text-decoration: none;
 }

 .main-nav {
	background-color: #cc6a87;
 	text-align: center;
 	font-size: 1.1em;
 	font-weight: lighter;
 	border-bottom: 1px solid rgba(255, 255, 255, .3);

 }

.main-nav li {
	padding: 0 2.5%;
}
 .nav a:hover {
 	background-color:#ffddcc; /* .3 means transparency of 30%*/
 }


.main-header {
	background-size: cover;
	background-blend-mode: multiply;
}
	
.header_name {
	text-align: center;
	margin-left: 0px;
	font-size: 5em;
	font-family: "Booter - Zero Zero"
	font-weight: normal;
	color: #470938;
}
.PS{
   color:#11999E;
   text-align: center;
   font-size: 3em;
}
.MI{
  color: #cc6a87;

}
.gif{
  width:80%;
  float: left;
  margin-right: 30px;
}

.img{
	width:40%;
	height: 100%;
}

.skill-row{
  width:50%;
  margin:100px auto 100px auto;
  text-align: left;
  line-height: 2.5;
}

.hr{
  width:10%;
  border-style:dotted none none;
  border-width: 5px;
  border-color:grey;

}
.travel{
  width:80%;
  float:right;
  margin-left:30px;
}
.MH{
  color: #cc6a87;

}
.middle-container{
padding:100px;

}
.bottom-container{
background-color: #cc6a87;
padding:50px 0 20px;
text-align: center;
}
.footer-link{
  color:black;
  margin:10px 20px;
  font-family: 'Merriweather Sans', sans-serif;
  text-decoration: none;

}
.footer-link:hover{
  color:#eaf6f6;
}
.copyright{
  color: white;
  padding:20px 0;
  font-size:0.75rem;
  text-align:center;
}
.contact-me{
  margin: 50px auto 50px auto;

}
.butn {
  background: #11cdd4;
  background-image: -webkit-linear-gradient(top, #11cdd4, #11999e);
  background-image: -moz-linear-gradient(top, #11cdd4, #11999e);
  background-image: -ms-linear-gradient(top, #11cdd4, #11999e);
  background-image: -o-linear-gradient(top, #11cdd4, #11999e);
  background-image: linear-gradient(to bottom, #11cdd4, #11999e);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  font-family: 'Merriweather Sans', sans-serif;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  text-align:center;
  
}

.butn:hover {
  background: #30e3cb;
  background-image: -webkit-linear-gradient(top, #30e3cb, #2bc4ad);
  background-image: -moz-linear-gradient(top, #30e3cb, #2bc4ad);
  background-image: -ms-linear-gradient(top, #30e3cb, #2bc4ad);
  background-image: -o-linear-gradient(top, #30e3cb, #2bc4ad);
  background-image: linear-gradient(to bottom, #30e3cb, #2bc4ad);
  text-decoration: none;
}
.GIT{
  color:#cc6a87;
  margin:30px;
  text-align:center;
  
}
.CM{
  color:#cc6a87;
  margin: 50px;
  text-align:center;
}
.WU{
  margin:100px auto 100px auto;
  width:50%;
  line-height:2.5;
 
  
}
h1{
  color:#470938;
  font-size: 2.5rem;
font-family: 'Sacramento', cursive;
  margin: 50px auto 0 auto;
}

h2{
  font-family: 'Montserrat', cursive;
  color: black;
  text-align: center;
  
}
h3{
  font-family: 'Montserrat', sans-serif;
}
.fa-search:before{content:"\f002";}

.main-nav .search-container {
	float: right;
	margin-top: 5px;
}
</style>
</head>
<body>
<header class="main-header">
<nav class= "nav main-nav">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>	
				<li><a href="catalogue.php">CATALOGUE</a></li>
				<li><a href="accountinfo.php">ACCOUNT INFO</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="BookClubFront.php">LOG OUT</a></li>
				
				<div class="search-container" >
				<form action = "catalogue.php">
				<input type="text" placeholder = "Book Name..." name = "searchText">
				<button type="submit">Search</button>
				</form>
				</div>
				
			</ul>
</nav>
<h1 class = "header_name" > Book Club </h1>
<h2> <em> Free Your Imagination... </em> </h2>
</header>

		
</body>
</html>

