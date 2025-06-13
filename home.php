<?php get_header(); ?>
 

<style>
  #all-resources {
    padding: 50px 0;
  }
  #all-resources .content {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr; 
    grid-gap: 50px;
  }
   .resource  {
    background: #EFEFEF;
    text-decoration: none !important;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }
  .resource h3 {
    padding: 20px;
    font-weight: 500;
  }
  .resource div {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
  }
  
</style>

<div id="all-resources">
  
<div class="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
   <?php $featured_img_url = get_the_post_thumbnail_url($post->ID,'medium');?>
   
     <a class="resource" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
     <div style="height: 200px; background: url('<?php echo $featured_img_url;?>') no-repeat center center; background-size: cover;"></div>
      <h3><?php the_title(); ?></h3>
     </a>
   
    
  <?php  endwhile; else: ?>


<div class="no-results">
  <p>We're sorry, no results were found.</p>
</div>
<?php endif; ?>
</div>
</div>
	
<?php get_footer(); ?>
