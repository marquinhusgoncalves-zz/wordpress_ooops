<?php get_header(); ?>
<div class="bg-blog">
  <div class="container">
    <div class="wrap">
      <h1 class="entry-title"><?php the_title(); ?>
      </h1>
      <div class="entry-meta"><?php $categories_list = get_the_category_list( __( ', ' ) ); ?><?php if ( $categories_list ) : ?><span id="meta-post" class="cat-links"><i class="fa fa-folder-open-o"><?php printf( __( ' %1$s' ), $categories_list ); ?></i></span><?php endif ?>
      </div>
      <div class="entry-content"><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><?php the_content(); ?><?php endwhile; ?>
      </div>
    </div>
  </div>
</div><?php get_sidebar() ?><?php get_footer() ?>