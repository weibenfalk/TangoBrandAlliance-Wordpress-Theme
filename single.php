<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tango_Brand_Alliance
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<!-- Hero image from Revolution Slider -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="tango-page-heroimage">
							<?php if ( has_post_thumbnail() ) { ?>
								<? // php the_post_thumbnail();?>
								<?php putRevSlider( 'tango-page' ); ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
