<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<h1>FORM in HTML</h1>
<form method="post">
    <label for="username">Enter your username: </label>
    <input type="text" name="username" placeholder="Enter your name"><br>
    <!-- <input type="button" value="Submit"><br> -->
    <label for="">Enter your favorite color : </label>
    <label for="red">Red</label>
    <input type="checkbox" name="red">
    <label for="pink">pink</label>
    <input type="checkbox" name="pink"><br>
    <!-- <input type="checkbox" name="cb">
    <input type="checkbox" name="cb">
    <input type="checkbox" name="cb"><br> -->

    <label for="">Enter your favorite color : </label>
    <!-- <label for="color">Red</label> -->
    <!-- <input type="reset" name="color"><br> -->
    <label for="color">Pink</label>
    <input type="radio" name="color" value="pink">
    <label for="color">Blue</label>
    <input type="radio" name="color">
    <label for="color">Yllow</label>
    <input type="radio" name="colrr">
    <label for="color">Orange</label>
    <input type="radio" name="color"><br>
    <input type="password" name="pass" id="" placeholder="Enter your password"><br>


    <select name="selet">
        <option name="india">+91</option>
        <option name="el">+31</option>
        <option name="atl">+61</option>
        <option name="us">+81</option>
    </select><br>
    <input type="date" name="" id=""><br>
    <input type="file" name="" id=""><br>
    <input type="week" name="" id=""><br>
    <input type="month" name="" id=""><br>
    <input type="range" name="" id=""><br>
    <!-- <input type="" value="Valie" name=""> -->
    <button type="submit">Submit</button><br>
</form>
<?php
// if(isset("post")){
$a=$_POST["username"];
$aa=$_POST["pass"];
$aaa=$_POST["color"];
// $aaaa=$_POST["india"];
// $aaaaa=$_POST["el"];
// $aaaaaa=$_POST["username"];
echo $a."<br>";
echo $aa."<br>";
echo $aaa."<br>";
// echo $aaaa;
// echo $aaaaa;
// echo $aaaaaa;
// insert into 'user'('a') values('$a');
// }
?>
</body>
</html>