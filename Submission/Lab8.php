<html>
<body>

<form action="lab8.php" method="get">
Name: <input type="text" name="name"><br>

<input type="submit">
</form>

        My name is
        <?php
                echo $_GET["name"];
        ?><br>


</body>
</html>
