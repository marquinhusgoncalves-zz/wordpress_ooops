<?php get_header() ?>
<div id="screen">
  <div class="text-index flex-align">
    <h1 class="text-effect">muito espaço<br/>para realizar<br/>muita festa<br/><br/><span><i class="fa fa-arrow-down"></i></span></h1>
  </div>
  <div id="video-viewport">
    <video autoplay="" webkit-playsinline="" loop="" width="640" height="360">
      <source src="<?php bloginfo('stylesheet_directory');?>/video/OOOPS.mp4" type="video/mp4"/>
      <source src="<?php bloginfo('stylesheet_directory');?>/video/OOOPS.ogv" type="video/ogv"/>
      <source src="<?php bloginfo('stylesheet_directory');?>/video/OOOPS.webm" type="video/webm"/>
    </video>
  </div>
</div>
<div id="post-index">
  <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sus!4v1448910513409!6m8!1m7!1so97HnmopoNUAAAQpdznhFw!2m2!1d-23.63061721377928!2d-46.54719489161931!3f279.1042839945417!4f-13.995182356664628!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe><?php $args = array( 'posts_per_page' => 2, 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish' ); ?><?php $temp = $wp_query; $wp_query = null; $wp_query = new WP_Query($args); ?><?php if( have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  <div class="post-small"><?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?><a href="<?php the_permalink(); ?>" rel="bookmark" style="display: block">
      <div style="background:url('<?php echo $url; ?>') no-repeat" class="img-small"></div></a><a href="<?php the_permalink() ?>" rel="bookmark" class="title-small"><?php echo htmlspecialchars(wp_trim_words( get_the_title(), 5, ' ...'), ENT_QUOTES, 'UTF-8'); ?></a>
    <p><?php echo htmlspecialchars(wp_trim_words( get_the_excerpt(), 40, '...'), ENT_QUOTES, 'UTF-8'); ?>
    </p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn"><?php _e( 'Veja mais' ) ?></a>
  </div><?php endwhile ?><?php else : echo ''; endif; ?>
</div><?php get_footer() ?>