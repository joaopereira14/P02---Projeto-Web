<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
                  <div class="row">

                    <div class="col-lg-offset-4 col-lg-4 col-md-12">

                       <a href="/wordpress/contactos"><h2>Vamos conversar?</h2></a>
                           <div class="social-icons">
                               <a href="#" class="hvr-bob"><i class="fa fa-behance fa-2x"></i></a>
                               <a href="#" class="hvr-bob"><i class="fa fa-dribbble fa-2x"></i></a>
                               <a href="#" class="hvr-bob"><i class="fa fa-linkedin fa-2x"></i></a>
                               <a href="#" class="hvr-bob"><i class="fa fa-facebook fa-2x"></i></a>
                               <a href="#" class="hvr-bob"><i class="fa fa-instagram fa-2x"></i></a>
                           </div>
				   <h4><?php printf( esc_html__( '2017 © Designed & Developed by %2$s.', 'wp_theme' ), 'wp_theme', '<a href="/wordpress/contactos" rel="designer">João Pereira</a>' ); ?><h4/>
                   </div>

                    <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
                        <div class="ola">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/linha_footer.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
                        </div>
                    </div>

                  </div>
            </div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
