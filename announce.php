<?php
/*
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	$sql = 'SELECT * FROM `upload_data`';
	$rows = mysqli_query($con, $sql); 
*/


	if(isset($_GET['subpage']) AND !empty($_GET['subpage'])){
	    $subpage = $_GET['subpage'];
	}else{
	    $subpage = "person";
	}

	$ann_name = array(
		array('person', '人事通報'),
		array('war', '作戰通報'),
		array('training', '訓練通報'),
		array('logistics', '後勤通報'),
		array('transportation', '運輸通報'),
		array('work_safety', '工安通報'),
		array('political_war', '政戰通報'),
		array('Inspector Notification', '督察通報'),
		array('military_medical', '軍醫通報'),
		array('information_security', '資安通報'));

	$ann = array(
		'person'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6'),
			array('2021-01-07', 'Data7'),
			array('2021-01-08', 'Data8'),
			array('2021-01-09', 'Data9'),
			array('2021-01-10', 'Data10'),
			array('2021-01-11', 'Data11'),
			array('2021-01-12', 'Data12')
		),
		'war'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6'),
			array('2021-01-07', 'Data7'),
			array('2021-01-08', 'Data8'),
			array('2021-01-09', 'Data9'),
			array('2021-01-10', 'Data10'),
			array('2021-01-11', 'Data11')
		),
		'training'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6'),
			array('2021-01-07', 'Data7'),
			array('2021-01-08', 'Data8'),
			array('2021-01-09', 'Data9'),
			array('2021-01-10', 'Data10')
		),
		'logistics'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6'),
			array('2021-01-07', 'Data7'),
			array('2021-01-08', 'Data8'),
			array('2021-01-09', 'Data9')
		),
		'transportation'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6'),
			array('2021-01-07', 'Data7'),
			array('2021-01-08', 'Data8')
		),
		'work_safety'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6'),
			array('2021-01-07', 'Data7')
		),
		'political_war'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5'),
			array('2021-01-06', 'Data6')
		),
		'Inspector'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4'),
			array('2021-01-05', 'Data5')
		),
		'military_medical'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3'),
			array('2021-01-04', 'Data4')
		),
		'information_security'=>array(
			array('2021-01-01', 'Data1'),
			array('2021-01-02', 'Data2'),
			array('2021-01-03', 'Data3')
		));
	

	for ($i=0; $i<count($ann_name); $i++) {		
		echo '<a href='.$_SERVER['PHP_SELF'].'?page=announce&subpage='.$ann_name[$i][0].'>';
		if($ann_name[$i][0]==$subpage){ echo '<div class="divsplit5 act">'; }
		else{ echo '<div class="divsplit5">'; }	
		echo $ann_name[$i][1];
		echo '</div>';
		echo '</a>';
	}

	echo '<table class="table table-striped" style="width: 100%";>';

	for ($i=0; $i<count($ann[$subpage]); $i++) {
		echo '<tr>';
		echo '<td style="width: 50%;">'.$i.'</td>';
		echo '<td style="width: 80%;">'.$ann[$subpage][$i][0].'</td>';
		echo '<td style="width: 15%;">'.$ann[$subpage][$i][1].'</td>';
		echo '</tr>';
	}

	echo '</table>';
?>

