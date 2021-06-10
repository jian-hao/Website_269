<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	$sql = 'SELECT * FROM `upload_data`';
	$rows = mysqli_query($con, $sql); 

	$ann = array(
				array('1.png', '黃國碩'),
				array('2.png', '劉  韋'),
				array('3.png', '林思維'),
				array('4.png', '孫振偉'),
				array('5.png', '鄭凱文'),
				array('6.png', '沈子豪'),
				array('7.png', '王  虹'),
				array('8.png', '龔成浩'),
				array('9.png', '白承洋'),
				array('10.png', '趙睿霖'));
	echo '<div class="divsplit5">';
	for ($i=0; $i<count($ann); $i++) {
		echo '<img src="images/announce/'.$ann[$i][0].'">';
	}
	echo '</div>';
?>
