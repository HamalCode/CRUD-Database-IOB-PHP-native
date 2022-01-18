<?php
mysql_connect('localhost','root','');
mysql_select_db('db_iob');
//include"koneksaun.php";
$NIP=$_GET['NIP'];
$sql="DELETE from tb_dosente where NIP='$NIP'";
$query=mysql_query($sql);
header('location:dadus_dosente.php');
?>