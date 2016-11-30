<?php
/**
 * Template Name: Work Template
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
								<strong class="large">Our work</strong> speaks for itself. Each project we complete is a source of pride for us. Please browse through our portfolio to see some of the projects we’ve completed.
							</p>

							<div class="work-section">
								
								<ul class="nav nav-tabs row" id="workRow1" role="tablist">
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link active" data-toggle="tab" href="#workItem1" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem2" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem3" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem4" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade in active" id="workItem1" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider1" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager1">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="workItem2" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider2" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager2">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
										
									</div>
									<div class="tab-pane fade" id="workItem3" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider3" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager3">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="workItem4" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider4" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager4">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
								</div>

								<ul class="nav nav-tabs row" id="workRow2" role="tablist">
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem5" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem6" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem7" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem8" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade" id="workItem5" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider5" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager5">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="workItem6" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider6" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager6">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
										
									</div>
									<div class="tab-pane fade" id="workItem7" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider7" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager7">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="workItem8" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider8" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager8">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
								</div>

								<ul class="nav nav-tabs row" id="workRow3" role="tablist">
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem9" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem10" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem11" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
									<li class="nav-item col-sm-6 col-md-6">
										<a class="nav-link" data-toggle="tab" href="#workItem12" role="tab">
											<img src="<?php echo get_template_directory_uri() . '/dist/images/work-pic-1.png' ?>" alt="">
											<div class="nav-link__overlay"></div>
											<span>Clearview Baptist Church</span>
										</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade" id="workItem9" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider9" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager9">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="workItem10" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider10" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager10">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
										
									</div>
									<div class="tab-pane fade" id="workItem11" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider11" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager11">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="workItem12" role="tabpanel">
										<div class="work-item__intro">
											<h3>Clearview Baptist Church</h3>
											<p>Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area. From preliminary feasibility planning to close-out, we will give your project the full attention it deserves.</p>
											<p>Focus Design Builders have broken our commercial services into four categories, to make the process understandable for our potential clients:  Focus Design Builders serves as one of the premiere full-service design-build companies in the Raleigh-Durham area.</p>
										</div>
										<div class="work-item__slider">
											<ul id="bxslider12" class="bxslider">
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
												<li><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></li>
											</ul>

											<div class="bx-pager" id="bx-pager12">
												<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
												<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri() . '/dist/images/sample-gallery-1.png' ?>" /></a>
											</div>
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
