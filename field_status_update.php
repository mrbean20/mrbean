<?php
$sts=$_GET['sts'];
$c_id=$_GET['c_id'];
include("connect.php");
if($sts=='1')
{
	$sql=mysql_query("UPDATE specialization SET field_status='0' where specialization_id='$c_id'");
	header("location:admin_specialization.php");
}
else
{
	$sql=mysql_query("UPDATE specialization SET field_status='1' where specialization_id='$c_id'");
	header("location:admin_specialization.php");
}
?>