<?php while (have_posts()) : the_post(); ?>
	<div class="toggleable-area">
		<div class="container">
			<div class="row">
				<div class="col-md-24 is-flex">
					<img src="<?php echo get_template_directory_uri() . '/dist/images/home-toggable-ex.png' ?>" alt="">
					<div class="toggleable-area__content">
						<h3>Toggleable Content Area</h3>
						<p>At Focus Design Builders, we recognize that our clients are our foundation. At Focus Design Builders, we recognize that our clients are our foundation.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="company-desc-area">
		<div class="container">
			<div class="row">
				<div class="col-md-24">
					<p>At Focus Design Builders, we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our bottom line. We also know that building better means building smarter. Since 2010 we’ve used the design-build methodology from drawing board to the last coat of paint on every single one of our projects. Stay a while and see why Focus Design Builders is the right choice for you.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="features-area">
		<div class="container">
			<div class="row">
				<div class="col-md-24">
					<div class="features is-flex">
						<div class="feature feature--design is-flex has-flex-wrap">
							<h4 class="feature__title">Design-Build</h4>
							<p>At Focus Design Builders, we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our is the right choice for you. At Focus Design Builders, we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our is the right choice for you.</p>
							<a href="#" class="flex-xs-bottom btn btn-focus">Design-Build&nbsp;&nbsp;&gt;</a>
						</div>
						<div class="feature feature--story is-flex has-flex-wrap">
							<h4 class="feature__title">Our Story</h4>
							<p>At Focus Design Builders, we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our is the right choice for you. Foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our is the right choice for you. <br><br>We always think about our customers.</p>
							<a href="#" class="flex-xs-bottom btn btn-focus">Meet Us&nbsp;&nbsp;&gt;</a>
						</div>
						<div class="feature feature--what-do is-flex has-flex-wrap">
							<h4 class="feature__title">What We Do</h4>
							<p>Then there’s the stuff we do.  At Focus Design Builders, we recognize that our clients are our foundation. Without you we can’t exist, that’s why we make honesty and integrity more important than our is the right choice for you.<br>
								<ul>
									<li>Consultations</li>
									<li>Architechtual Design</li>
									<li>Other Service</li>
									<li>Other Service</li>
								</ul>
							</p>
							<a href="#" class="flex-xs-bottom btn btn-focus">More Services&nbsp;&nbsp;&gt;</a>
						</div>
					</div>
					<div class="featured-video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/nRRSp120gLs" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; ?>