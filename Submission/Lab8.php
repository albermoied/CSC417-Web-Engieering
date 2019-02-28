<html>
<body>

<form action="lab80.php" method="get">
Name: <input type="text" name="name"><br>

<input type="submit">
</form>

        My name is
        <?php
                echo $_GET["name"];
        ?><br>


</body>
</html>