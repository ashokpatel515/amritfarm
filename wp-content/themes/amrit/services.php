<?php /* Template Name: services */ ?>

<?php get_header(); ?>
<div class="gray_color feature_part after_b">

	<div class="bg_inner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/inner_comn_bg.png"></div>

	<div class="service_first_sec">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3><span><?php the_title(); ?></span></h3>
						
						<p><?php the_field ('service_frst_info')?></p>							
						
						<div class="col-md-4 col-sm-4 col-xs-12 box">
							<p><?php the_field ('first_box')?></p>
							<div class="icn_bg"><i class="fas fa-cubes"></i></div>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12 box">
							<p><?php the_field ('sec_box_content')?></p>
							<div class="icn_bg"><i class="fas fa-bath"></i></div>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12 box">
							<p><?php the_field ('third_box_content')?></p>
							<div class="icn_bg"><i class="fas fa-coffee"></i></div>
						</div>
					</div>
				</div>
			</div>		
	</div>

	<div class="service_secound_sec">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<h4><?php the_field ('classic')?></h4>							
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php $image = get_field('service_img_1'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php $image = get_field('service_img_2'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php $image = get_field('service_img_3'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php $image = get_field('service_img_4'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php $image = get_field('service_img_5'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php $image = get_field('service_img_6'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
					</div>
				</div>
			</div>		
	</div>
	
	<div class="service_third_sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					
						<div class="col-md-6 col-sm-6 col-xs-12">
							<?php $image = get_field('left_image_first_row'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p><?php the_field ('right_content_first_row')?> </p>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p><?php the_field ('left_content_second_row')?> </p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<?php $image = get_field('right_image_secound_row'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						
					</div>
				</div>
			</div>		
	</div>
	<div class="bg_foot_img"><img src="<?php echo get_template_directory_uri(); ?>/images/s_footer_img.png"></div>
</div>
<?php get_footer();