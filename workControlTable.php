<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	$sql = 'SELECT * FROM `upload_data`';
	$rows = mysqli_query($con, $sql); 
?>

<?php

	if(isset($_GET['page']) AND !empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = "home";
	}

	if(isset($_GET['year']) AND !empty($_GET['year'])){
		$y = $_GET['year'];
	}else{
		$y = date("Y");
	}
	if(isset($_GET['month']) AND !empty($_GET['month'])){
		$m = $_GET['month'];
	}else{
		$m = date("m");
	}

?>

<div class="col-9">
	<?php echo MakeCalendarModel($y, $m) ?>
</div>

<?php
	function MakeCalendarModel($year="", $month=""){
		//抓取本年年度
		//if(empty($year))$year=date("Y");
		//抓取本月月份
		//if(empty($month))$month=date("m");
		//今天日期
		$today = date("Y-m-d");
		//取得本月有幾天
		$day_num = date("t", mktime(0, 0, 0, $month, 1, $year));
		//取得本月第一天是星期幾
		$first_w = date("w", mktime(0, 0, 0, $month, 1, $year));

		$rows = ($first_w + $day_num)/7;

		$prev_year = date("Y", mktime(0, 0, 0, $month-1, 1, $year));
		$prev_month = date("m", mktime(0, 0, 0, $month-1, 1, $year));
		$next_year = date("Y", mktime(0, 0, 0, $month+1, 1, $year));
		$next_month = date("m", mktime(0, 0, 0, $month+1, 1, $year));

		$calendar_title = "
			<div class='calendar'>
				<div class='col-1' id='calendar-prev'>
					<a href='{$_SERVER["PHP_SELF"]}?page=WCT&year={$prev_year}&month={$prev_month}'>
						<img src='images/calendarPrev.png'>
					</a>
				</div>
				<div class='col-10' id='calendar-title'>
					<h1>{$year}年{$month}月</h1>
				</div>
				<div class='col-1' id='calendar-next'>
					<a href='{$_SERVER["PHP_SELF"]}?page=WCT&year={$next_year}&month={$next_month}'>
						<img src='images/calendarNext.png'>
					</a>
				</div>
		";
		$calendar = "
			$calendar_title
			<table class='calendar_day_area'>
				<tr>
					<td>日</td>
					<td>一</td>
					<td>二</td>
					<td>三</td>
					<td>四</td>
					<td>五</td>
					<td>六</td>
				</tr>

			
		";
		$show_day = "";
		for($i=0; $i<$rows; $i++){
			$calendar .= "<tr>";
			for($j=0; $j<7; $j++){
				if($i==0 AND $j==$first_w){
					$show_day = "1";
				}elseif ($show_day>$day_num) {
					$show_day="";
				}elseif (!empty($show_day)) {
					$show_day++;
				}
				$calendar .= "
				<td class='green'>
					<a href='file/wct/{$year}{$month}{$show_day}.docx'>
						$show_day
					</a>
				</td>
				";
			}

			$calendar .= "</tr>";
		}

		$calendar .= "</table>";
		$calendar .= "</div>";
		return $calendar;
	}
	/*<a href='{$_SERVER["HTTP_HOST"]}{$year}{$month}{$j}.docx'>*/
?>
