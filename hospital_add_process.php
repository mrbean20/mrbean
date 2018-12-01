<?php 
include("connect.php");
$name=$_POST['s_name'];
$qry=mysql_query("insert into hospital(field_name,field_status) values('$name','1')");
header("location:admin_hospital.php");
?>