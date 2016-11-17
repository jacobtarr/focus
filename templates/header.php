<!-- <header class="banner">
	<div class="container">
		<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		<nav class="nav-primary">
			
		</nav>
	</div>
</header> -->
<div class="header-wrapper">
	<header class="site-header">
		<div class="is-flex flex-items-xs-between">
			<a href="" class="site-logo">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/site-logo@2x.png' ?>" alt="">
			</a>
			<div class="header-menu">
				<div class="header-menu__phone"><a href="tel:919-453-0200">919.453.0200</a></div>
				<nav class="navbar">
					<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation"></button>
					<div class="collapse navbar-toggleable-md" id="header-nav">
						<ul class="nav navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Industries</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Our Work</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<div id="home-carousel" class="home-carousel carousel slide" data-ride="">
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
						<em class="carousel-caption__desc">Let our expert team of architechtual designersturn your great idea into a better reality.</em>
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
						<em class="carousel-caption__desc">Let our expert team of architechtual designersturn your great idea into a better reality.</em>
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
						<em class="carousel-caption__desc">Let our expert team of architechtual designersturn your great idea into a better reality.</em>
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
	</div>
</div>



<?php
// if (has_nav_menu('primary_navigation')) :
// 	wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
// endif;
?>