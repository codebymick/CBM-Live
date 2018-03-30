<?php
get_header();
?>
  <div id="content" class="clients blk outer">
    <div class="titlebar">  </div>
    <div class="post-entry">
    <div class="tri-col index">      <div class="boxes">
      <?php if (have_posts()) : ?>
      <?php $url = ($youtube = get_field('youtube')) ? $youtube : get_field('video'); ?>

      <?php while (have_posts()) : the_post(); ?>

    <div class="box">

    <div class="article">
      <a href="<?php the_permalink();?>">
      <h4><?php the_title(); ?></h4>
      </a>
      <p><?php the_date(); ?>  </p>
      <div class="excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>
  <?php   endwhile;endif;  ?>
</div>
</div>
</div>


  </div>


  <?php get_footer(); ?>
