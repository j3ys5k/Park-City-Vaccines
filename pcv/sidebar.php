

	<h3 id="categories"><?php _e('Categories:'); ?></h3>
		<ul>
			<?php wp_list_cats(); ?>
		</ul>
	 


	 <h3 id="archives"><?php _e('Archives:'); ?></h3>
	     <ul>
			<?php wp_get_archives('type=monthly'); ?>
	     </ul>
     


 