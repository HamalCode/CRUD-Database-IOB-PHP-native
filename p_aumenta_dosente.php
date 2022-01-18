<?php
	mysql_connect('localhost','root','')or die(mysql_error());
	mysql_select_db('db_iob') or die(mysql_error());
	if (isset($_POST['submit'])){
		$NIP=$_POST['NIP'];
		$Naran_Dosente=$_POST['Naran_Dosente'];
		$Sexo=$_POST['Sexo'];
		$Status=$_POST['Status'];
		$Municipio=$_POST['Municipio'];
		$Hela_Fatin=$_POST['Hela_Fatin'];
		$Studo_Ikus=$_POST['Studo_Ikus'];
		
	$sql="INSERT INTO tb_dosente set NIP='$NIP',
	Naran_Dosente='$Naran_Dosente',Sexo='$Sexo',
	Status='$Status',Municipio='$Municipio',
	Hela_Fatin='$Hela_Fatin',Studo_Ikus='$Studo_Ikus'"; 
	$query=mysql_query($sql)or die(mysql_error());;
	
}else{
    echo "File Falla Upload";
  
  }

?>