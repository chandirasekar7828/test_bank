<?php
require "connection.php";
if(isset($_POST['submit']))
{
$no=$_POST["no"];
$amount=$_POST["amount"];
$sql="select acc_no,init_amount from account ";
$result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
    $acc_no=$row['acc_no'];
    $am=$row['init_amount'];
if($no==$acc_no ){
    $total=$am+$amount;
    mysqli_query($conn,"update account set init_amount='$total' where acc_no='$no'");
    echo "<script>alert(' $acc_no The account successful widthdraw amount for $amount');</script>";
    echo "<script>window.location='deposite.html'</script>";
}
else{
    echo "<script>alert(' Wrong account number');</script>";
    echo "<script>window.location='deposite.html'</script>";
}
}
}
mysqli_close($conn);
?>