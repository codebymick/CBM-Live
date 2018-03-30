<?php get_header(); ?>
  <div id="content" class="services blk outer">
    <div class="titlebar"></div>

      <?php $i=2; if( have_rows('section') ):  while ( have_rows('section') ) : the_row(); ?>
      <div class="section clearfix video">
        <div class="fullscreen-bg">
          <video muted poster="<?php the_sub_field('cover_image');?>" id="vid<?php echo $i ;?>" playsinline muted loop width="100%" class="fullscreen-bg">
            <source src="<?php the_sub_field('video');?>" type="video/<?php the_sub_field('video_type');?>">
          </video>
        </div>
        <div class="inner">
          <div class="title">
            <h1><?php the_sub_field('title');?></h1>
            <div id="play-pause<?php echo $i ;?>" class="play-btn"></div>
          </div>
        </div>
      </div>
      <?php  $i++;endwhile;endif; ?>
  </div>

  <?php get_footer(); ?>
