<?php /* Template Name: Homepage*/ ?>
<?php // this is the real homepage template.  Overwrites home and index.php

get_header(); ?>

<div class="homepage">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					
					<?php the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
					
			
		
	<?php endif; ?>

</div>

<?php get_footer(); ?>
