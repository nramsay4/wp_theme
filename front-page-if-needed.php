<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--
<div id="hero">
  <div class="content">
    <h1>Catalyzing Collaboration for Great Commission Breakthroughs</h1>
    <a class="btn" href="/about">Learn More</a>
  </div>
</div>
-->
<?php echo do_shortcode('[smartslider3 slider="2"]');?>
   
    
    <div style="background-image:url('/wp-content/uploads/home-bg-gradient.png');" class="bg-contain bg-center p-10">
      <h2 class="uppercase text-6xl text-white mb-10 text-center font-thin">Collaboration is the Key</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 container max-w-full mx-auto pb-5">
      <?php if( have_rows('our_motivation') ): ?>
      <?php while( have_rows('our_motivation') ) : the_row();?>
          <div class="text-center mb-10">
            <img class="rounded-full w-[250px] border-2 border-solid border-green p-3 mx-auto mb-5" src="<?php the_sub_field('photo');?>" />
            <h3 class="text-yellow font-light text-3xl mb-5 text-center"><?php the_sub_field('title'); ?></h3>
            <p class="text-white mb-5"><?php the_sub_field('description'); ?></p>
            <a class="border-2 border-solid border-baby-blue rounded-3xl px-7 py-2 text-white uppercase hover:bg-baby-blue transition-colors duration-300 ease-in-out" href="<?php the_sub_field('link'); ?>">Read more</a> 
          </div>   
      <?php endwhile; endif;?>

      </div>
      <div class="text-center text-orange text-xl mb-5"><a class="border-2 border-solid border-red rounded-3xl px-7 py-2 text-orange uppercase font-bold hover:bg-red hover:text-white transition-colors duration-300 ease-in-out" href="/collaboration">Learn more</a> about Why Collaboration</a></div>
  </div>
  
 
  <div class="bg-dark-blue pt-10">
    <div class="bg-opacity-50 bg-contain" style="background-image:url('/wp-content/uploads/path.png');">
      <?php if( have_rows('change') ): ?>
        <div class="mt-10">
          <h2 class="uppercase text-6xl text-white mb-10 text-center font-thin">Theory of Change</h2>
        </div>
          <div id="change-container">
          <?php while( have_rows('change') ) : the_row();?>
                <div class="change" class="text-center">
                  <div class="icon-container border">
                    <img class="m-auto" src="<?php the_sub_field('photo');?>" />
                    <span><?php the_sub_field('title'); ?></span>
                  </div>
                </div>   
                
        <?php endwhile;
        else :
        endif;
    ?>
    
    </div>
  </div>

  <div class="text-center text-orange text-xl mb-20"><a class="border-2 border-solid border-red rounded-3xl px-7 py-2 text-orange uppercase font-bold hover:bg-red hover:text-white transition-colors duration-300 ease-in-out" href="/theory-of-change">Learn more</a></div>
  
    
    
      <div class="container mx-auto max-w-[1000px]">
        <h2 class="uppercase text-6xl text-white mb-10 text-center font-thin">Our Impact</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3">
          <?php while( have_rows('our_impact') ) : the_row();?>
                <div class="grid text-white text-center">
                  <img class="mx-auto mb-5 w-[60px]" src="<?php the_sub_field('icon');?>" />
                  <span class="text-6xl mb-5"><?php echo number_format(get_sub_field('number')); ?></span>
                  <span class="text-xl"><?php the_sub_field('description'); ?></span>
                </div>
            <?php endwhile;
          ?>
        </div>
      </div>
      <div class="water-drop min-h-[700px] bg-cover bg-center -mt-[100px]" style="background-color: #407EC9; background-image: linear-gradient(to bottom, transparent 70%, #407EC9 100%), url('/wp-content/uploads/water-drop.jpg'); background-repeat: no-repeat;"></div>
        
      </div>

      <div class="py-20 bg-baby-blue">
      <h2 class="uppercase text-6xl text-white mb-10 text-center font-thin">What We Do</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 container max-w-full mx-auto pb-5">
      <?php if( have_rows('what_we_do') ): ?>
      <?php while( have_rows('what_we_do') ) : the_row();?>
          <div class="text-center mb-10">
            <img class="rounded-full w-[250px] border-2 border-solid border-yellow p-3 mx-auto mb-5" src="<?php the_sub_field('photo');?>" />
            <h3 class="text-white font-light text-3xl mb-5 text-center"><?php the_sub_field('title'); ?></h3>
            <a class="border-2 border-solid border-red rounded-3xl px-7 py-2 text-orange uppercase hover:bg-white hover:text-red transition-colors duration-300 ease-in-out font-semibold" href="<?php the_sub_field('link'); ?>">Read more</a> 
          </div>   
      <?php endwhile; endif;?>

      </div>
      <div class="text-center text-yellow text-xl mb-20"><a class="bg-dark-blue border-2 border-solid border-yellow rounded-3xl px-7 py-2 text-yellow hover:bg-red hover:text-white transition-colors duration-300 ease-in-out" href="/collaboration"><span class="font-bold uppercase">Learn more</span> About WHAT WE DO</a></div>

      <hr />
  </div>

  
  <div class="bg-baby-blue min-h-[500px]">
  
    <div class="container mx-auto">
      <h2 class="uppercase text-6xl text-white mb-10 text-center font-thin">Reaching Unreached<br />Peoples and Places</h2>
    </div>
  </div> 



<div class="orange-gradient py-20">
  <div class="container mx-auto">
    <h2 class="uppercase text-6xl text-white mb-10 text-center font-thin">Resources</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mx-auto max-w-[1150px]">
      <div class="grid grid-cols-2 gap-4">
        <div class="w-[150px] justify-end">
          <img src="/wp-content/uploads/resources-icon.png" class="w-[150px] h-auto" alt="Resources Icon"/>
        </div>
        <div class="">
          <span class="font-semibold">Find out What’s Happening</span>
          <h3 class="text-white text-6xl text-left mb-10">Stay<br />Informed</h3>
          <a class="bg-baby-blue border-2 border-solid border-red rounded-3xl px-7 py-2 text-white uppercase hover:bg-white hover:text-red transition-colors duration-300 ease-in-out font-semibold" href="#">Learn more</a> 
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div class="w-[150px]">
          <img src="/wp-content/uploads/resources-icon.png" class="w-[150px] h-auto" alt="Resources Icon"/>
        </div>
        <div class="w-full">
          <span class="font-semibold">Catalytic Leader Resources</span>
          <h3 class="text-white text-6xl text-left mb-10">Collaboration<br />Tools</h3>
          <a class="bg-baby-blue border-2 border-solid border-red rounded-3xl px-7 py-2 text-white uppercase hover:bg-white hover:text-red transition-colors duration-300 ease-in-out font-semibold" href="#">Learn more</a> 
        </div>
      </div>
    </div>
  </div>
</div>
 


<?php endwhile; ?>
<?php endif; ?>	


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
<?php get_footer(); ?>
