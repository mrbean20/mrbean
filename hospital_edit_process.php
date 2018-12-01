<?php
include("connect.php");
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$qry="update user_details set user_full_name='$c_name' where user_details_id='$c_id'";
$res=mysql_query($qry);
header("location:admin_hospital.php");
?>