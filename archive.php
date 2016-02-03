<?php get_header() ?>
<div class="bg-blog">
  <div class="container">
    <div class="wrap">
      <h1 class="text-effect title-page">
        Arquivo
        
      </h1><?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?><?php get_template_part( 'content-list', get_post_format() ); ?><?php endwhile; ?><?php the_posts_pagination( array( 'prev_text' => __( 'Previous page' ), 'next_text' => __( 'Next page' ), 'before_page_number' => ' <span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',) ) ?><?php else : ?><?php get_template_part( 'content', 'none' ); ?><?php endif; ?>
    </div>
  </div>
</div><?php get_sidebar() ?><?php get_footer() ?>