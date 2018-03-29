<?php
get_header();

?>


  <div id="content" class=".search blk outer">
    <div class="titlebar">  </div>
      <div class="inner">
        
        		
        			<div class="deco"></div>
        			<div class="text">
        				<h1>Your search for:<br>"<?php echo get_search_query(); ?>"</h1>
        				<p>
        				<?php
        					global $wp_query;
        					echo '<strong>'.$wp_query->found_posts.' Results</strong> found...';
        				?>
        				</p>
        			</div>
        			
        		
        			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        			<div class="result">
        				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        				<div class="text">
        					<?php the_excerpt(); ?>
        					<p><a href="<?php the_permalink(); ?>">To Results</a></p>
        				</div>
        			</div>
        			<?php endwhile; endif; ?>
        			
        		
      </div>
  </div>
  
  <?php get_footer(); ?>