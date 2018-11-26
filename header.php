
<div id="masthead">

	<!-- <div class="container clear"> -->

		<div class="header-desktop header clear">

			<div class="container clear">

				<div class="row logo-container">

					<div class="col-sm-4">

						<div class="left-container clear"></div>

					</div>


					<div class="col-sm-4">

						<div class="site-branding">
							<?php
                                echo "
									<div class='site-logo'>
										<a href='".esc_url(home_url("/"))."' rel='home' title='".get_bloginfo('name')." - ".get_bloginfo('description')."'>
											<img src='".get_field('options_header_logo', 'option')."' alt='".get_bloginfo('name')." - ".get_bloginfo('description')."' class='logo-img'>
										</a>
									</div>
								";
                            ?>
						</div>

					</div>

					<div class="col-sm-4">

						<div class="right-container clear">

							<div class="social">

								<?php
                                    echo get_template_part('template-parts/content', 'social');
                                ?>

							</div>

							<div class="contacts clear">

								<?php
                                    echo '<a href="tel:0044'.
                                        (int)preg_replace('/\D+/', '', get_field('options_header_telephone_number', 'option'))
                                    .'">
		                            '.get_field('options_header_telephone_number', 'option').'
		                            </a>';
                                ?>

							</div>

						</div>

					</div>

				</div>

			</div>



			<div class="row menu-container">

				<div id="menu-desktop" class="clear">

					<div class="container clear">

						<nav class="main-navigation desktop">

							<?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' 	=> 'main-menu',
                                        'menu_id'        	=> 'main-menu',
                                        'container_class' 	=> 'menu-main-menu-container',
                                        'before'          	=> '',
                                        'after'           	=> '',
                                        'link_before'     	=> '<span>',
                                        'link_after'      	=> '</span>',
                                    )
                                );
                            ?>

						</nav>

					</div>

				</div>

			</div>

		</div>







		<div class="header-mobile header">

			<div class="top-bar">
				<?php
                    echo '<a href="tel:0044'.
                        (int)preg_replace('/\D+/', '', get_field('options_header_telephone_number', 'option'))
                    .'">
					'.get_field('options_header_telephone_number', 'option').'
					</a>';
                ?>
			</div>

			<div class="logo-menu">
				<div class="site-branding">
					<?php
                        echo "
								<div class='site-logo'>
									<a href='".esc_url(home_url("/"))."' rel='home' title='".get_bloginfo('name')." - ".get_bloginfo('description')."'>
										<img src='".get_field('options_header_logo_mobile', 'option')."' alt='".get_bloginfo('name')." - ".get_bloginfo('description')."' class='logo-img'>
									</a>
								</div>

								<div id='menu-mobile'>
									<nav>";

                                        wp_nav_menu(
                                            array(
                                                'theme_location' 	=> 'main-menu',
                                                'menu_id'        	=> 'main-menu',
                                                'container_class' 	=> 'menu-main-menu-container',
                                                'before'          	=> '',
                                                'after'           	=> '',
                                                'link_before'     	=> '<span>',
                                                'link_after'      	=> '</span>',
                                            )
                                        );

                        echo "		</nav>
								</div>";

                    ?>
				</div>
			</div>

		</div>


	<!-- </div> -->

</div><!-- #masthead -->
