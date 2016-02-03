<?php get_header() ?>
<div class="bg-blog decoracao">
  <div class="wrap">
    <h1 class="text-effect">
      Decoração
      
    </h1><?php $args = array( 'cat' => 2, 'posts_per_page' => 5, 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish' ) ?><?php $temp = $wp_query ?><?php $wp_query = null ?><?php $wp_query = new WP_Query($args) ?><?php if( have_posts() ) : ?><?php while ($wp_query->have_posts()) : $wp_query->the_post() ?><?php get_template_part( 'content-list', get_post_format() ) ?><?php the_posts_pagination( array( 'prev_text' => __( 'Previous page' ), 'next_text' => __( 'Next page' ), 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página' ) . ' </span>', ) ) ?><?php endwhile ?><?php else : ?><?php echo '' ?><?php endif ?>
  </div>
</div><?php get_footer() ?>