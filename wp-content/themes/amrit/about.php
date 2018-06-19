<?php /* Template Name: Aboutus */ ?>

<?php get_header(); ?>
<div class="gray_color">

	<div class="bg_inner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/inner_comn_bg.png"></div>
	
	<div class="about_first">
		<div class="container container feature_part after_b">
			<div class="row">
				<h3><span><?php the_title(); ?></span></h3>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php $image = get_field('first_left_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" style="margin: 0 auto;" alt="<?php echo $image['alt']; ?>" /><?php endif; ?> 
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h2><?php the_field ('first_right_title')?> </h2>
					<p><?php the_field ('first_right_content')?></p>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="about_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h2><?php the_field ('secound_left_title')?></h2>
					<p><?php the_field ('secound_left_content')?></p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php $image = get_field('secound_right_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="about_third">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php $image = get_field('third_left_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h2><?php the_field ('third_right_title')?> </h2>
					<p><?php the_field ('third_right_content')?></p>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="about_fourth">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<h2><?php the_field ('first_pro_title')?></h2>
					<p><?php the_field ('first_pro_title')?></p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php $image = get_field('slider_image_1'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
				</div>
			</div>	
		</div>
	</div>
	
</div>
<?php get_footer();