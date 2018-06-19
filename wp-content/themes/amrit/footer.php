<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="footer_bottom"><!-- start footer1 -->
			<div class="container">
				<div class="row">
					<div class="pull-left">					
						<div class="">	
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							 <?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				
				?>
						</div><!-- /.navbar-collapse -->						 
					</div>
					<div class="soc_icons pull-right">
						<ul class="list-unstyled text-center wow slideInRight f-bottom2">
							<li><a href="#"><i class="fa fa-facebook i1"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter i2"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>						
						</ul>
					</div>
					
				</div>
			</div>	
		</div><!-- end footer part -->
				
			<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			
		</footer><!-- #colophon -->
		
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
