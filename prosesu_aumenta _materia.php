<?php
	include"koneksaun.php";
	
	$departemento=$_POST['id_materia'];
	$fakuldade=$_POST['materia'];
	$municipio=$_POST['scs'];
	$esc_ant=$_POST['typo_materia'];
	
	$sql="INSERT INTO tb_materia
	(id_materia,materia,scs,typo_materia) values 
	('$id_materia','$materia','$scs','$typo_materia')";
	$query=mysql_query($sql);
	header("location:form_materia.php");
?>