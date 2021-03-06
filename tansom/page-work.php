<?php
get_header();
?>
  <div id="content" class="work outer">
    <div class="drinner">
        <p class="titlebar">Our Works...</p>
      <?php
		$quotes = new WP_Query(array(
			'post_type' => 'Works',
      'order_by' => 'title',
      'order' => 'ASC'
		)); if( $quotes->have_posts() ) : while( $quotes->have_posts() ) : $quotes->the_post();
		?>
    <div class="vidBox">
      <a class="video">
        <div class="iframeo"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } else { ?><?php the_content();} ?></div>
      </a>
    </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
  <?php get_footer(); ?>
