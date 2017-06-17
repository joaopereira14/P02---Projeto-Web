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

		<?php while ( have_posts() ) : the_post() ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="bemvindo">
			<div class="col-xs-offset-0 col-md-offset-1  col-md-5">
				<div class="form-area" style="margin-bottom:100px">
					<form>
						<br style="clear:both">
						<h2 style="margin-bottom: 25px; text-align: center;">Este é o momento certo!</h2>
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</form>
				</div>
			</div>


			<div class="col-md-6">
						<div class="col-xs-12 col-sm-6 col-md-6 sobremim">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/linha_portfolio.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
							<header class="entry-header">

								<?php the_title( '<h1 class="entry-title colverde texteffect-sobre">', '</h1>' ); ?>
							</header><!-- .entry-header -->
						</div>

			</div>




			<div class="col-xs-12 col-md-6">
				<div class="row" style="margin-top:10%; margin-left:5%;">
					<div class="col-md-2">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/icon-map.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
					</div>
					<div class="col-md-10">
						<h4>Vila Nova de Famalicão</h4>
					</div>
				</div>

				<div class="row" style="margin-top:10%; margin-left:5%;">
					<div class="col-md-2">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/icon-movel.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
					</div>
					<div class="col-md-10">
						<h4>+351 914 678 891</h4>
					</div>
				</div>
				<div class="row" style="margin-top:10%; margin-left:5%; margin-bottom:20%;">
					<div class="col-md-2">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/icon-email.svg" class="img-responsive hvr-grow" alt="Linha Portfolio">
					</div>
					<div class="col-md-10">
						<a href="mailto:geral@odesigner.pt" target="_top"><h4>geral@odesigner.pt</h4></a>
					</div>
				</div>


			</div>
		</div>

		</article><!-- #post-## -->
		<?php endwhile; ?>


		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
