<?php
include("connect.php");
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$qry="update specialization set field_name='$c_name' where specialization_id='$c_id'";
$res=mysql_query($qry);
header("location:admin_specialization.php");
?>