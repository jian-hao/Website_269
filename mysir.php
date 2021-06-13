<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	
	echo '<div class="rowtitle">旅長</div>';
	echo '<table class="table table-Split4">';
	$sql = 'SELECT * FROM `commander` ORDER BY `No` DESC limit 0, 1;';
	$rows = mysqli_query($con, $sql); 	
	foreach($rows as $key =>$row){
		echo '<tr class="curr_cmd">';
		echo '<td colspan="4"><img src="images/'.$row['Name'].'.png"></br><h3><b>'.$row['Class'].'  '.$row['Name'].'</b></h3></td>';
		echo '</tr>';
	}
	$sql = 'SELECT * FROM `muryau`';
	$rows = mysqli_query($con, $sql); 
	echo '<tr class="table-Img">';
	foreach($rows as $key =>$row){
		echo '<td>'.$row['Position'].'<img src="images/'.$row['Position'].'.jpg">'.$row['Class'].' '.$row['Name'].'</td>';
	}
	echo '</tr>';
	echo '</table>';

?>



