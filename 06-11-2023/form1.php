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

<?php
include "../06-11-2023/db2.php"

$name=$_POST['name'];
$age=$_POST['age'];
$gen=$_POST['gender'];
// $class=$_POST['class'];

mysqli_query($conn," insert into `admin` (name,phone_no,class ) values ('$name','$age','$gen')");
?>


</body>
</html>