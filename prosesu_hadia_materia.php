<?php
include"koneksaun.php";

$nre=$_POST['id_materia'];
$naran=$_POST['materia'];
$sexo=$_POST['scs'];
$esc_ant=$_POST['typo_materia'];

$sql="UPDATE tb_materia SET id_materia='$id_materia',materia='$materia',
scs='$scs',typo_materia='$typo_materia'

WHERE id_materia='$id_materia'";
$query=mysql_query($sql);
header("location:form_materia.php");
?>