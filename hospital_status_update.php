<?php
$sts=$_GET['sts'];
$c_id=$_GET['c_id'];
include("connect.php");
if($sts=='1')
{
	$sql=mysql_query("UPDATE user_details SET user_status='0' where user_details_id='$c_id'");
	header("location:admin_hospital.php");
}
else
{
	$sql=mysql_query("UPDATE user_details SET user_status='1' where user_details_id='$c_id'");
	header("location:admin_hospital.php");
}
?>