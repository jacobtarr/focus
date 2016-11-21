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

							

						</div>
					</div>
				</div>
				

			</main>
		</div>
	</div>
<?php endwhile; ?>