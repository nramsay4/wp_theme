<?php get_header(); ?>

	
	
	<div class="page-header wa-header" style="background: url('/wp-content/uploads/poly.jpg') no-repeat center top; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: cover;">
  	<div class="page-title">
    	 <h1><img src="/wp-content/uploads/wa-geo-header.png" width="400"/></h1>
  	</div>
	</div>
	
	<div class="main-container">
  	<div class="content">
    	
    	 <h1 class="page-header-txt"><?php the_author(); ?></h1>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
           
           <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    				<div class="post-excerpt">
    					<?php the_excerpt('Read more ...'); ?>
    		    </div>
            <hr />
    			
    		<?php endwhile; else: ?>
    		</div>
    			<div class="no-results">
    				<p>
    					We're sorry, no results were found.
    				</p>
    			</div><!--noResults-->
    		<?php endif; ?>
    		
    		
    		<div class="newer-older">
    			<div class="older">
    				<?php next_posts_link('Older<span></span>'); ?>
    			</div><!--.older-->
    			<div class="newer">
    				<?php previous_posts_link('<span></span> Newer'); ?>
    			</div><!--.older-->
    		</div><!--.newer-older-->

        
  	</div>
	</div>

    
     
    
    
    
    
 		
	

	
<?php get_footer(); ?>
