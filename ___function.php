<?php
	function MakeCalendarModel($day_array=$array(), $year="", $month=""){
		//抓取本年年度
		if(empty($year))$year=date("Y");
		//抓取本月月份
		if(empty($month))$month=date("m");
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
			<div class=''>
				<a href='{$_SERCER['PHP_SELF']}?$year={$prev_year}&$month={$prev_month}'>
					<img src='images/calendarPrev.png'>
				</a>
				{$year}年{$month}月
				<a href='{$_SERCER['PHP_SELF']}?$year={$next_year}&$month={$next_month}'>
					<img src='images/calendarNext.png'>
				</a>
			</div>
		";
		$main = 
		return $main;
		/*
		$calendar = "
			$calendar_title
			<table class=''>
				<tr>
					<td class=''>日</td>
					<td class=''>一</td>
					<td class=''>二</td>
					<td class=''>三</td>
					<td class=''>四</td>
					<td class=''>五</td>
					<td class=''>六</td>
				</tr>
				for($i=0; $i<)
			</table>
		";*/
















	}