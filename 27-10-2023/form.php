<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
<h1>FORM in HTML</h1>
<form method="post">
    <label for="username">Enter your username: </label>
    <input type="text" name="username" placeholder="Enter your name"><br>
    <label for="">Enter your favorite color : </label>
    <label for="red">Red</label>
    <input type="checkbox" name="red">
    <label for="pink">pink</label>
    <input type="checkbox" name="pink"><br>

    <label for="">Enter your favorite color : </label>
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
    <button type="submit">Submit</button><br>
</form>
<php
$a=$_POST["username"];
$aa=$_POST["pass"];
$aaa=$_POST["color"];
echo $a."<br>";
echo $aa."<br>";
echo $aaa."<br>";

?>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Input form</h1>

<br><br>
<form method="post">
    <input type="text" name="name" placeholder="Enter your name"><br>
    <input type="text" name="age" placeholder="Enter your age"><br>
    <label for="gender">Select your gender:</label>

    <label>Male</label><input type="radio" name="gender" value="male">
    <label>FeMale</label><input type="radio" name="gender" value="female">
    <label>Others</label><input type="radio" name="gender" value="others"><br>
    <label for="class">Select your class</label>
    <select name="class" placeholder="Select">
        <option value="1bca">1st bca</option>
        <option value="2bca">2nd bca</option>
        <option value="3bca">3rd bca</option>
    </select><br>
    <input type="submit">
</form>

<!-- ***********PHP code********** -->
<?php
include "../02-11-2023/db.php";
$name=$_POST['name'];
$age=$_POST['age'];
$gen=$_POST['gender'];
$class=$_POST['class'];

mysqli_query($conn,"insert into `user` (NAME,age,gender,class) values ('$name','$age','$gen','$class')");
?>
</body>
</html>