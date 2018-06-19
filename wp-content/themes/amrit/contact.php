<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<div class="gray_color">
	<div class="bg_inner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/inner_comn_bg.png"></div>
	<div class="contact_first">	
		<div class="container feature_part after_b">
			<div class="row">
				<div class="col-md-12">
					<h3><span><?php the_title(); ?></span></h3>
					<p><?php the_field ('contact_info')?></p>				
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact_sec">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 right_img">
					<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact form 1"]' ); ?>
				</div>
				<div class="col-md-4">
					<h5>Address</h5>
					<p><?php the_field ('addres')?></p>	
					<p>Phone No : <?php the_field ('phone_number')?></p>
					<p>Fax No : <?php the_field ('fax_number')?></p>
					<p>Email : <a href="mailto:<?php the_field ('email_link')?>"><?php the_field ('email')?></a></p>

				</div>	
			</div>
		</div>
	</div>
	
	<div class="contact_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.4528149594153!2d77.09776911560202!3d28.556162382448004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b85fc2a2d89%3A0xbef376182c43ed9d!2sIndira+Gandhi+International+Airport!5e0!3m2!1sen!2sin!4v1525784909254" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
</div>
<?php get_footer();