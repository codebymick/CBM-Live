<?php get_header();$content = explode("<!--more-->", $post->post_content);?>


<div id="content">
  <?php $i=2; if( have_rows('section') ):  while ( have_rows('section') ) : the_row(); ?>
  <div class="section clearfix video">
    <div class="fullscreen-bg">
      <video muted poster="<?php the_sub_field('cover_image');?>" id="vid<?php echo $i ;?>" playsinline muted loop width="100%" class="fullscreen-bg">
        <source src="<?php the_sub_field('vimeo_link');?>" type="video/<?php the_sub_field('video_type');?>">
      </video>
    </div>
    <div class="inner">
      <div class="title">
        <h1><?php the_sub_field('title');?></h1>
        <div id="play-pause<?php echo $i ;?>" class="play-btn"></div>
      </div>
    </div>
  </div>
</div>
  <?php  $i++;endwhile;endif; get_footer(); ?>

<!--

  <div id="content" class="studio outer">
    <div class="titlebar"></div>
    <div class="section clearfix video">

      <?php echo apply_filters('the_content', $content[0]);?>
        <video muted poster="<?php bloginfo('template_directory');?>/images/studio/greenscreens.png" id="vid2" playsinline muted loop class="fullscreen-bg gs" width="100%">
          <source src="<?php the_field('greenscreens');?>" type="video/mp4">
        </video>
      <div class="inner">
        <div class="title">
          <h1>WALK THROUGH GREEN SCREENS</h1>
          <div id="play-pause2" class="play-btn"></div>
        </div>
      </div>
    </div>

    <div class="section clearfix video">
      <video muted poster="<?php bloginfo('template_directory');?>/images/studio/walkthru.png" id="vid3" playsinline muted loop class="fullscreen-bg wt" width="100%">
        <source src="<?php the_field('walkthru');?>" type="video/mp4">
      </video>
      <div class="inner">
        <div class="title">
          <h1>studio Walk Through</h1>
          <div id="play-pause3" class="play-btn"></div>
        </div>
      </div>
    </div>

    <div class="section clearfix video">
      <video muted poster="<?php bloginfo('template_directory');?>/images/studio/playcorner.png" id="vid4" playsinline muted loop class="fullscreen-bg" width="100%">
        <source src="<?php the_field('playcorner');?>" type="video/mov">
      </video>
      <div class="inner">
        <div class="title">
          <h1>PLAY CORNER</h1>
          <div id="play-pause4" class="play-btn"></div>
        </div>
      </div>
    </div>
  </div>-->


  <?php get_footer(); ?>
