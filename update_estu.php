<?php
include"koneksaun.php";
$nre=$_GET['nre'];
$sql="SELECT * FROM tb_estudante WHERE nre='$nre'";
$query=mysql_query($sql);
?>