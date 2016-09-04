<section class="articles-wrapper">

<?php 
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); 
		get_template_part('item');
	endwhile;
endif;
?>
           
<!-- 
    <div class="mult-article-wrapper grid">
       
    </div> -->

   <!--  <a href="#" class="back-link"><i class="fa fa-angle-left"></i>Newer posts</a>
    <a href="#" class="next-link">Older posts<i class="fa fa-angle-right"></i></a> -->
<!--     <a href="#" class="load-more">Load more</a> -->
</section>