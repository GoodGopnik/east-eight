<?php get_header(); /* Template Name: Contact */?>

<section class="s-contact-form">
	<div class="row no-gutters">
		
		<div class="col">
			<div class="cf-text text-block">
				<span><?php the_field('sub_title_cont'); ?></span>
				<h2><?php the_field('title_cont'); ?></h2>
				<span class="line"></span>
				<p><?php the_field('text_cont'); ?></p>
				<div class="mail">
					<h4><?php the_field('text_mail'); ?></h4>
					<a href="mailto:<?php the_field('mail_cont'); ?>"><?php the_field('mail_cont'); ?></a>
				</div>				
			</div>			
		</div>	

		<div class="col">
			<div class="cf-wrap">
				<?php echo do_shortcode(''. get_field('form_cont') .'' ); ?>
			</div>
		</div>

	</div>
</section>

<?php if( have_rows('contacts_cont_r') ): ?>
<section class="s-map">
	<div class="container">
		<h2><?php the_field('title_cont_m'); ?></h2>

		<div class="map-all">
		<?php while ( have_rows('contacts_cont_r') ) : the_row(); ?>

			<div class="map-one">
				<h3><?php the_sub_field('title'); ?></h3>
				<p><?php the_sub_field('text'); ?></p>
			    <?php
			    $location = get_sub_field('map');

			    if( !empty($location) ):
			    ?>
			    <div class="acf-map">
			        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			    </div>
			    <?php endif; ?> 				
			</div>

		<?php endwhile; ?>
		</div>

	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
