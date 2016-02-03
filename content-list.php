<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<article id="post-<?php the_ID(); ?>">
  <div class="post-small"><?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?><a href="<?php the_permalink(); ?>" rel="bookmark" style="display: block">
      <div style="background:url('<?php echo $url; ?>') no-repeat" class="img-small"></div></a><a href="<?php the_permalink() ?>" rel="bookmark" class="title-small"><?php echo htmlspecialchars(wp_trim_words( get_the_title(), 5, ' ...'), ENT_QUOTES, 'UTF-8'); ?></a>
    <p><?php echo htmlspecialchars(wp_trim_words( get_the_excerpt(), 15, '...'), ENT_QUOTES, 'UTF-8'); ?>
    </p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn"><?php _e( 'Veja mais' ) ?></a>
  </div>
</article>