<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 */
?>

<article id = "post-<?php the_ID(); ?>">
	<div class = "container">

  	<div class = "col-sm-4" style = "height: 100%; display: table">

			<div style = "display: table-cell; vertical-align: middle">

				<div class = "post-inner-content" style = "background: rgba(255,255,255,0.75); padding: 20px">
					
					<header class = "entry-header page-header" style = "margin: 0 !important;">
						<?php if ( 'post' == get_post_type() ) : ?>
							<h1 class = "entry-title" style = "margin: 10px 0 !important;">
								<a href = "<?php the_permalink(); ?>" rel = "bookmark"><?php echo wp_trim_words( get_the_title(), 15 ); ?></a>
							</h1>
						<?php endif; ?>
					</header>

					<div class = "entry-content" style = "margin: 0 !important;">
						<?php the_excerpt(25); ?>
						<div style = "display: inline-block" style = "margin-top: 7px">
							<a class = "btn btn-default read-more" href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>"><?php _e( 'Leia mais' ); ?></a>
						</div>				
					</div>
					
				</div>
			</div>
	  </div>

	</div>
</article><!-- #post-## -->
