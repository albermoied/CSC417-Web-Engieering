<?php
echo "Minesweeper Board" . "<br>" . "<br>";

for($i=0; $i<=19; $i++) { 
  for($j=0; $j<=19; $j++) { 
     $arr[$i][$j] = " . ";
  } 
}

for($i=0; $i<=9; $i++) { 
	$a = rand(0, 19);
	$b = rand(0, 19);
	$arr[$a][$b] = " * ";  
}
echo <pre>;
for($i=0; $i<=19; $i++) { 
  for($j=0; $j<=19; $j++) { 
     $arr[$i][$j];
  } 
  "<br>";
}
echo </pre>;
?>  