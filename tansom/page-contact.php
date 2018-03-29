<?php
get_header();

$content = explode("<!--more-->", $post->post_content);
?>


  <div id="content" class="contact blk outer">
      <div class="titlebar"></div>
      <div class="inner">
        <?php echo apply_filters('the_content', $content[0]); ?>

      </div>
  </div>

  <?php get_footer(); ?>
