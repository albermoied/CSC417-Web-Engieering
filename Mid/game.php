<?php
/*<html>
	<head>
		<title>
			Numbers Game
		</title>
	</head>
	<body>
		<?php
			//$queryString = "no1=$no1&amp;no2=$no2&amp;count=$count&amp;score=$score";
			
			
			echo '<p><a href="game.php?' .$queryString .'">Start Quiz</a></p>';
			
		?>
	</body>
</html>*/

	$count = 1;
	$score = 0;
	
	$no1 = (int) rand(0,9);
	$no2 = (int) rand(0,9);
	
	$queryString = "no1=$no1&amp;no2=$no2&amp;count=$count&amp;score=$score";
	
	$count = $_GET['count'];
	$score = $_GET['score'];
	
	echo '<p><a href="game.php?' .$queryString .'">Start Quiz</a></p>';
	
	if($count>0 && $count<11)
	{
		echo 'Question No ' .$count;
		echo '<br>';
		
		echo $no1 .' + ' .$no2;
		echo '<br>';
		$count++;
		$sum = $no1 + $no2;
		
		
		$queryString = "count=$count&amp;score=";
		
		echo '<p><a href="game.php?' .$queryString .($score+0) .'">'.rand(0,20) .'</a></p>';
		echo '<p><a href="game.php?' .$queryString .($score+0) .'">'.rand(0,20) .'</a></p>';
		echo '<p><a href="game.php?' .$queryString .($score+1) .'">'.$sum .'</a></p>';
		echo '<p><a href="game.php?' .$queryString .($score+0) .'">'.rand(0,20) .'</a></p>';
	}
	
	else {
		echo 'Game Over';
		echo '<br>';
		echo 'Your Score is ' .$_GET['score'];
		echo '<br>';
		
		echo '<p><a href="game.php">Play Again</a></p>';
		
	}
	
	/*$count = $_GET['count'];
	
	echo 'Question No ' .$count;
	echo '<br>';
	
	echo $_GET['no1'] .' + ' .$_GET['no2'];
	echo '<br>';
	
	$count++;
	$score = $_GET['score'];
	$score++;
	
	$queryString = "count=$count&amp;score=$score";
	echo '<p><a href="game.php?' .$queryString .'">5</a></p>';*/
	
	
	
	
?>