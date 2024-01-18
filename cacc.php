<?php
require "connection.php";
$no=$_POST["no"];
$name=$_POST["name"];
$date=$_POST["date"];
$amo=$_POST["amount"];
$sql="insert into account values('$no','$name','$date','$amo')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('Account Created successful........');</script>";
    echo "<script>window.location='cacc.html';</script>";
}
else{
    echo "<script>alert('something went we wrong');</script>";
    exit;
} 
// header("location:cacc.html");
mysqli_close($conn);
?>