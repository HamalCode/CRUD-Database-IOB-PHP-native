<?php
	mysql_connect('localhost','root','');
	mysql_select_db('db_iob');
	

	$sql="select * from tb_materia";
	$query=mysql_query($sql);
	$no=1;
	$materia="Dadus da Materia ";
	while($rec=mysql_fetch_assoc($query)){
		$record[]=$rec;
	}
	
?>

		
		
		
		
			
			<?php echo $materia;?>
			<table border="1">
			<tr>
			<td width="10%">Numeru</th>
			<td width="10%">Id Materia</th>
			<td width="30%">Naran Materia</th>
			<td width="10%">SCS</th>
			<td width="25%">Tipo Materia</th>
			</tr>
				<?php 
				foreach ($record as $sip){	
				?>
			<tr>
				
				<td><?php echo $no++;?></td>
				<td><?php echo $sip ['materia'];?></td>
				<td><?php echo $sip ['id_materia'];?></td>
				<td><?php echo $sip ['scs'];?></td>
				<td><?php echo $sip ['typo_materia'];?></td>
				
			</tr>
			<?php } ?>
			</center>
			</table>


</html>
</body>