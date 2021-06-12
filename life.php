<?php
	$con = mysqli_connect("localhost", "jianhao", "pass574f5244", "armydb");
	$sql = 'SELECT * FROM `upload_data`';
	$rows = mysqli_query($con, $sql); 
?>

<div class="swiper-container main-slider loading">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo1.jpg)">
				<img src="images/Demo1.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Shaun Matthews</p>
				<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo2.jpg)">
				<img src="images/Demo2.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Alexis Berry</p>
				<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo3.jpg)">
				<img src="images/Demo3.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Billie	Pierce</p>
				<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo4.jpg)">
				<img src="images/Demo4.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Trevor	Copeland</p>
				<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo5.jpg)">
				<img src="images/Demo5.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Bernadette	Newman</p>
				<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
			</div>
		</div>
	</div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev swiper-button-white"></div>
	<div class="swiper-button-next swiper-button-white"></div>
</div>
<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
	<div class="swiper-wrapper" role="navigation">
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo1.jpg)">
				<img src="images/Demo1.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Shaun Matthews</p>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo2.jpg)">
				<img src="images/Demo2.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Alexis Berry</p>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo3.jpg)">
				<img src="images/Demo3.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Billie	Pierce</p>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo4.jpg)">
				<img src="images/Demo4.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Trevor	Copeland</p>
			</div>
		</div>
		<div class="swiper-slide">
			<figure class="slide-bgimg" style="background-image:url(images/Demo5.jpg)">
				<img src="images/Demo5.jpg" class="entity-img" />
			</figure>
			<div class="content">
				<p class="title">Bernadette	Newman</p>
			</div>
		</div>
	</div>
</div>