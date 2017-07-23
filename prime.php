<?php
$a=4;
$check=0;
for ($i=2; $i<$a ; $i++) { 
	if($a%$i==0){
	$check++ ;}
	}
	if($check>0)
		{
			echo "not prime"; } 
	else{
		echo "PRIME";
	}

?>