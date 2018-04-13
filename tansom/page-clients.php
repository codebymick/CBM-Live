<?php
get_header();
?>


  <div id="content" class="clients blk outer">
    <div class="titlebar">  </div>
      <div class="sponsors inner">
        <h1>Our clients</h1>
        <p class="boxed">Tansom works with leaders in animation and visual effects for film, television, and special venue attaction.</p>
        <!--<?php
      $quotes = new WP_Query(array(
        'post_type' => 'Sponsors',
        'order_by' => 'title',
        'order' => 'ASC'
      )); if( $quotes->have_posts() ) : while( $quotes->have_posts() ) : $quotes->the_post();
      ?>
      <div class="sponsor">

        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'alignleft')); } else {} ?>

      </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>-->

		<h1>What they say...</h1>

			<div class="post-box">
        <?php if( have_rows('quote') ): while ( have_rows('quote') ) : the_row();?>
          <div class="quote">
            <q><?php the_sub_field('feedback'); ?></q>
            <p class="author"><?php the_sub_field('client_id')?>, <?php  the_sub_field('location'); ?></p>
          </div>
          <?php endwhile;else:endif; ?>

			</div>

  	</div>
	</div>


  <?php get_footer(); ?>
