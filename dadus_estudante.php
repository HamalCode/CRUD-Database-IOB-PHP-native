<?php
	include"koneksaun.php";
	$sql="select * from tb_estudante";
	$query=mysql_query($sql);
	//$numeru hansan variabel ida
	$numeru=1;
	$naran="Joao da Costa";
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
			
			<hr>
			
			<?php echo "Dadus Estudante";?>
			
			<table border="1">
			
				<tr>
					<th>Asaun</th>
					<th>Asaun</th>
					<th>Nu</th>
					<th>Nre</th>
					<th>Naran</th>
					<th>Sexo</th>
					<th>Escola Anterior</th>
					<th>Municipio</th>
					<th>Fakuldade</th>
					<th>Depadrtemento</th>
				</tr>
				<?php 
				foreach ($record as $ab){	
				?>
			<tr>
				<td><a href="hamoos_estudante.php?nre=<?php echo $ab ['nre']?>" onclick="alert ('Hakarak Hamoos Dadus Ne..??');">Hamoos</a></td>
				<td><a href="hadia_estudante.php?nre=<?php echo $ab ['nre']?>" onclick="alert ('Hakarak Hadia Dadus Ne..??');">Hadia</a></td>
				<td><?php echo $numeru++;?></td>
				<td><?php echo $ab ['nre'];?></td>
				<td><?php echo $ab ['naran'];?></td>
				<td><?php echo $ab ['sexo'];?></td>
				<td><?php echo $ab ['esc_ant'];?></td>
				<td><?php echo $ab ['municipio'];?></td>
				<td><?php echo $ab ['fakuldade'];?></td>
				<td><?php echo $ab ['departemento'];?></td>
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