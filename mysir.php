<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	

	$sql = 'SELECT * FROM `muryau`';
	$rows = mysqli_query($con, $sql); 

	echo '<table class="table table-Split4 table-Img">';
	echo '<tr>';
	foreach($rows as $key =>$row){
		echo '<td>'.$row['Position'].'<img src="images/'.$row['Position'].'.jpg">'.$row['Class'].$row['Name'].'</td>';
	}
	echo '</tr>';
	echo '</table>';





	$sql = 'SELECT * FROM `commander`';
	$rows = mysqli_query($con, $sql); 

	echo '<table class="table table-Split6 table-Img">';
	foreach($rows as $key =>$row){
		if ($key % 6 == 0){
			echo '<tr>';
		}
		echo '<td>第'.($key+1).'任旅長<img src="images/'.$row['Name'].'.jpg">'.$row['Class'].$row['Name'].'</td>';
		if (($key+1) % 6 == 0){
			echo '</tr>';
		}
	}
	echo '</table>';





?>



