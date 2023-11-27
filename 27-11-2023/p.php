<?php
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["text1"];
$_SESSION["a1"]=$a; 
header("Location:p1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1st page</h1>
    <br><br><br>
    <form method="post">
    <input type="text" name="text1" placeholder="Enter the name:"><br><br><br>
    <button type="submit" name="submit">Submit</button><br>

    </form>
    <!-- <a href="p1.php">next page</a> -->
    
</body>
</html>
