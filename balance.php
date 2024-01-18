<?php
require "connection.php";
if(isset($_POST['submit']))
{
$no=$_POST["no"];
$sql="select acc_no,init_amount from account ";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
    $acc_no=$row['acc_no'];
    $am=$row['init_amount'];
    
    if($no==$acc_no){
    echo "Your Account number is:" .$acc_no."<br>";
    echo "Your Account Balance is:" .$am;
    }
    // else{
    //     echo "<script>alert(' Wrong account number');</script>";
    // echo "<script>window.location='balance.html'</script>";
    // }
}
}
}