
<?php get_header(); ?>
<div class="container pt--l pb clear">
	<div class="col-9-l col-full">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<h4><?php the_time('F jS, Y'); ?></h4>
		<?php the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
	<div class="col-3-l col-full">
		<?php   get_sidebar(); ?> 
	</div>

</div>

 <?php   get_footer(); ?> 