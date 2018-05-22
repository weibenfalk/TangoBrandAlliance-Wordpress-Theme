<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tango_Brand_Alliance
 */

?>

<article class="container container-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-md-9 col-md-offset-3">
			<!-- Initiate the breadcrumb plugin -->	
			<?php wbn_breadcrumb(); ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</div>
	
	<div class="row">

		<?php get_sidebar('post'); ?>
					
		<div class="col-md-9">
			<!-- Check for two columns -->
			<?php if( get_field('twoColumns') ): ?>
				<div class="entry-content two-columns" >
			<?php else:?>
				<div class="entry-content">
			<?php endif ?>
				<?php the_content(); ?>
				</div><!-- .entry-content -->
		</div> <!-- .col-md-9 -->
	</div> <!-- .row -->
</article><!-- #post-## -->