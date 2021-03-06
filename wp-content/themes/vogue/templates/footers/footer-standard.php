<footer id="colophon" class="site-footer site-footer-standard" role="contentinfo">
	
	<div class="site-footer-widgets">
        <div class="site-container">
            <?php if ( is_active_sidebar( 'vogue-site-footer-standard' ) ) : ?>
	            <ul>
	                <?php dynamic_sidebar( 'vogue-site-footer-standard' ); ?>
	            </ul>
	        <?php else : ?>
	        	<div class="site-footer-no-widgets">
	        		<?php _e( 'Add your own widgets here', 'vogue' ); ?>
	        	</div>
	    	<?php endif; ?>
            <div class="clearboth"></div>
        </div>
    </div>
    
    <?php if ( get_theme_mod( 'vogue-footer-bottombar', false ) == 0 ) : ?>
		
		<div class="site-footer-bottom-bar <?php echo ( get_theme_mod( 'vogue-header-layout' ) == 'vogue-header-layout-two' ) ? sanitize_html_class( 'layout-circles' ) : sanitize_html_class( 'layout-plain' ); ?>">
		
			<?php printf( __( '<div class="site-container"><div class="site-footer-bottom-bar-left">Design and Development by %1$s', 'erickaallen'), '<a href="https://erickaallen.com/">Ericka Allen</a></div><div class="site-footer-bottom-bar-right">' ); ?>
	                
		            <?php wp_nav_menu( array( 'theme_location' => 'footer-bar','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
		            
		            <?php if ( ! get_theme_mod( 'vogue-footer-hide-social' ) ) : ?>
		            
		            	<?php get_template_part( '/templates/social-links' ); ?>
		            	
		            <?php endif; ?>
	                
		        </div>
		        
		    </div>
			
	        <div class="clearboth"></div>
		</div>
		
	<?php endif; ?>
	
</footer>