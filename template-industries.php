<?php
/**
 * Template Name: Industries Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/banner'); ?>
	<div class="wrapper" role="document">
		<div class="content">
			<main class="main main-secondary">

				<div class="page-content container">
					<div class="row">
						<div class="col-md-24">

							<p class="page-intro">
								<strong class="large">At Focus Design Builders,</strong> we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.
							</p>

							<div id="accordion" class="industries-accordion" role="tablist" aria-multiselectable="true">
								<div class="card">
									<div class="card-header is-flex" role="tab" id="headingOne">
										<figure class="card-image hidden-sm-down">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/industries-tab-ex.png' ?>" alt="">
										</figure>
										<h5 class="card-title m-b-0">
											<a data-toggle="collapse" data-parent="#accordion" href="#industryOne" aria-expanded="false" aria-controls="industryOne">
												<span>colleges + universities</span>
											</a>
										</h5>
									</div>
									<div id="industryOne" class="card-dropdown collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="card-block">
											<p>we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.</p>
											<p><strong>“Focus has exceeded our expectations in every facet of the design and planning phases.”</strong><br><span class="small">David Armstrong, Vice President for Administrative Services — Truett McConnell College </span></p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header is-flex" role="tab" id="headingTwo">
										<figure class="card-image hidden-sm-down">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/industries-tab-ex.png' ?>" alt="">
										</figure>
										<h5 class="card-title m-b-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#industryTwo" aria-expanded="false" aria-controls="industryTwo">
												<span>colleges + universities</span>
											</a>
										</h5>
									</div>
									<div id="industryTwo" class="card-dropdown collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="card-block">
											<p>we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.</p>
											<p><strong>“Focus has exceeded our expectations in every facet of the design and planning phases.”</strong><br><span class="small">David Armstrong, Vice President for Administrative Services — Truett McConnell College </span></p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header is-flex" role="tab" id="headingThree">
										<figure class="card-image hidden-sm-down">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/industries-tab-ex.png' ?>" alt="">
										</figure>
										<h5 class="card-title m-b-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#industryThree" aria-expanded="false" aria-controls="industryThree">
												<span>colleges + universities</span>
											</a>
										</h5>
									</div>
									<div id="industryThree" class="card-dropdown collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="card-block">
											<p>we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.</p>
											<p><strong>“Focus has exceeded our expectations in every facet of the design and planning phases.”</strong><br><span class="small">David Armstrong, Vice President for Administrative Services — Truett McConnell College </span></p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header is-flex" role="tab" id="headingFour">
										<figure class="card-image hidden-sm-down">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/industries-tab-ex.png' ?>" alt="">
										</figure>
										<h5 class="card-title m-b-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#industryFour" aria-expanded="false" aria-controls="industryFour">
												<span>colleges + universities</span>
											</a>
										</h5>
									</div>
									<div id="industryFour" class="card-dropdown collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="card-block">
											<p>we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.</p>
											<p><strong>“Focus has exceeded our expectations in every facet of the design and planning phases.”</strong><br><span class="small">David Armstrong, Vice President for Administrative Services — Truett McConnell College </span></p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header is-flex" role="tab" id="headingFive">
										<figure class="card-image hidden-sm-down">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/industries-tab-ex.png' ?>" alt="">
										</figure>
										<h5 class="card-title m-b-0">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#industryFive" aria-expanded="false" aria-controls="industryFive">
												<span>colleges + universities</span>
											</a>
										</h5>
									</div>
									<div id="industryFive" class="card-dropdown collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="card-block">
											<p>we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.</p>
											<p><strong>“Focus has exceeded our expectations in every facet of the design and planning phases.”</strong><br><span class="small">David Armstrong, Vice President for Administrative Services — Truett McConnell College </span></p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				

			</main>
		</div>
	</div>
<?php endwhile; ?>