<article class="article">
    <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <a href="<?php the_permalink();?>" class="article-image-wrapper">
    	<?php 
	    	if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		?>
	</a>
    <div class="article-excerpt">
       <?php the_excerpt();?>
    </div>
    <a href="<?php the_permalink();?>" class="more-link button">Read more</a>
</article>