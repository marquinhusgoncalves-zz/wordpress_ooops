<?php
/**
 * @package OOOPS
 */
?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<article class = "clearfix" id = "post-<?php the_ID(); ?>">

	<div class = "col-xs-12 col-md-6">
		<div class = "blog-img" style = "background: url(<?php echo $url; ?>)"></div>
	</div>

	<div class = "col-xs-12 col-md-6">
		<header class = "entry-header page-header">	
			<?php if ( 'post' == get_post_type() ) : ?>

				<div class = "entry-meta">  
					<h1 class = "entry-title"><?php echo wp_trim_words( get_the_title() ); ?></h1>
				</div>
				
			<?php endif; ?>
		</header>
	
		<div class = "entry-content">
			<?php the_excerpt(); ?>
			<a class = "btn btn-default" href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>"><?php _e( 'Veja mais' ); ?></a>
		</div>
	</div>

</article>	

