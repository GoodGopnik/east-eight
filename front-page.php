<?php get_header(); ?>

<section class="s-main-home" style='background:url(<?php the_field('main_image'); ?>) no-repeat scroll center center; background-size: cover;'>

	<div class="container">
		<div class="main-home-text">
			<span><?php the_field('sub_title_mh'); ?></span>
			<h1><?php the_field('title_mh'); ?></h1>
			<?php the_field('text_mh'); ?>
			<?php if (get_field('text_button_mh')) { ?>
				<a class="text-link" href="<?php the_field('link_button_mh'); ?>"><?php the_field('text_button_mh'); ?></a>
			<?php } ?>
		</div>
	</div>

	<div class="tabs nav-section">
		<div class="tab" data-content="2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/arrow-left.png" alt=""><span>INVESTORS</span></div>
		<div class="tab" data-content="1"><span>SCHOOLS</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/arrow-left.png" alt=""></div>
	</div>

	<?php if( have_rows('social_links') ): ?>
	<ul class="menu-social">	
	<?php while ( have_rows('social_links') ) : the_row(); ?>
		<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a></li>
	<?php endwhile; ?>
	</ul>
	<?php endif; ?>

</section>

<div class="tab_content">

	<section class="tab_item s-si">
		<div class="container-fluid2">
			<div class="row no-gutters">
				
				<div class="col">
					<div class="si-text text-block">
						<span><?php the_field('sub_title_sch_b'); ?></span>
						<h2><?php the_field('title_sch_b'); ?></h2>
						<span class="line"></span>
						<p><?php the_field('text_sch_b'); ?></p>
						<?php if (get_field('text_button_sch_b')) { ?>
							<a class="text-link" href="<?php the_field('link_button_sch_b'); ?>"><?php the_field('text_button_sch_b'); ?></a>
						<?php } ?>						
					</div>
				</div>

				<div class="col" style="min-width:0;">
					<div class="si-right">
						<div class="si-headline">
							<span>Are you a</span>
							<span class="tab" data-content="2">INVESTORS</span>
							<span class="tab active" data-content="1">SCHOOLS</span>
						</div>
						<?php 
						$images = get_field('gallety_sch_b');
						if( $images ): ?>
						<div class="gallety-slider owl-carousel">
							<?php foreach( $images as $image ): ?>
							
							<div class="gallety-one">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>

							<?php endforeach; ?>
						</div>	
						<?php endif; ?>						
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="tab_item s-si">
		<div class="container-fluid2">
			<div class="row no-gutters">
				
				<div class="col">
					<div class="si-text text-block">
						<span><?php the_field('sub_title_inv_b'); ?></span>
						<h2><?php the_field('title_inv_b'); ?></h2>
						<span class="line"></span>
						<p><?php the_field('text_inv_b'); ?></p>
						<?php if (get_field('text_button_inv_b')) { ?>
							<a class="text-link" href="<?php the_field('link_button_inv_b'); ?>"><?php the_field('text_button_inv_b'); ?></a>
						<?php } ?>						
					</div>
				</div>

				<div class="col" style="min-width:0;">
					<div class="si-right">
						<div class="si-headline">
							<span>Are you a</span>
							<span class="tab active" data-content="2">INVESTORS</span>
							<span class="tab" data-content="1">SCHOOLS</span>
						</div>
						<?php 
						$images = get_field('gallety_inv_b');
						if( $images ): ?>
						<div class="gallety-slider owl-carousel">
							<?php foreach( $images as $image ): ?>
							
							<div class="gallety-one">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>

							<?php endforeach; ?>
						</div>	
						<?php endif; ?>						
					</div>
				</div>

			</div>
		</div>
	</section>

</div>

<section class="s-solution">
	<div class="container">
		<div class="solution-box">
			<p><?php the_field('excerption'); ?></p>
			<?php if( have_rows('slider_b_sol') ): ?>
			<div class="sol-slider owl-carousel">
			<?php while ( have_rows('slider_b_sol') ) : the_row(); ?>

				<div class="sol-one" style='background:url(<?php the_sub_field('image'); ?>) no-repeat scroll center center; background-size: cover;'>
					<h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('text'); ?></p>
					<?php if (get_field('text_button_mh')) { ?>
					<a class="text-link" href="<?php the_field('link_button_mh'); ?>"><?php the_field('text_button_mh'); ?></a>
					<?php } ?>					
				</div>

			<?php endwhile; ?>
			</div>
			<?php endif; ?>			
		</div>
	</div>
</section>

