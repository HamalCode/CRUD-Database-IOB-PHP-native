<?php
	include"koneksaun.php";
	
	$departemento=$_POST['departemento'];
	$fakuldade=$_POST['fakuldade'];
	$municipio=$_POST['municipio'];
	$esc_ant=$_POST['esc_ant'];
	$sexo=$_POST['sexo'];
	$naran=$_POST['naran'];
	$nre=$_POST['nre'];

	$sql="INSERT INTO tb_estudante
	(nre,naran,sexo,esc_ant,municipio,fakuldade,departemento) values 
	('$nre','$naran','$sexo','$esc_ant','$municipio','$fakuldade','$departemento')";
	$query=mysql_query($sql);
	header("location:dadus_estudante.php");
?>