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
			<h3>Formulariu Simu Estudante Foun</h3>
			
			<table border="0">
			<form action="prosesu_aumenta.php" method="POST">
				<tr>
					<td>Nre</td>
					<td>:</td>
					<td><input type="text" name="nre"></td>
				</tr>
				<tr>
					<td>Naran</td>
					<td>:</td>
					<td><input type="text" name="naran"></td>
				</tr>
				<tr>
					<td>Sexo</td>
					<td>:</td>
					<td>
						<input type="radio" name="sexo" value="Mane">Mane
						<input type="radio" name="sexo" value="Feto">Feto
					</td>
				</tr>
				<tr>
					<td>Escola Anterior</td>
					<td>:</td>
					<td><input type="text" name="esc_ant"></td>
				</tr>
				<tr>
					<td>Muncipio</td>
					<td>:</td>
					<td>
						<select name="municipio" value="municipio">Municipio
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
					<td>Fakuldade</td>
					<td>:</td>
					<td>
						<select name="fakuldade" value="fakuldade">Fakuldade
							<option value="Ekonomia">Ekonomia</option>
							<option value="ICT">ICT</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Departemento</td>
					<td>:</td>
					<td>
						<select name="departemento" value="departemento">Departemento
							<option value="Akuntabiladade">Akuntabiladade</option>
							<option value="Teknik_Informatika">Teknik Informatika</option>
							<option value="Gestao_Informatika">Gestao Informatika</option>
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