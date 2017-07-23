<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {

	$num= $_POST['input'];
	$fact=1;
	for ($i=1; $i <=$num ; $i++) { 
		$fact=$fact*$i;
	}
  echo "factorial of $num is $fact";
}
	
  ?>


  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  <form method="post">
  	<input type="text" name="input" id="value">
  	<input type="submit" name="submit">
  </form>
  </body>
  </html>

  
