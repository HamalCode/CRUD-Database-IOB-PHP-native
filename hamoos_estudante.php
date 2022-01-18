<?php
mysql_connect('localhost','root','');
mysql_select_db('db_iob');
//include"koneksaun.php";


$nre=$_GET['nre'];
$sql="DELETE from tb_estudante where nre='$nre'";
$query=mysql_query($sql);
header('location:dadus_estudante.php');
?>