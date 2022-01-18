<html>
	<head>
		<title>web iob</title>
	
<link href="modelu.css" rel="stylesheet" type="text/css">
	
	
	</head>
	<body>
	<div id="menu1">
		<ul class="menu">
						<a href="home.php"><li>Home</li></a>
			<li><a href="#">Profile</a>
				<ul class="submenu">
					<a href="#"><li>Visaun</li></a>
					<a href="#"><li>Misaun</li></a>
					<a href="#"><li>Objetivu</li></a>
				</ul>
			</li>
			<li><a href="#">Materia</a>
				<ul class="submenu">
					<a href="#"><li>Web Design</li></a>
					<a href="#"><li>Networking</li></a>
					<a href="#"><li>Database</li></a>
				</ul>
			</li>
		</ul>
	</div>
	<br>
	<div id="frame">
	<div id="header"><img src="foto.jpg"></img></div>
	<div id="menu">
		<ul class="menu">
						<a href="home.php"><li>Home</li></a>
			<li><a href="#">Profile</a>
				<ul class="submenu">
					<a href="#"><li>Visaun</li></a>
					<a href="#"><li>Misaun</li></a>
					<a href="#"><li>Objetivu</li></a>
				</ul>
			</li>
			<li><a href="#">Materia</a>
				<ul class="submenu">
					<a href="#"><li>Web Design</li></a>
					<a href="#"><li>Networking</li></a>
					<a href="#"><li>Database</li></a>
				</ul>
			</li>
		</ul>
	</div>
	<div id="isi">
		<div id="karuk">
			<br>
			<center>
			<div id="menukaruk">
				<div class="a"><a href="home.php">Baranda</a></div>
				<div class="a"><a href="form_estudante.php">Form Estudante</a></div>
				<div class="a"><a href="form_dosente.php">Form Dosente</a></div>
				<div class="a"><a href="dadus_estudante.php">Dadus Estudante</a></div>
				<div class="a"><a href="dadus_dosente.php">Dadus Dosente</a></div>
				<div class="a"><a href="form_materia.php">Dadus Materia</a></div>
				<div class="a"><a href="login.php">Login</a></div>
			</div>
			</center>
		</div>
			
			<div id="konten">
			<center>
			<h3>Formulariu Dosente</h3>
			
			<table border="0">
			<form action="" method="POST">
				<tr>
					<td>NIP</td>
					<td>:</td>
					<td><input type="text" name="NIP"></td>
				</tr>
				<tr>
					<td>Naran Dosente</td>
					<td>:</td>
					<td><input type="text" name="Naran_Dosente"></td>
				</tr>
				<tr>
					<td>Sexo</td>
					<td>:</td>
					<td>
						<input type="radio" name="Sexo" value="Mane">Mane
						<input type="radio" name="Sexo" value="Feto">Feto
					</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>:</td>
					<td>
						<select name="Status" value="Status">Studo_Ikus
							<option value="Permanente">Permanente</option>
							<option value="Kontratado">Kontratado</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Municipio</td>
					<td>:</td>
					<td>
						<select name="Municipio" value="Municipio">Municipio
							<option value="Aileu">Aileu</option>
							<option value="Ainaro">Ainaro</option>
							<option value="Baucau">Baucau</option>
							<option value="Bobonaro">Bobonaro</option>
							<option value="Covalima">Covalima</option>
							<option value="Ermera">Ermera</option>
							<option value="Manufahi">Manufahi</option>
							<option value="Manatuto">Manatuto</option>
							<option value="Luquica">Liquica</option>
							<option value="Dili">Dili</option>
							<option value="Oecusse">Oecusse</option>
							<option value="Lautem">Lautem</option>
							<option value="Viqueque">Viqueque</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hela Fatin</td>
					<td>:</td>
					<td><input type="text" name="Hela_Fatin"></td>
				</tr>
				<tr>
					<td>Studo Ikus</td>
					<td>:</td>
					<td>
						<select name="Studo_Ikus" value="Studo_Ikus">Studo_Ikus
							<option value="Lisensiatura">Lisensiatura</option>
							<option value="Mastreado">Mastreado</option>
						</select>
					</td>
				</tr>
				
				
				<tr>
					<td><input type="submit" name="submit" value="Rai" Onclick="alert('Rai dadus..??')";>
						<input type="reset" name="reset" value="Cansela">
					</td>
				</tr>
				</form>
			</table>
			</center>
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
	
}
?>
			
			
			
	
			
			
			</div>
			<div id="los">
			<br>
			<div id="b">
			<center>
			<div class="a"><a href="#">Form Info</a></div>
			<div class="a"><a href="#">Form Info</a></div>
			<div class="a"><a href="#">Form Info</a></div>
			<div class="a"><a href="#">Form Info</a></div>
			<div class="a"><a href="#">Form Info</a></div>
			<div class="a"><a href="#">Form Info</a></div>
			</center>
			</div>
			</div>
		
		</div>
		<div id="footer"></div>
	
	</div>
	</body>
</html>