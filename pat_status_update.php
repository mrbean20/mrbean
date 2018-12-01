<?php
$sts=$_GET['sts'];
$user_id=$_GET['id'];
//$user_id=$_GET['user_id'];
include("connect.php");
if($sts=='1')
{
	$sql=mysql_query("UPDATE user_details SET user_status='0' where user_details_id='$user_id'");
	header("location:admin_patient.php");
}
else
{
	$sql=mysql_query("UPDATE user_details SET user_status='1' where user_details_id='$user_id'");
	header("location:admin_patient.php");
}
?>