<article <?php post_class('main-content'); ?>>

<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); 
			the_content();
		endwhile;
	endif;
?>
</article>