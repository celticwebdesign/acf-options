<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Penryn_Dental
 */

 ?>


 	</div><!-- #content -->



 	<?php
        get_template_part('template-parts/content', 'above-footer');
     ?>




	 <footer id="colophon" class="site-footer">

 		<div class="container">


 			<div class="footer-row clear">

 				<div class="left clear">

 						<div class="address block">
							<h3>Contact Us</h3>

 							<?php
                                echo get_field('options_footer_address', 'options');
                            ?>
 						</div>

 						<div class="telephone-email block">
 							<?php
                                echo '<div class="email">
 										<a href="mailto:'.get_field("options_footer_email", "options").'">
 											'.get_field("options_footer_email", "options").'
 										</a>
 									</div>';
                            ?>
 							<?php
                                echo '<div class="telephone">
 										<a href="tel:0044'.
                                            (int)preg_replace('/\D+/', '', get_field('options_footer_telephone', 'option'))
                                        .'">
 										'.get_field('options_footer_telephone', 'option').'
 										</a>
 									</div>';

                                // echo get_field('options_footer_telephone', 'options');
                            ?>
 						</div>

 						<div class="address block">
							<h3>Opening Hours</h3>

 							<?php
                                echo get_field('options_footer_opening_hours', 'options');
                            ?>
 						</div>

 				</div>



 				<div class="right clear">

 					<div class="form block">

 						<?php
                            echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');
                        ?>

 					</div>

 				</div>

 			</div>


 		</div>

 	</footer><!-- #colophon -->



 	<?php
        get_template_part('template-parts/content', 'footer-copyright');
    ?>



 </div><!-- #page -->

 <?php wp_footer(); ?>

 <!-- Google Analytics -->
 <script>
 	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 	ga('create', '<?php echo get_field("options_google_id", "option"); ?>', 'auto');
 	ga('send', 'pageview');
 </script>
 <!-- /Google Analytics -->

 <!-- Telephone Script Tracking -->
 <?php
    echo get_field('options_header_telephone_number_tracking_body', 'option');
 ?>
 <!-- Telephone Script Tracking -->

 <!-- Project Huddle -->
 <?php
    echo get_field('options_project_huddle_code', 'option');
 ?>
 <!-- /Project Huddle -->

 </body>
 </html>
