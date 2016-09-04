<?php get_header();?>
    <?php if( is_home() ) : ?>
        <?php get_template_part('template-parts/content', 'home');?>
    <?php else : ?>
        <?php get_template_part('template-parts/content');?>
    <?php endif; ?>
    <?php get_sidebar();?>
<?php get_footer();?>