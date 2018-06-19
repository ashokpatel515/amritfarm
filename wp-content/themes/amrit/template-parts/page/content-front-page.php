<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="container-fluid banner_full_slide block" id="section-1">
		<?php echo ctslider_slider_template( 3 ); ?>
            
		<div class="container-fluid rw featureimg" id="section-2">	
			<div class="container feature_part after_b">
				<h3><span><?php the_field ('titel_salient')?></span></h3>
				<div class="row pdt">
					<div class="container">
					<div class="col-md-6 col-sm-12 col-lg-6">
						<div class="row wh_l">
							<div class="col-md-6 col-sm-6 col-lg-6 rm-part rw">
								<?php $image = get_field('slider_image_1'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?><a class="rm" href="#">Read More</a>							
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 one_rw">
								<h4 class="sfh"><?php the_field ('first_pro_title')?></h4>
								<p class="sfh2"><?php the_field ('first_pro_content')?></p>
							</div>
						</div>
						<div class="row wh_l">
							<div class="col-md-6 col-sm-6 col-lg-6 rw"><?php $image = get_field('secound_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?><a class="rm" href="#">Read More</a>						
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 one_rw">
								<h4 class="sfh"><?php the_field ('sec_pro_title')?></h4>
								<p class="sfh2"><?php the_field ('sec_pro_content')?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-6 col-lg-6 mn_top">
						<div class="row wh_l2">
							<div class="col-md-6 col-sm-6 col-lg-6 rw one_rw2">
								<h4 class="sfh0"><?php the_field ('third_pro_title')?></h4>
								<p class="sfh22"><?php the_field ('third_pro_content')?></p>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 rw rw2"><?php $image = get_field('third_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>	<a class="rm" href="#">Read More</a>						
							</div>							
						</div>
						<div class="row wh_l2"> 
							<div class="col-md-6 col-sm-6 col-lg-6 rw one_rw2">
								<h4 class="sfh0"><?php the_field ('forth_pro_title')?></h4>
								<p class="sfh22"><?php the_field ('forth_pro_content')?></p>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-6 rw rw2"><?php $image = get_field('fourth_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>	<a class="rm" href="#">Read More</a>						
							</div>
						</div>
					</div>
					</div>	
				</div>		
			</div>
				<div class="featurep">
					<h3><a class="text-center mn_top2" href="#">Read More</a></h3>
				</div>
				
		</div><!--end full_about_part-->
		<div class="container-fluid celebration_part">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
						<div class="row">
					  <div class="tab-content clearfix">
						<div class="carousel-inner" role="listbox">
						  <!-- slider item-->
						  <div class="item active" role="listbox">							
						  <?php $image = get_field('thumb_slide_1'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						  </div>
						  <!-- slider item--> 
						  <div class="item">							
						   <?php $image = get_field('thumb_slide_2'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						  </div>
						  <!-- slider item-->
						  <div class="item">
							 <?php $image = get_field('thumb_slide_3'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						  </div>							<!-- slider item-->
						  <div class="item">
							 <?php $image = get_field('thumb_slide_4'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						  </div>

						  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left extra_left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right extra_right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					  </div>
					  </div>
					
				</div>	
				</div>
				<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5 col-md-offset-1 col-sm-offset-1 col-lg-offset-1 tab_part after_b Weekend4">  
					<h3><span><?php the_field ('title_cele')?></span></h3>
					  <ul class="extra_tab alt-font text-uppercase letter-spacing-1 no-border font-weight-600 text-center" role="tablist"> 
						<li class="extra_tab" id="tab1" data-target="#myCarousel" data-slide-to="0" class="active"><a href="#tab1" role="tab" data-toggle="tab" class=""><span><i class="fa fa-smile-o cele_icon" aria-hidden="true"></i></span><?php the_field ('button1')?></a>
						</li>
						<li class="extra_tab" id="tab2" data-target="#myCarousel" data-slide-to="1"><a href="#tab2" role="tab" data-toggle="tab" class=""><span><i class="fa fa-birthday-cake  cele_icon2" aria-hidden="true"></i></span><?php the_field ('button2')?> </a>
						</li>
						<li class="extra_tab" id="tab3" data-target="#myCarousel" data-slide-to="2"><a href="#tab3" role="tab" data-toggle="tab" class=" "><span><i class="fa fa-microphone cele_icon3" aria-hidden="true"></i></span><?php the_field ('button3')?></a>
						</li>
						<li class="extra_tab" id="tab4" data-target="#myCarousel" data-slide-to="3"><a href="#tab4" role="tab" data-toggle="tab" class=""><span><i class="fa fa-heart cele_icon4" aria-hidden="true"></i></span><?php the_field ('button4')?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="container-fluid tourist-part" id="section-3">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 after_b Weekend3 rw">
						
						<h3><span><?php the_field ('tourist_main_title')?></span></h3>
						
						 <?php $image = get_field('tourist_img1'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						<div class="">
						<div class="col-md-6 col-sm-6 col-lg-6 rw">
						<?php $image = get_field('tourist_img_2'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 rw">
						<?php $image = get_field('tourist_img_3'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
						</div>				
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6">
						<div class="row lict_part">
						<h4 class="lict"><span><?php the_field ('learn')?></span> <?php $image = get_field('tourist_img_4'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></h4>
						 
						 <?php $image = get_field('tourist_img_5'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
						</div>
					</div>					
				</div>
			</div>
		</div><!--end tourist-part-->
		<div class="container-fluid educational-part">
			<div class="container rw" id="section-5">
				<div class="col-md-7 col-sm-7 col-lg-7 rw after_b Weekend2">				
					<h3 class=""><span><?php the_field ('education_titel')?></span></h3>
					<div id="accordion">
					  <div class="card">
						<div class="card-header ch1">
						  <a class="card-link col-b" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							<div><?php the_field ('edu_tab1')?><i class="fa fa-male edn_i" aria-hidden="true"></i></div>
						  </a>
						</div>
						<div id="collapseOne" class="collapse">
						  <div class="card-body coll_p">
							<?php the_field ('tab_content_1')?>
							<a href="#">Read More</a>
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header ch1">
						  <a class="collapsed card-link col-b" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							<div class="font_img1"><?php the_field ('edu_tab2')?> <img src="<?php echo get_template_directory_uri(); ?>/images/fonts.png" alt="" /></div>
						  </a>
						</div>
						<div id="collapseTwo" class="collapse">
						  <div class="card-body coll_p">
						  <?php the_field ('tab_content_2')?>
							<a href="#">Read More</a>
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header ch1">
						  <a class="collapsed card-link col-b" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							<div><?php the_field ('edu_tab3')?><i class="fa fa-recycle edn_i" aria-hidden="true"></i></div>
						  </a>
						</div>
						<div id="collapseThree" class="collapse">
						  <div class="card-body coll_p">
							<?php the_field ('tab_content_3')?>  <a href="#">Read More</a>
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header ch1">
						  <a class="collapsed card-link col-b" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							<div><?php the_field ('edu_tab4')?><i class="fa fa-road edn_i" aria-hidden="true"></i></div>
						  </a>
						</div>
						<div id="collapseFour" class="collapse">
						  <div class="card-body coll_p">
							<?php the_field ('tab_content_4')?>
							  <a href="#">Read More</a>
						  </div>
						</div>
					  </div>
					</div>
				</div>			 
				<div class="col-md-5 col-sm-5 col-lg-5">									
				</div>
			</div><!-- end container --> 			
		</div><!-- end container --> 
		<div class="footer-top" id="section-6"><!-- start footer -->	
			<div class="container after_b Weekend mn_top">
			<h3 class=""><span><?php the_field ('weekend_trip_title')?></span></h3>
				<div class="row">
					<div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-lg-11 col-lg-offset-1 rw">
						<ul class="wm-tips">
							<li><a href="#"><?php the_field ('sq_meter')?></a></li>
							<li><a href="#"><?php the_field ('available_rooms')?></a></li>
							<li><a href="#"><?php the_field ('inr-nights1')?></a></li>
							<li><a href="#"><?php the_field ('inr-nights2')?></a></li>		
							<li class="extra_class"><a href="#"><?php the_field ('site_map')?></a></li>								
						</ul>
					</div>
					<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 f-top">
						<?php $image = get_field('map_image'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
					</div>
				</div>
			</div>
		</div><!-- end footer top part -->  