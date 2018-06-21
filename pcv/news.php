
<?php /* Template Name: News*/ ?>
<?php get_header(); ?>
<div class="container pt--l pb">
	<h1>News</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<h4><?php the_time('F jS, Y'); ?></h4>
	<?php the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

	<?php   get_sidebar(); ?> 

</div>

 <?php   get_footer(); ?> 