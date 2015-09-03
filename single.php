<?php
/**
 * The Template for displaying all single posts.
 *
 * @package OOOPS
 */
get_header(); ?>

<div class = "bg-padrao" style = "background: slategrey; padding-top: 120px">
	
	<div class = "container" style = "padding: 0 15px">

		<h1 class = "entry-title"><?php the_title(); ?></h1>

		<div class = "entry-meta">
			<?php
				$categories_list = get_the_category_list( __( ', ' ) );
				if ( $categories_list ) :
				?>
					<span id = "meta-post" class = "cat-links"><i class = "fa fa-folder-open-o"></i>
						<?php printf( __( ' %1$s' ), $categories_list ); ?>
					</span>
				<?php endif; // End if categories ?>			
		</div><!-- .entry-meta -->
		
		<div class = "entry-content" style = "padding: 50px 0">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
		</div><!-- .entry-content -->

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>