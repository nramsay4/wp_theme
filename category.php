<?php get_header(); ?>

<?php 
  	
  	if (!empty(get_field('page_image'))) {
    $page_image = get_field('page_image');
  }
   else { 
    $page_image = "/wp-content/uploads/friends-of-estonia.jpg";
  } 
  ?>
<div class="page-header" style="background: url('<?php echo $page_image; ?>') no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;"></div>

		
			<div class="main-container">
  	<div class="content">

			<h1><?php single_cat_title(); ?></h1>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="category-item clearfix">
					
					<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('thumbnail'); echo '</div>'; ?>
					<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<p><?php the_time('F j, Y'); ?></p>

					<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
				
				<hr />

			<?php endwhile; else: ?>
				<div class="no-results">
					<h2>Sorry, no results were found</h2>
					<p>
						Please try another search term.
					</p>
				</div><!--noResults-->
			<?php endif; ?>
			
			<div class="newer-older clearfix">
				<div class="older" style="float:left">
					<?php next_posts_link('<span class="fa fa-angle-left"></span> Older Posts'); ?>
				</div><!--.older-->
				<div class="newer" style="float:right">
					<?php previous_posts_link('Newer Posts <span class="fa fa-angle-right"></span>'); ?>
				</div><!--.older-->
			</div><!--.newer-older-->
		
			
		</div><!-- #content -->
			</div>
		
		</div> <!-- .thick-column -->
	</div><!-- .content-inner -->
</div> <!-- .page-wrapper -->

<?php get_footer(); ?>
