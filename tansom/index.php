<?php
get_header();
?>


  <div id="content" class="clients blk outer">
    <div class="titlebar">  </div>
      <div class="sponsors inner">
        <h1>Our clients</h1>
        <p class="boxed">Tansom works with leaders in animation and visual effects for film, television, and special venue attaction.</p>
        <?php
      $quotes = new WP_Query(array(
        'post_type' => 'Sponsors',
        'order_by' => 'title',
        'order' => 'ASC'
      )); if( $quotes->have_posts() ) : while( $quotes->have_posts() ) : $quotes->the_post();
      ?>
      <div class="sponsor">

        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'alignleft')); } else {} ?>
  
      </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>

		<h1>What they say...</h1>

			<div class="post-box">
					<div class="boxes">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<div class="box">
							<div class="image-container">
							<?php if ( has_post_thumbnail() ) {?>
							<a href="<?php the_permalink();  ?>">

							<?php the_post_thumbnail('full'); } else { ?>
							<img class="fbimg" src="<?php bloginfo('template_directory'); ?>/images/fallback.png" alt="<?php the_title(); ?>" />
							<?php } ?></a>
						</div>
			      		<div class="article">
				      	
				  	
				      	<a href="<?php the_permalink();?>">
									<h4><?php the_title(); ?></h4>
								</a>
				      	<p><?php the_date(); ?>  </p>
				        	<p><?php the_excerpt(); ?></p>
				    	</div>   
				  	</div> 
				  	<?php   endwhile;endif;  ?>  
					</div>
				<div class="clearfix"></div>
    		<div class="pagination">
      		<?php posts_nav_link();?>
    		</div>
    		<div class="clearfix">
					<ol class="commentlist">
		<?php
			//Gather comments for a specific page/post 
			$comments = get_comments(array(
				'post_id' => '14',
				'status' => 'approve' //Change this to the type of comments to be displayed
			));

			//Display the list of comments
			wp_list_comments(array(
				'per_page' => 10, //Allow comment pagination
				'reverse_top_level' => false //Show the oldest comments at the top of the list
			), $comments);
		?>
	</ol></div>   
			</div>

  	</div>
	</div>
  

  <?php get_footer(); ?>
