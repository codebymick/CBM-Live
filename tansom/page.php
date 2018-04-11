<?php
get_header();

$content = explode("<!--more-->", $post->post_content);
?>


  <div id="content" class="standard blk outer">
    <div class="titlebar">  </div>
      <div class="inner">
        <p><?php echo apply_filters('the_content', $content[0]); ?></p>

      </div>
  </div>

  <?php get_footer(); ?>
