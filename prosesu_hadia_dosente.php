<?php
include"koneksaun.php";

$NIP=$_POST['NIP'];
$Naran_Dosente=$_POST['Naran_dosente'];
$Sexo=$_POST['Sexo'];
$Status=$_POST['Status'];
$Studo_Ikus=$_POST['Studo_Ikus'];
$Municipio=$_POST['Municipio'];
$Hela_Fatin=$_POST['Hela_Fatin'];

$sql="UPDATE tb_dosente SET Naran_Dosente='$Naran_Dosente',Sexo='$Sexo',
Status='Status',Studa_Ikus='$Studa_Ikus',
Municipio='$Municipio',Hela_Fatin='$Hela_Fatin'

WHERE NIP='$NIP'";
$query=mysql_query($sql);
header("location:dadus_dosente.php");

?>
