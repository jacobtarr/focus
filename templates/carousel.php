<?php

    // ACF Variables
    $nav_menu_item = get_field( 'nav_menu_item' );


?>

	<!-- <div id="home-carousel" class="home-carousel carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#home-carousel" data-slide-to="1"></li>
			<li data-target="#home-carousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/home-banner-1.png' ?>" alt="First slide">
				<div class="carousel-caption">
					<div class="carousel-caption__title">
						Design<br>Excellence
					</div>
					<div class="carousel-caption__secondary-content">
						<em class="carousel-caption__desc hidden-sm-down">Let our expert team of architechtural designers turn your great idea into a better reality.</em>
						<a href="" class="btn btn-focus">Learn More&nbsp;&nbsp;&gt;</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/home-banner-1.png' ?>" alt="First slide">
				<div class="carousel-caption">
					<div class="carousel-caption__title">
						Design<br>Excellence
					</div>
					<div class="carousel-caption__secondary-content">
						<em class="carousel-caption__desc hidden-sm-down">Let our expert team of architechtural designers turn your great idea into a better reality.</em>
						<a href="" class="btn btn-focus">Learn More&nbsp;&nbsp;&gt;</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/home-banner-1.png' ?>" alt="First slide">
				<div class="carousel-caption">
					<div class="carousel-caption__title">
						Design<br>Excellence
					</div>
					<div class="carousel-caption__secondary-content">
						<em class="carousel-caption__desc hidden-sm-down">Let our expert team of architechtural designers turn your great idea into a better reality.</em>
						<a href="" class="btn btn-focus">Learn More&nbsp;&nbsp;&gt;</a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
			<span class="icon-prev" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
			<span class="icon-next" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->

	<!-- Optional Video Background -->
	<div class="home-video">
		<div class="carousel-caption">
			<div class="carousel-caption__title">
				Design<br>Excellence
			</div>
			<div class="carousel-caption__secondary-content">
				<em class="carousel-caption__desc hidden-sm-down">Let our expert team of architechtural designers turn your great idea into a better reality.</em>
				<a href="" class="btn btn-focus">Learn More&nbsp;&nbsp;&gt;</a>
			</div>
		</div>
		<video poster="" id="bgvid" playsinline autoplay muted loop>
			<source src="<?php echo get_template_directory_uri() . '/videos/home-background-video.webm' ?>" type="video/mp4">
			<source src="<?php echo get_template_directory_uri() . '/videos/home-background-video.mp4' ?>" type="video/mp4">
		</video>
	</div>
	<!-- <?php if( get_field('carousel_type') == 'red' ): ?>
		<div class="home-video">
			<div class="carousel-caption">
				<div class="carousel-caption__title">
					Design<br>Excellence
				</div>
				<div class="carousel-caption__secondary-content">
					<em class="carousel-caption__desc hidden-sm-down">Let our expert team of architechtural designers turn your great idea into a better reality.</em>
					<a href="" class="btn btn-focus">Learn More&nbsp;&nbsp;&gt;</a>
				</div>
			</div>
			<video poster="" id="bgvid" playsinline autoplay muted loop>
				<source src="<?php echo get_template_directory_uri() . '/videos/home-background-video.webm' ?>" type="video/mp4">
				<source src="<?php echo get_template_directory_uri() . '/videos/home-background-video.mp4' ?>" type="video/mp4">
			</video>
		</div>
	<?php endif ?> -->
	
	
</div><!-- .header-wrapper -->