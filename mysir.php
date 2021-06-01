<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	$sql = 'SELECT * FROM `commander`';
	$rows = mysqli_query($con, $sql); 
	foreach($rows as $key =>$row){
		//echo $key;
		//echo '<img src="images/'.$row['Name'].'.jpg">';
		//echo '<br>';

		/*
		foreach($row as $key2 => $value){
			echo $key2;			
			echo $value;
			echo '<br>';
		}*/
		echo '<br>';
	}
		
?>
<table class='table table-success table-Split6'>
	<tr>
		<td>第１任旅長<img src="images/brigadier1.jpg">少將王皮明</td>
		<td>第２任旅長<img src="images/brigadier2.jpg">少將王奈明</td>
		<td>第３任旅長<img src="images/brigadier3.jpg">少將王微明</td>
		<td>第４任旅長<img src="images/brigadier4.jpg">少將王毫明</td>
		<td>第５任旅長<img src="images/brigadier5.jpg">少將王一明</td>
		<td>第６任旅長<img src="images/brigadier6.jpg">少將王千明</td>
	</tr>
	<tr>
		<td>第７任旅長<img src="images/brigadier7.jpg">少將王麥明</td>
		<td>第８任旅長<img src="images/brigadier8.jpg">少將王吉明</td>
		<td>第９任旅長<img src="images/brigadier1.jpg">少將王兆明</td>
		<td>第10任旅長<img src="images/brigadier2.jpg">少將王帕明</td>
		<td>第11任旅長<img src="images/brigadier3.jpg">少將王艾明</td>
		<td>第12任旅長<img src="images/brigadier4.jpg">少將王皆明</td>
	</tr>
</table>