<?php
global $evos_extra_options;

foreach ( $evos_extra_options['evos_modules'] as $key => $value ) :
	if(  )
		get_template_part('modules/module', $value['module_title'] );
	
endforeach;

// Featured block
if( get_theme_mod('evos_display_featured_area') ) : ?>
              
<?php endif; ?>

<?php 
// Chosen posts
if( get_theme_mod('evos_display_featured_posts') ) : ?>
              
<?php endif; ?>

<?php
// Banner section
if( get_theme_mod('evos_display_custom_banner') ) : ?>
              
<?php endif; ?>

<?php
// Logos section
if( get_theme_mod('evos_display_logos_section') ) : ?>
              
<?php endif; ?>

<?php
// Team section
if( get_theme_mod('evos_display_team') ) : ?>
              
<?php endif; ?>

<?php
// Portfolio
if( get_theme_mod('evos_display_portfolio') ) : ?>
              
<?php endif; ?>

<?php
// Testimonials
if( get_theme_mod('evos_display_testimonials') ) : ?>
              
<?php endif; ?>