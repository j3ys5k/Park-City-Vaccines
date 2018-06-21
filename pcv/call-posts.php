<?php $query = new WP_Query( array('post_type' => $rType, 'post_status' => 'publish', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page'=> 3) );
while ($query->have_posts()) : $query->the_post(); ?>
	<li class="hp-articles__article col col-4 plr mobile-full m-pb--l">
    	<?php the_post_thumbnail('275x200', array('class'=>'hp-articles__article__img block responsive center')); ?>
    	<h2 class="hp-articles__article__heading">
        	<a href="<?php the_permalink(); ?>" class="newsLinks_header"><?php the_title(); ?></a>
    	</h2>
    	<?php $desc = get_the_excerpt(); ?>
    	<?php $desc = substr(strip_tags($desc),0,110); ?>
    	<?php $wCount = str_word_count($desc); ?>
    	<?php $wCount = ($wCount - 1); ?>
    	<p><span><?php the_date('M d, Y'); ?></span> - <?php //echo $desc; ?> <?php  echo wp_trim_words( $desc, $wCount ); ?></p>
    	<a class="learn-more-link" href="<?php the_permalink(); ?>">
        	<span class="icon-lml no-ml"></span>Read Full Story
    	</a>
	</li>
<?php endwhile; wp_reset_query(); ?>



<?php $query = new WP_Query(array('posts_per_page'=> 3) );
while ($query->have_posts()) : $query->the_post(); ?>
    
    <h3 class="">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

<?php endwhile; wp_reset_query(); ?>