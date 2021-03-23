<?php 
/* 
* Template Name: Home Template 
*/

get_header(); ?>

<main>

	<?php 
	if ( have_posts() ) :
		
		while( have_posts() ) : the_post();

			get_template_part('template-parts/hero');

			get_template_part('template-parts/cta');

		endwhile;

	endif; ?>

</main>

<?php get_footer(); ?>
