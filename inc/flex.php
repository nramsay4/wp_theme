<?php
if( have_rows('flex_content') ):
while ( have_rows('flex_content') ) : the_row();
  
  if( get_row_layout() == 'simple_content_block' ):
    the_sub_field('simple_content');
  endif;
  
  if( get_row_layout() == 'testimony' ): ?>
    
    <div class="mb-10">
      <?php if ( get_sub_field('section_title')) { ?>
        <h3><?php the_sub_field('section_title');?></h3>
      <?php }?>
      <div class="">
        <div class="italic mb-2">
          <?php the_sub_field('testimony_text');?>
        </div>
        <span class="font-bold text-2xl">
          <?php the_sub_field('name');?>
        </span>
        <?php if ( get_sub_field('title')) { ?>
          <span class="font-bold text-2xl">, <?php the_sub_field('title');?></span>
        <?php }?>
      </div>
    </div>
  <?php endif;
  
  
  
  if( get_row_layout() == 'theory_of_change_animation' ): ?>
  
  <div id="change-container">
          <div class="change">
            <div class="icon-container border">
              <img src="/wp-content/uploads/vs-logomark-color.png" />
              <span>Catalytic<br />Leaders</span>
            </div>
            </div>   
          
            <div class="change">
            <div class="icon-container border">
              <img src="/wp-content/uploads/effective-networks.png" />
              <span>Effective<br />Networks</span>
            </div>
            </div>   
          
            <div class="change">
            <div class="icon-container border">
              <img src="https://vision.terryturner.org/wp-content/uploads/increased-collaboration.png" />
              <span>Increased Collaboration</span>
            </div>
            </div>   
          
            <div class="change">
            <div class="icon-container border">
              <img src="/wp-content/uploads/gc-breakthroughs.png" />
              <span>Great Commission Breakthroughs</span>
            </div>
            </div>  
  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/CSSRulePlugin.min.js" integrity="sha512-2+BGFUqT8mzxE2ifxQK7kcEhOeHaO5EOrUgRIUJ9+HoIw8zQHI+HvnVrgGjwW0qL5dpGv8ao2oZlBS7IvvCuhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script>
         
      gsap.registerPlugin(ScrollTrigger);
      let tl = gsap.timeline({});
      
      tl.to(".change:nth-child(1) .icon-container", { opacity: 1, duration: 1});
      tl.to(".change:nth-child(1) .icon-container", { opacity: .4, duration: 1});
      tl.to(".change:nth-child(2) .icon-container", { opacity: 1, duration: 1});
      tl.to(".change:nth-child(2) .icon-container", { opacity: .4, duration: 1});
      tl.to(".change:nth-child(3) .icon-container", { opacity: 1, duration: 1});
      tl.to(".change:nth-child(3) .icon-container", { opacity: .4, duration: 1});
      tl.to(".change:nth-child(4) .icon-container", { opacity: 1, duration: 1});
      tl.to(".change:nth-child(4) .icon-container", { opacity: .4, duration: 1});
      
  
      tl.repeat(-1); 
  </script>
  <?php endif;?>
  
  <?php if( get_row_layout() == 'quote' ): ?>
      <blockquote class=""><?php the_sub_field('quote_text');?> &mdash; <?php the_sub_field('author');?></blockquote>
  <?php endif; ?>

  <?php if( get_row_layout() == '5050' ): ?>
    <?php 
    if (get_sub_field('callout_side') === 'right') {
      $content_side = 'order-1';
      $callout_side = 'order-2';
    }
    else {
      $content_side = 'order-2';
      $callout_side = 'order-1';
    }
    
    if (get_sub_field('callout_background') === 'blue') {
      $callout_background = 'bg-blue';
    }
    elseif (get_sub_field('callout_background') === 'black') {
      $callout_background = 'bg-black';
    }
    else {
      $callout_background = 'bg-red';
    }
    ?>
      
      <div class="text-center mb-20">
        <h2 class="border border-yellow rounded-full p-10 inline-block text-center">
          <?php the_sub_field('title');?>
        </h2>
      </div>

      <div class="grid grid-cols-2 border-b border-solid border-yellow pb-20 mb-20 gap-10">
        <div class="<?php echo $content_side;?> fifty-content">
          <?php the_sub_field('content');?>
        </div>
        <div class="<?php echo $callout_background . ' ' . $callout_side;?> flex items-center">
          <?php if ( get_sub_field('image_callout')) : ?>
            <img src="<?php the_sub_field('image_callout');?>" />
          <?php endif; ?>
          <?php if ( get_sub_field('text_callout')) : ?>
            <h3 class="text-6xl font-light text-white p-10 leading-normal">
              <?php the_sub_field('text_callout');?>
            </h3>
          <?php endif; ?>
        </div>
      </div>

  <?php endif; ?>

<?php 
  endwhile; endif; 
?>  