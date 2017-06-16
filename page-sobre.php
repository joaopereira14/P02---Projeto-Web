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
		<div class="col-md-12 bemvindo">
			<div class="col-md-6">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/foto_odesigner.png" class="img-responsive hvr-grow" alt="Fotografia ODESIGNER">

			</div>


			<div class="col-md-6">
				<?php while ( have_posts() ) : the_post() ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="col-xs-8 col-sm-6 col-md-6 sobremim">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/linha_portfolio.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
							<header class="entry-header">

								<?php the_title( '<h1 class="entry-title colverde texteffect-sobre">', '</h1>' ); ?>
							</header><!-- .entry-header -->
						</div>
					</article><!-- #post-## -->

				<?php endwhile; ?>
			</div>

			<div class="col-xs-12 col-md-6">

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				<h1 class="colverde size_heading" style="padding-top:10%">Competências<span style="color:#423E4F">.</span></h1>

				<div class="col-xs-12 col-md-12">
					<h4>Web Design</h4>
					<div class="progress">
						<div class="progress-bar hvr-grow" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
							<span class="sr-only">0%</span>
						</div>
					</div>
					<h4>Ui / Ux Design</h4>
					<div class="progress">
						<div class="progress-bar hvr-grow" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
							<span class="sr-only">80%</span>
						</div>
					</div>
					<h4>Motion Graphics</h4>
					<div class="progress">
						<div class="progress-bar hvr-grow" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
							<span class="sr-only">80%</span>
						</div>
					</div>
					<h4>Branding</h4>
					<div class="progress">
						<div class="progress-bar hvr-grow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							<span class="sr-only">60%</span>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-6 col-md-6">
				<h1 class="colverde size_heading" style="padding-top:10%">Ferramentas<span style="color:#423E4F">.</span></h1>

				<div class="col-md-12">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/photoshop.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/illustrator.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/indesign.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/aftereffects.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/premiere.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/wordpress.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/html5.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/css3.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/windows.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/mac.svg" class="img-responsive margin10 hvr-grow" alt="Skills">
				</div>
			</div>
		</div>



	</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
