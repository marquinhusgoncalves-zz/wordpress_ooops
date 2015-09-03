<?php
/**
 * @package OOOPS
 */

get_header(); ?>

	<div class = "bg-padrao bg-decoracao">

		<div id = "blog" class = "container">

		<div class="hit-the-floor">Nossas Festas</div>

			<?php 
				$args = array(
						'cat'				=> 1,
						'posts_per_page'	=> 5,
						'orderby'			=> 'post_date',
						'order'				=> 'DESC',
						'post_status'		=> 'publish'
				);
				$temp = $wp_query;  // assign orginal query to temp variable for later use
				$wp_query = null;
				$wp_query = new WP_Query($args);
				if( have_posts() ) : 
				while ($wp_query->have_posts()) : $wp_query->the_post();

				get_template_part( 'content-list', get_post_format() );

				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page' ),
					'next_text'          => __( 'Next page' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página' ) . ' </span>',
				) );

			?>

			<?php endwhile;
			else :
				echo '';
				endif;
				?>

		</div> <!-- .container -->

	</div> <!-- .bg_padrao -->
	
<?php get_footer(); ?>