<?php 
include("connect.php");
$special=$_POST['s_name'];
$qry=mysql_query("insert into specialization(field_name,field_status) values('$special','1')");
header("location:admin_specialization.php");
?>