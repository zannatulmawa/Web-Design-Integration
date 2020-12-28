<?php

echo include("header.php");


?>


<html>
<style>
* {
  box-sizing: border-box;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 50.00%;
  padding: 10px;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.image{
	heigh: 400px;
	width: 550px;
}
.about-txt{
	font-family: cursive;
	font-size: 2rem;
}
</style>

<body>
<div class="row">
<div class="column" style="background-color:#ffcccc;">


          <img class="image" src="images/BCI10.jpg" alt="BCI10">
	

</div>
  <div class="column" style="background-color:#ffcccc;">
          <h3 class="about-txt" style="color:#cc6a87">About My Book Club</h3>
          <p class="about-txt"> Books are our best friend. Books free our minds, emboldens us to take a leap towards imagination. As an avid reader and collector of books,
I want to share my passion about reading and discussing about books. I would like to welcome you all to join my book club, and share the joy of reading with me!		  </p>
  </div>
</div>

</body>
</html>




<?php

echo include("footer.php");


?>   