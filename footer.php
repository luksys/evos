	</div>
	</main>
		<footer class="mastfooter">
		    <div class="c">
		        <div class="footer-inner grid">
		            <div class="grid-1-3 grid-item">
		            <?php
		            	if( is_active_sidebar( 'footer-widget-area-1' ) ) :
					        dynamic_sidebar( 'footer-widget-area-1' );
					    endif;
				    ?>
		            </div>
		            <div class="grid-1-3 grid-item">
		                <?php
			            	if( is_active_sidebar( 'footer-widget-area-2' ) ) :
						        dynamic_sidebar( 'footer-widget-area-2' );
						    endif;
					    ?>
		            </div>
		            <div class="grid-1-3 grid-item">
		                <?php
			            	if( is_active_sidebar( 'footer-widget-area-3' ) ) :
						        dynamic_sidebar( 'footer-widget-area-3' );
						    endif;
					    ?>
		            </div>
		        </div>
		    </div>
		    <div class="footer-bottom">
		        <div class="c">
		            <div class="copyright"><p>Developed by Evaldas</p></div>
		            <?php wp_nav_menu( array( 'theme_location' => 'footer_bottom_menu' ) ); ?>
		        </div>
		    </div>
		    <a href="#" id="scroll-to-top" class="scroll-to-top"><i class="fa fa-arrow-up"></i></a>
		</footer>
		<?php wp_footer(); ?>
		<form class="search-form-overlay" id="search-form-overlay">
			<a href="#" class="close-search"></a>
			<div class="form-inner">
				<input type="text" class="input-field" placeholder="Type to search...">
            	<input type="submit" class="submit-button" value="&#xe800;">
			</div>
        </form>

	</body>
</html>