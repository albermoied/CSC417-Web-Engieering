<?php
$connection  = new mysqli('mysql14.000webhost.com', 'a6790127_alber', 'abc123', 'a6790127_cinema');
if($connection->connect_error) die($connection->connect_error);

$query = "SELECT * FROM movies";
$result = $connection->query($query);
if(!$result) die($connection->error);

if(isset($_POST['find']) && isset($_POST['id']))
{
	$find = get_post($connection, 'find');
	$query = "SELECT * FROM movies WHERE id='$find'";
	$result = $connection->query($query);
	
	$rows = $result ->num_rows;
	for($j=0;$j<$rows;++$j)
	{
	$result -> data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	echo <<<_END
	<pre>
ID		: $row[0]
Title		: $row[1]
Genre		: $row[2]
Star Actor	: $row[3]
Director	: $row[4]</pre>
_END;
	}
	if(!$result) echo "Search failed: $query<br>" . $connection->error . "<br><br>";
}
if(isset($_POST['find']) && isset($_POST['title']))
{
	$find = get_post($connection, 'find');
	$query = "SELECT * FROM movies WHERE title='$find'";
	$result = $connection->query($query);
	
	$rows = $result ->num_rows;
	for($j=0;$j<$rows;++$j)
	{
	$result -> data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	echo <<<_END
	<pre>
ID		: $row[0]
Title		: $row[1]
Genre		: $row[2]
Star Actor	: $row[3]
Director	: $row[4]</pre>
_END;
	}
	if(!$result) echo "Search failed: $query<br>" . $connection->error . "<br><br>";
}
if(isset($_POST['find']) && isset($_POST['director']))
{
	$find = get_post($connection, 'find');
	$query = "SELECT * FROM movies WHERE director='$find'";
	$result = $connection->query($query);
	
	$rows = $result ->num_rows;
	for($j=0;$j<$rows;++$j)
	{
	$result -> data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	echo <<<_END
	<pre>
ID		: $row[0]
Title		: $row[1]
Genre		: $row[2]
Star Actor	: $row[3]
Director	: $row[4]</pre>
_END;
	}
	if(!$result) echo "Search failed: $query<br>" . $connection->error . "<br><br>";
}

if(isset($_POST['id']) &&
	isset($_POST['title']) &&
	isset($_POST['genre']) &&
	isset($_POST['star_actor']) &&
	isset($_POST['director']))
{
	$id = get_post($connection, 'id');
	$title = get_post($connection, 'title');
	$genre = get_post($connection, 'genre');
	$staractor = get_post($connection, 'star_actor');
	$director = get_post($connection, 'director');
	
	$query = "INSERT INTO movies VALUES" . "('$id', '$title', '$genre', '$staractor', '$director')";
	$result = $connection->query($query);
		
	if (!$result) echo "INSERT failed $query<br>" . $connection->error . "<br><br>";
}
if(isset($_POST['delete']) && isset($_POST['id']))
{
	$id = get_post($connection, 'id');
	$query = "DELETE FROM movies WHERE id='$id'";
	$result = $connection->query($query);
	
	if(!$result) echo "DELETE failed: $query<br>" . $connection->error . "<br><br>";
}
function get_post($connection, $var)
{
	return $connection->real_escape_string($_POST[$var]);
}
$query = "SELECT * FROM movies";
$result = $connection->query($query);
$rows = $result ->num_rows;
$row = $result->fetch_array(MYSQLI_NUM);
echo <<<_END
	<br><form action="cinema.php" method="post">
	<input type="text" name="find">
	<input type="hidden" name="id" value="$row[0]">
	<input type="hidden" name="title" value="$row[1]">
	<input type="hidden" name="director" value="$row[4]">
	<input type="submit" value="Search"></form><br>
_END;
	
echo <<<_END
<form action="cinema.php" method="post"><pre>
	ID 	   <input type="text" name="id">
	Title 	   <input type="text" name="title">
	Genre 	   <input type="text" name="genre">
	Star Actor <input type="text" name="star_actor">
	Director   <input type="text" name="director">
			   <input type="submit" value="Add Record">
</pre></form>
_END;

$query = "SELECT * FROM movies";
$result = $connection->query($query);

$rows = $result ->num_rows;
for($j=0;$j<$rows;++$j)
{
	$result -> data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	
	echo <<<_END
	<pre>
ID		: $row[0]
Title		: $row[1]
Genre		: $row[2]
Star Actor	: $row[3]
Director	: $row[4]</pre>
	
	<form action="cinema.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="id" value="$row[0]">
	<input type="submit" value="Delete Record"></form>
_END;
}

	$result->close();
	$connection->close();
?>