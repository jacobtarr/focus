<?php

    // ACF Variables
    
?>

<div class="header-wrapper">
	<header class="site-header">
		<div class="is-flex flex-items-xs-between">
			<a href="<?php echo get_home_url(); ?>" class="site-logo">
				<img src="<?php echo get_template_directory_uri() . '/dist/images/site-logo@2x.png' ?>" alt="">
			</a>
			<div class="header-menu clearfix">
				<div class="header-menu__phone hidden-sm-down"><a href="tel:919-453-0200">919.453.0200</a></div>
				<nav class="navbar">
					<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
					<div class="collapse navbar-toggleable-md" id="header-nav">
						<?php if( have_rows('nav_menu_item', 'option') ): ?>
							<ul class="nav navbar-nav">
                                <?php // loop through the rows of data
                                while ( have_rows('nav_menu_item', 'option') ) : the_row(); ?>

                                    <?php // vars

	                            		$name = get_sub_field( 'nav_menu_item_name' );
										$link = get_sub_field( 'nav_menu_item_link' );

                                    ?>

                                    <li class="nav-item">
										<a class="nav-link" href="<?php echo $link; ?>"><?php echo $name; ?></a>
									</li>
									
                                <?php endwhile; ?>
                            </ul>

                        <?php endif; ?>
					</div>
				</nav>
			</div>
		</div>
	</header>
	
	
