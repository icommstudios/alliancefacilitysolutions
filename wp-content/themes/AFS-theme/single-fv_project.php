<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('templates/facility/content', 'job-posting'); ?> 
<?php endwhile; ?>