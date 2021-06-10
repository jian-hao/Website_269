<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	
	echo '<div class="rowtitle">旅長</div>';
	echo '<table class="table table-Split4">';
	$sql = 'SELECT * FROM `commander` ORDER BY `No` DESC limit 0, 1;';
	$rows = mysqli_query($con, $sql); 	
	foreach($rows as $key =>$row){
		echo '<tr class="curr_cmd">';
		echo '<td colspan="4"><img src="images/'.$row['Name'].'.jpg"></br><h3><b>'.$row['Class'].'  '.$row['Name'].'</b></h3></td>';
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







	$sql = 'SELECT * FROM `commander` ORDER BY `No` DESC limit 1, 100;';
	$rows = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($rows);
	// mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
	if ($num>0) {
		// 取得大於0代表有資料
		// while迴圈會根據資料數量，決定跑的次數
		// mysqli_fetch_assoc方法可取得一筆值
		while ($row = mysqli_fetch_assoc($rows)) {
			// 每跑一次迴圈就抓一筆值，最後放進data陣列中
			$datas[] = $row;
		}
	}
	// 釋放資料庫查到的記憶體
	mysqli_free_result($rows);


	echo '<div class="rowtitle">歷任旅長</div>';
	echo '<table class="table table-Split2 table-Img">';
	/*

	for ($i=0; $i<$num; $i++) {
		if ($i % 2 == 0){
			echo '<tr>';
		}
		echo '<td>第'.($i+1).'任旅長<img src="images/'.$datas[$num-$i-1]['Name'].'.jpg">'.$datas[$num-$i-1]['Class'].'ＡＢＣ</td>';
		if (($i+1) % 2 == 0){
			echo '</tr>';
		}
	}
	echo '</table>';*/


	for ( $i=0 ; $i<ceil($num/2) ; $i++ ) {		
		echo '<div class="wrapper">';
	    echo '<div class="cols">';
		for ( $j=0 ; $j<2 ; $j++ ) {
			echo '<div class="col" ontouchstart="this.classList.toggle(\'hover\');">';
				echo '<div class="container" style="padding:0px">';
					echo '<div class="front" style="background-image: url(images/'.$datas[$num-$i*2-$j-1]['Name'].'.jpg)">';
						echo '<div class="inner"> <span></span></div>';
					echo '</div>';
					echo '<div class="back">';
						echo '<div class="inner">';
							echo '<p>'.'陸軍官校45期裝甲兵科畢業。為人誠懇務實，帶兵要求嚴格。對於治軍有獨特的抱負和理念，並閱讀了包括聖經在內的大量書籍，為日後的深造發展預做準備。2001年1月1日，晉升陸軍少將。2006年7月1日，晉升陸軍中將。2012年9月1日，晉升陸軍二級上將。2016年12月1日，升任參謀總長，於2017年4月28日屆齡退伍，正式結束軍旅生涯。'.'</p>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
	}



?>