<section class="s-global">
	<div class="row no-gutters">

		<div class="col">
			<div class="global-text text-block">
				<span><?php the_field('sub_title_gl_h'); ?></span>
				<h2><?php the_field('title_gl_h'); ?></h2>
				<span class="line"></span>
				<p><?php the_field('text_gl_h'); ?></p>
				<?php if (get_field('text_link_gl_h')) { ?>
					<a class="text-link" href="<?php the_field('link_gl_h'); ?>"><?php the_field('text_link_gl_h'); ?></a>
				<?php } ?>						
			</div>				
		</div>

		<div class="col">
			<?php if( have_rows('numbers_gl_h') ): ?>
			<div class="numbers">
			<?php while ( have_rows('numbers_gl_h') ) : the_row(); ?>

			<div class="numbers-one">
				<span><?php the_sub_field('number'); ?></span>
				<p><?php the_sub_field('text'); ?></p>
			</div>

			<?php endwhile; ?>
			</div>
			<?php endif; ?>				
		</div>

	</div>
</section>

<?php if( have_rows('content_con_cr') ): ?>
<section class="s-blocks-half">
<?php while ( have_rows('content_con_cr') ) : the_row(); ?>

	<div class="blocks-half">
		<div class="row no-gutters">
			
			<div class="col">
				<div class="blocks-half-img">
					<img src="<?php the_sub_field('image_con_ch'); ?>" alt="">
				</div>
			</div>

			<div class="col">
				<div class="blocks-half-text text-block">
					<span><?php the_sub_field('sub_title_con_ch'); ?></span>
					<h2><?php the_sub_field('title_con_ch'); ?></h2>
					<span class="line"></span>
					<p><?php the_sub_field('text_con_ch'); ?></p>
					<a class="text-link" href="<?php the_sub_field('link_con_ch'); ?>">Learn more</a>
				</div>
			</div>	
			
		</div>	
	</div>

<?php endwhile; ?>
</section>
<?php endif; ?>	

<section class="s-news-home">
	<div class="row no-gutters">
		
		<div class="col-lg-6">
			<div class="row">
			<?php
				$ids2 = get_field('news_ns_h', false, false);
				if($ids2) {
				$the_query = new WP_Query(array(
					'post_type'      	=> 'post',
					'posts_per_page'	=> -1,
					'post__in'			=> $ids2,
					'orderby'        	=> 'post__in'
				));
				if ($the_query->have_posts()) {
					while ($the_query->have_posts()) : $the_query->the_post();
				?>
					<div class="col-md-6">
						<a class="post-one" href="<?php the_permalink(); ?>">

							<?php if ( has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(); ?>
							<?php else: ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/about.jpg" alt="<?php the_title(); ?>">
							<?php endif; ?>

							<div class="post-text">
								<h3><?php the_title(); ?></h3>
								<span>by <strong><?php the_author(); ?></strong> - <?php the_time('F j, Y'); ?></span>
								<?php
							    $my_excerpt = get_the_excerpt();
								if ( has_excerpt() ){
									echo wpautop( $my_excerpt );
								}
								else {
									echo '<p>'.wp_trim_words(get_the_content(), 24, '...').'</p>';
								}
							  	?>
							  	<span class="text-link">Learn more</span>
							</div>


						</a>
					</div>

				<?php endwhile; wp_reset_postdata(); } } ?>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="news-text text-block">
				<span><?php the_field('sub_title_ns_h'); ?></span>
				<h2><?php the_field('title_ns_h'); ?></h2>
				<span class="line"></span>
				<p><?php the_field('text_ns_h'); ?></p>
				<?php 
				$link = get_field('link_ns_h');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="text-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>					
			</div>
		</div>

	</div>
</section>

<section class="s-faq">
	<div class="row no-gutters">

		<div class="col-lg-6">
			<?php if( have_rows('faqs_qa') ): ?>
			<div class="faqs">
			<?php while ( have_rows('faqs_qa') ) : the_row(); ?>

			<div class="accord-one">
				<h3><?php the_sub_field('question'); ?><i class="las la-plus"></i></h3>
				<div class="open-accord" style="display:none;">
					<p><?php the_sub_field('answer'); ?></p>
				</div>
			</div>

			<?php endwhile; ?>
			</div>
			<?php endif; ?>			
		</div>

		<div class="col-lg-6">
			<div class="faq-text text-block">
				<span><?php the_field('sub_title_qa_b'); ?></span>
				<h2><?php the_field('title_qa_b'); ?></h2>
				<span class="line"></span>
				<p><?php the_field('text_qa_b'); ?></p>
				<?php //if (get_field('text_button_sch_b')) { ?>
					<a class="text-link" href="<?php the_field('link_qa_b'); ?>">VIEW ALL NEWS</a>
				<?php //} ?>						
			</div>			
		</div>

	</div>
</section>

<?php get_footer(); ?>