<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

<section class="s-footer">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="footer-text text-block">
					<span><?php the_field('sub_title_subsc','option'); ?></span>
					<h2><?php the_field('title_subsc','option'); ?></h2>
					<span class="line"></span>
					<?php echo do_shortcode(''. get_field('shortcode_form_subsc','option') .'' ); ?>							
				</div>				
			</div>

			<div class="col-md-6">
				<div class="footer-text text-block">
					<h2><?php the_field('title_cont','option'); ?></h2>
					<p><?php the_field('text_cont','option'); ?></p>
					<?php if( have_rows('contact','option') ): ?>
					<ul class="menu-social">	
					<?php while ( have_rows('contact','option') ) : the_row(); ?>
						<li><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a></li>
					<?php endwhile; ?>
					</ul>
					<?php endif; ?>					
				</div>				
			</div>

		</div>
	</div>
</section>

<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
