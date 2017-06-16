<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package wp_theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>


		<div class="col-md-offset-2 col-md-8">


			<div class="singles">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<header class="entry-header single_center">
						<div class="back_page">
							<a href="www.odesigner.pt" onclick="window.history.go(-1); return false;"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i>
</a>
						</div>

						<h4> <?php the_category(); ?> </h4>

						<?php

						if ( is_single() ) :

							the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
							endif;

							if ( 'post' === get_post_type() ) : ?>

							<?php
						endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content content_justify">
						<p> <?php the_content(); ?> </p>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->
			</div>
		</div>

		<!-- <div class="col-md-12">
		<?php the_post_navigation();


	endwhile; // End of the loop.
	?>

</div> -->
</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
