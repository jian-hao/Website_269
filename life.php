<?php
	$photo = array(
		array('烘焙社', '', '1.jpg'),
		array('烘焙社', '', '2.jpg'),
		array('烘焙社', '', '3.jpg'),
		array('烘焙社', '', '4.jpg')
	);


?>

<div class="swiper-container main-slider loading">
	<div class="swiper-wrapper">
		<?PHP
			for ($i=0; $i<count($photo); $i++) {
				
				echo '<div class="swiper-slide">';
					echo '<figure class="slide-bgimg" style="background-image:url(images/life/'.$photo[$i][2].')">';
						echo '<img src="images/life/'.$photo[$i][2].'" class="entity-img" />';
					echo '</figure>';
					echo '<div class="content">';
						echo '<p class="title">'.$photo[$i][0].'</p>';
						echo '<span class="caption">'.$photo[$i][1].'</span>';
					echo '</div>';
				echo '</div>';
			}
		?>

	</div>
	<div class="swiper-button-prev swiper-button-white"></div>
	<div class="swiper-button-next swiper-button-white"></div>
</div>

<div class="swiper-container nav-slider loading">
	<div class="swiper-wrapper" role="navigation">
		<?PHP
			for ($i=0; $i<count($photo); $i++) {
				$bug_i = $i+4;
				if ($bug_i>=count($photo)){$bug_i=$bug_i-count($photo);}
				echo '<div class="swiper-slide">';
					echo '<figure class="slide-bgimg" style="background-image:url(images/life/'.$photo[$bug_i][2].')">';
						echo '<img src="images/life/'.$photo[$bug_i][2].'" class="entity-img" />';
					echo '</figure>';
					echo '<div class="content">';
						echo '<p class="title">'.$photo[$bug_i][0].'</p>';
					echo '</div>';
				echo '</div>';
			}
		?>
	</div>
</div>
