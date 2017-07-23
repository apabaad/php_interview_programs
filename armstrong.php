<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$a=$_POST['input'];
$array=str_split($a);
$sum=0;
foreach ($array as $arrays) {
 
	$sum+= pow($arrays,3);
}
if ($a==$sum) {
	echo "$a is an armstrong number";
}
else{
	echo "$a is not an armstrong number";
}
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
