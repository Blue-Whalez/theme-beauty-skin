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

			get_template_part('template-parts/service');

			get_template_part('template-parts/testimonials');

			get_template_part('template-parts/our-team');


		endwhile;

	endif; 
	
	?>

</main>

<?php get_footer(); ?>
