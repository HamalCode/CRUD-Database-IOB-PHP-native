<?php
session_start();
require"koneksaun.php";
	if($_POST['submit']=="login"){
	$user=$_POST['user'];
	$password=$_POST["password"];

$sql="SELECT * FROM tb_admin WHERE user='$user' AND password='$password'";
$query=mysql_query($sql);
	$record=mysql_fetch_assoc($query){	
	$hasil[]=$record;
}
if(!empty($hasil)){
				foreach($hasil as $hamosu){
				$_SESSION["user"]=$hamosu['user'];
				$_SESSION["level"]=$hamosu['level'];
				}
				header("location:home.php");
				}else{
				header("location:login.php");
				}

}

?>