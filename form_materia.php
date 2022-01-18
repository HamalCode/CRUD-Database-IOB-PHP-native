<?php
	include"koneksaun.php";
	$sql="select * from tb_materia";
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
			<h1>Dadus Materia</h1>
			
			
			
			
			<table border="1">
			<tr>
			<td width="10%">Numeru</th>
			<td width="10%">Id Materia</th>
			<td width="30%">Naran Materia</th>
			<td width="10%">SCS</th>
			<td width="25%">Tipo Materia</th>
			</tr>
				<?php 
				foreach ($record as $ab){	
				?>
			<tr>
				
				<td><?php echo $numeru++;?></td>
				<td><?php echo $ab ['id_materia'];?></td>
				<td><?php echo $ab ['materia'];?></td>
				<td><?php echo $ab ['scs'];?></td>
				<td><?php echo $ab ['typo_materia'];?></td>
				
			</tr>
			<?php } ?>
			
			
			
			
			
			
			</center>
			</table>
			
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