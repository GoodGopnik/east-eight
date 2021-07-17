<?php get_header(); /* Template Name: Investors */?>

<section class="s-main-home s-main-inv" style='background:url(<?php the_field('main_image_inv_p'); ?>) no-repeat scroll center center; background-size: cover;'>

	<div class="container">
		<div class="main-home-text">
			<span><?php the_field('sub_title_inv_m'); ?></span>
			<h1><?php the_field('title_inv_m'); ?></h1>
			<p><?php the_field('text_inv_m'); ?></p>
		</div>
	</div>

	<?php if( have_rows('social_links', 8) ): ?>
	<ul class="menu-social">	
	<?php while ( have_rows('social_links', 8) ) : the_row(); ?>
		<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a></li>
	<?php endwhile; ?>
	</ul>
	<?php endif; ?>

</section>

<section class="s-si s-si-cont">
	<div class="container-fluid2">
		<div class="row no-gutters">
			
			<div class="col">
				<div class="si-text text-block">
					<span><?php the_field('sub_title_inv_c'); ?></span>
					<h2><?php the_field('title_inv_c'); ?></h2>
					<span class="line"></span>
					<?php the_field('content_inv_c'); ?>
				</div>
			</div>

			<div class="col">
				<div class="si-right">
					<?php 
					$images = get_field('image_inv_c'); ?>
					<div class="gallety-one">
						<img src="<?php echo $images; ?>" alt="">
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="s-si s-si-cont2">
	<div class="container-fluid2">
		<div class="row no-gutters">

			<div class="col">
				<div class="si-cont2-text">
					<?php the_field('left_block_inv_ct'); ?>
				</div>
			</div>			

			<div class="col">
				<div class="si-text text-block">
					<span><?php the_field('sub_title_inv_ct'); ?></span>
					<h2><?php the_field('title_inv_ct'); ?></h2>
					<span class="line"></span>
					<?php the_field('content_inv_ct'); ?>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="s-report">
	<div class="row no-gutters">
		
		<div class="col-lg-6">
			<div class="report-img" style='background:url(<?php the_field('image_inv_ct'); ?>) no-repeat scroll center center; background-size: cover;'></div>
		</div>

		<div class="col-lg-6">
			<div class="report-text text-block">
				<span><?php the_field('title_p_s'); ?></span>
				<h2><?php the_field('sub_title_p_s'); ?></h2>
				<span class="line"></span>
				<?php echo do_shortcode(''. get_field('form_inv_ct') .'' ); ?>		
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>
