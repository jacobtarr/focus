<?php
/**
 * Template Name: Contact Template
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
								<strong class="large">Can you do that?</strong> If you want to know anything about our process, what our capabilities are, where we can build, how much your project will be or any other question you may have, fill out the form to drop us a line and we’ll get back to you as soon as we can.
							</p>

							<div class="page-mini-section form">
								<h3 class="text-xs-center f-orange">Send us a message</h3>
								<div class="gravity-form">
									<?php gravity_form( 1, false, false, false, '', false ); ?>
								</div>
							</div>
	
							

						</div>
					</div>
				</div>
				

			</main>
		</div>
	</div>
<?php endwhile; ?>