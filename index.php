<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package wp_theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<div class="col-md-12 bemvindo">
			<div class="col-md-offset-3 col-md-4">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/seta_foto.png" class="img-responsive hvr-grow" alt="Fotografia ODESIGNER">
			</div>

			<div class="col-md-5">
				<h1 class="colverde">Bem-vindo<span style="color:#423E4F">.</span></h1>
				<h3>O meu nome é João Pereira e sou “ODESIGNER.PT”!</h3>
			</div>
		</div>

		<div class="col-sm-offset-5 col-sm-6 col-md-offset-6 col-md-6">

			<div class="col-xs-8 col-sm-6 col-md-6 bemvindo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/linha_portfolio.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
				<h1 class="colverde texteffect-sobre">Portfolio<span style="color:#423E4F">.</span></h1>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12" style="margin-top: 50px">
			<div class="row">




				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>


				<div class="col-xs-12 col-sm-6 col-md-4">
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

				<?php endwhile;


				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php


get_footer();
