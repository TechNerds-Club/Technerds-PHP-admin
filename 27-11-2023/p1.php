<?php
session_start();
if($_SESSION['a1']=="")
{
header('Location:p.php');

}
echo $_SESSION['a1'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2nd page</h1>
</body>
</html>