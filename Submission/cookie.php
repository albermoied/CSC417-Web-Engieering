<?php00
setcookie("lastvisit", time(), time()+60*60*24*365, "", "", false, true);

if(isset($_COOKIE["lastvisit"]))
{
	$a = time() - $_COOKIE("lastvisit");
	$m = $v/60;
	$s = $a%60;
	echo "Your last is " . $m . " and " . $s . " ago.";
}

?>