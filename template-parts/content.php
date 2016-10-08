<article <?php post_class('main-content'); ?>>
<h1><?php echo evos_get_title();?></h1>
<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); 
			the_content();
		endwhile;
	endif;
?>
</article>