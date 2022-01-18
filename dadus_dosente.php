<?php
	include"koneksaun.php";
	$sql="select * from tb_dosente";
	$query=mysql_query($sql);
	$Nu=1;
	while($rec=mysql_fetch_assoc($query)){
		$record[]=$rec;
	}
?>
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
			<h3>Dadus Dosente</h3>
			<table border="1">
				<tr>
					<th>Asaun</th>
					<th>Asaun</th>
					<th>Nu</th>
					<th>NIP</th>
					<th>Naran Dosente</th>
					<th>Sexo</th>
					<th>Status</th>
					<th>Municipio</th>
					<th>Hela Fatin</th>
					<td>Studo_Ikus</th>
					<th>Foto</th>
				</tr>				
				<?php
					foreach($record as $hamosu){
				?>
				<tr>
				<td><a href="hamoos_dosente.php?NIP=<?php echo $hamosu ['NIP']?>" onclick="alert ('Hakarak Hamoos Dadus Ne..??');">Hamoos</a></td>
				<td><a href="hadia.php?NIP=<?php echo $hamosu ['NIP']?>" onclick="alert ('Hakarak Hadia Dadus Ne..??');">Hadia</a></td>
					<td><?php echo $Nu++;?></td>
					<td><?php echo $hamosu ['NIP']?></td>
					<td><?php echo $hamosu ['Naran_Dosente']?></td>
					<td><?php echo $hamosu ['Sexo']?></td>
					<td><?php echo $hamosu ['Status']?></td>
					<td><?php echo $hamosu ['Municipio']?></td>
					<td><?php echo $hamosu ['Hela_Fatin']?></td>
					<td><?php echo $hamosu ['Studo_Ikus']?></td>
					<td><img src="images/<?php echo $hamosu ['Foto'];?>"></td>
				
				</tr>
			
			<?php } ?>
			</table>
			
			</center>
			</div>
			
		
		</div>
		<div id="footer"></div>
	
	</div>
	</body>
</html>