<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package wp_theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<div class="col-sm-offset-5 col-sm-6 col-md-offset-6 col-md-6">

			<div class="col-xs-8 col-sm-6 col-md-6 bemvindo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/linha_portfolio.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
				<h1 class="colverde texteffect-sobre">Portfolio<span style="color:#423E4F">.</span></h1>
			</div>
		</div>

		<div class="col-xs-12 col-md-12" style="margin-top: 50px">
			<div class="row">



				<?php
				$showposts = -1; // -1 shows all posts
				$do_not_show_stickies = 1; // 0 to show stickies
				$args=array(
					'showposts' => $showposts,
					'caller_get_posts' => $do_not_show_stickies,
				);
				$my_query = new WP_Query($args);

				?>



				<?php if( $my_query->have_posts() ) : ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php
						//necessary to show the tags
						global $wp_query;
						$wp_query->in_the_loop = true;
						?>

						<div class="col-md-4 col-md-12">

							<div class="hentry_posts">

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
										<header class="entry-header">

											<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											}

											?>

											<div class="content_card">
												<h4> <?php the_category(); ?> </h4>
												<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
													<h3> <?php the_title(); ?> </h3></a>
											</div>

											</header><!-- .entry-header -->

										</a>
									</article><!-- #post-## -->

							</div>
						</div>

					<?php endwhile; ?>



				<?php else : ?>


				<?php endif; ?>

			</div>
		</div>
	</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
