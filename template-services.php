<?php
/**
 * Template Name: Services Template
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
								<strong class="large">Projects large and small,</strong> we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line.
							</p>

							<div class="page-mini-section">
								<h3 class="f-orange">Commercial Services</h3>
								<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
								<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:</p>
							</div>
	
							<div class="page-mini-section">

								<div class="services row">
									<div class="service col-md-11">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-consultation.png' ?>" alt="">
										<h4 class="service-title">
											Consultation
										</h4>
										<p>We can advise you on zoning, municipalities, construction management at risk and more.</p>
									</div>
									<div class="service offset-md-2 col-md-11">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-design.png' ?>" alt="">
										<h4 class="service-title">
											Design
										</h4>
										<p>Start your building process the right way with our design services.</p>
									</div>
								</div>

								<div class="services row">
									<div class="service col-md-11">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-contracting.png' ?>" alt="">
										<h4 class="service-title">
											General Contracting
										</h4>
										<p>Contract work, generally for upfit and remodel jobs.</p>
									</div>
									<div class="service offset-md-2 col-md-11">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-build.png' ?>" alt="">
										<h4 class="service-title">
											Build
										</h4>
										<p>For those starting from scratch, we will help you through the entire build process.</p>
									</div>
								</div>
								
							</div>

							<div class="page-mini-section">
								<h3 class="f-orange">Design-build Services From Planning To Closing</h3>
								<p>At Focus Design Builders, we understand the only way to successfully execute a design-build project is through meticulous attention to detail. We will approach any project through our tried-and-true five phase process to ensure you receive the highest-quality work without missing any details.</p>
								<ul class="phase-list list-unstyled">
									<li><span>phase I –</span> Preliminary Feasibility & Facility Investigation and Development</li>
									<li><span>phase II –</span> Schematic Design Study and Budget</li>
									<li><span>phase III –</span> Design Finalization Stage</li>
									<li><span>phase IV –</span> Construction and Construction Administration</li>
									<li><span>phase V –</span> Post-Construction and Closeout</li>
								</ul>
								<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:</p>
							</div>

						</div>
					</div>
				</div>
				

			</main>
		</div>
	</div>
<?php endwhile; ?>