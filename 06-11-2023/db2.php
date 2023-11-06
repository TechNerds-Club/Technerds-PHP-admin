<?php
$sn="localhost";
$un="root";
$pass="";
$dn="student";

$conn=mysqli_connect($sn,$un,$pass,$dn);
if($conn){
    echo "SUCCESS";

}
else{
    echo "UNSUCCESS";
}

mysqli_query($conn," insert into `admin` (name,phone_no,class ) values('sbc','1234567','bca')");
?>