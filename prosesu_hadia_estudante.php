<?php
include"koneksaun.php";

$nre=$_POST['nre'];
$naran=$_POST['naran'];
$sexo=$_POST['sexo'];
$esc_ant=$_POST['esc_ant'];
$municipio=$_POST['municipio'];
$fakuldade=$_POST['fakuldade'];
$departemento=$_POST['departemento'];

$sql="UPDATE tb_estudante SET naran='$naran',sexo='$sexo',
esc_ant='$esc_ant',municipio='$municipio',
fakuldade='$fakuldade',departemento='$departemento'

WHERE nre='$nre'";
$query=mysql_query($sql);
header("location:dadus_estudante.php");
?>
