<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tango_Brand_Alliance
 */

// if ( ! is_active_sidebar( 'sidebar-page' ) ) {
//	return;
// }
?>

<div class="col-md-3 tango-page-sidebar">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php // dynamic_sidebar( 'sidebar-1' ); ?>
		
		<?php if (has_children() or $post->post_parent) { ?>
			<?php if (get_field('education')){ ?>
				<span class="tango-call-to-action-education">
					<a href="mailto:anders@tangobrandalliance.se">Anmäl dig till utbildning</a>
				</span>

				<ul class="tango-sidebar-menu tango-sidebar-menu-with-button tango-sidebar-page-menu">

			<?php } else { ;?>
					<ul class="tango-sidebar-menu tango-sidebar-page-menu">
			<?php } ?>
				<img style="float:left; padding:0 10px 0 0" src="/wp-content/themes/tango-brand-alliance/img/tango-page-icon.svg">
			<?php
			if($post->post_parent):?>

				<li class="sidebar-menu-header"><?php echo get_the_title( $post->post_parent ); ?></li>
				<?php $children = wp_list_pages("sort_column=post_date&title_li=&child_of=".$post->post_parent."&echo=0");
			else: ?>
				<li class="sidebar-menu-header"><?php echo get_the_title(); ?></li>
				<?php $children = wp_list_pages("sort_column=post_date&title_li=&child_of=".$post->ID."&echo=0");
			endif;

			if ($children): ?>
			<!-- Sub Menu -->

				<?php echo $children; ?>
			</ul>

			<?php endif; ?>

		<?php } else { ?> 
			<ul class="tango-sidebar-menu tango-page-sidebar-text">
				<img style="float:left; padding:0 10px 0 0; width:38px; height:auto" src="/wp-content/themes/tango-brand-alliance/img/tango-mail-icon.svg">
				<li class="sidebar-menu-header">Mailinglista</li>
			</ul>
		
			<p style="font-size:16px; line-height:22px">Vill du bli uppdaterad om när nya trendspaningar publiceras? <br/>Maila ditt för- och efternamn, företagsnamn samt mailadress till <a 	href="mailto:anders@tangobrandalliance.se">Anders Lindén.</a></p>
			
		<?php } ?>
	</aside><!-- #secondary -->
</div>


