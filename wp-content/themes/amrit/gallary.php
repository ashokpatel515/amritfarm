<?php /* Template Name: Gallary */ ?>

<?php get_header(); ?>
<div class="gray_color">
	<div class="bg_inner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/inner_comn_bg.png"></div>
	
	<div class="container feature_part after_b">
		<h3><span><?php the_title(); ?></span></h3>
		<?php photo_gallery(4); ?>
	</div>
	
</div>

<?php get_footer();