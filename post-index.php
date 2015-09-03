<?php 
		$args = array(
				'posts_per_page'	=> 3,
				'orderby'			=> 'post_date',
				'order'				=> 'DESC',
				'post_status'		=> 'publish'
		);
		$temp = $wp_query;  // assign orginal query to temp variable for later use
		$wp_query = null;
		$wp_query = new WP_Query($args);
		if( have_posts() ) : 
		while ($wp_query->have_posts()) : $wp_query->the_post();
	?>
	
	<div class = "post-small col-sm-4">
		
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<a href = "<?php the_permalink(); ?>" rel = "bookmark" style = "display: block">
			<div class = "img-small" style = "background:url('<?php echo $url; ?>') no-repeat"></div>
		</a>

		<a class = "title-small" href = "<?php the_permalink(); ?>" rel = "bookmark"><?php echo wp_trim_words( get_the_title()); ?></a>
		<p><?php the_excerpt(); ?></p>

	</div>

	<?php endwhile;
	else :
		echo '';
		endif;
		?>