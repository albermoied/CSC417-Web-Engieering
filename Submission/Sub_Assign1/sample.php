<?php

$a = 0;
$b = 1;
echo "Fibonacci Sequence For N=11" . "<br>"; 
for($i = 0; $i<=10; $i++)
{
	echo $a . "  ";
	$a =$a + $b;
	$b = $a - $b;
	
}

?>