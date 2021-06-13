<?php

	if(isset($_GET['page']) AND !empty($_GET['page'])){
	    $page = $_GET['page'];
	}else{
	    $page = "home";
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="content-language" content="zh-tw" />
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/life.css">
		<script type="text/javascript" async="" src="js/life.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/hao.css">

		<link rel="icon" href="images/favicon.ico">

		<title>陸軍機步第二六九旅</title>
	</head>
	<body>
		<div class="container-hao">
			<div class="row">
				<div class="col-12">
					<?php include('_header.php'); ?>
				</div>
				<div class="col-3">
					<?php include('_nav.php'); ?>
				</div>
				<div class="col-9">
					<?php 
						switch($page){  
							case "home";
								include('home.php');
								break;
							case "mysir";
								include('mysir.php');
								break;
							case "hiscom";
								include('hiscom.php');
								break;
							case "history";
								include('history.php');
								break;
							case "life";
								include('life.php');
								break;
							case "announce";
								include('announce.php');
								break;
							case "plan";
								include('plan.php');
								break;
							case "WCT";
								include('workControlTable.php');
								break;
							case "file";
								include('file.php');
								break;
							case "link";
								include('link.php');
								break;
						}
					?>
				</div>
				<div class="col-12">
					<?php include('_footer.php'); ?>
				</div>
			</div>
		</div>
	</body>
</html>