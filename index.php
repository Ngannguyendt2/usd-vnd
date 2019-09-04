<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Change Money</h1>
<form method="post" action="index.php">
    <label>USD:</label>
    <input type="text" name="usd"><br>
    <input type="submit" value="Change">
</form>
<?php
$rate = 23000;
$usd = $_POST['usd'];
$vnd = $usd * $rate;
echo $vnd;
?>
</body>
</html>
