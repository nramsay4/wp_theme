<?php get_header(); ?>

<div class="w-full">
  <div class="max-w-[1100px] lg:-mt-[50px] mx-auto bg-white px-20 max-md:px-10 max-sm:px-5 py-5 border-t-[10px] border-atsblue-100 grey-shadow">
      <?php the_content(); ?>
  </div>


  <div>
    <?php      
    if( have_rows('general_flex') ): 
      while( have_rows('general_flex') ): the_row(); ?>
        <?php
        if( get_row_layout() == 'counseling_cards' ): ?>
          <div class="my-10 mx-auto grid gap-5 md:grid-cols-3 max-w-[1050px] content-box px-5">
            <?php 
            if( have_rows('card') ):
                while( have_rows('card') ) : the_row(); ?>
                  <div class="flex flex-col justify-between">
                    <div class="min-[530px]:max-md:grid max-md:grid-cols-[200px,_1fr] max-md:gap-5">
                      <?php if(get_sub_field('image')): ?>
                        <img class="my-0 mx-auto" src="<?php echo ( get_sub_field('image') ); ?>" />
                      <?php endif; ?>
                      <div>
                        <a href="<?php echo ( get_sub_field('link') ); ?>" class="text-black hover:no-underline">
                        <h3 class="mt-2 text-atsblue-100 font-extrabold min-[530px]:text-base"><?php echo ( get_sub_field('title') ); ?></h3>
                        <p class="text-xs mb-4"><?php echo ( get_sub_field('content') ); ?></p>
                          <p class="uppercase text-xs mb-0 md:hidden">learn more &#43;</p>
                        </a>
                      </div>
                    </div>
                    <a href="<?php echo ( get_sub_field('link') ); ?>" class="text-black hover:no-underline hidden md:block">
                      <p class="uppercase text-xs mb-0">learn more &#43;</p>
                    </a>
                  </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
    
        <?php      
        if( have_rows('team_member') ): ?>
          <div class="mx-auto py-10 max-w-4xl max-sm:max-w-xl max-sm:flex max-sm:flex-col max-sm:gap-10 max-sm:px-5 content-box">
            <div class="carousel-img my-5 max-sm:!hidden">
              <?php while( have_rows('team_member') ): the_row(); ?>
                <div><img style="transition: opacity 1000ms ease 0s" src="<?php echo ( get_sub_field('image') ); ?>" alt="<?php echo ( get_sub_field('name') ); ?>" class="mx-auto opacity-25 max-w-[16rem] w-full px-2"></div>
              <?php endwhile; ?>
            </div>
            <div class="max-sm:!hidden max-w-2xl mx-auto carousel-info">
              <?php while( have_rows('team_member') ): the_row(); ?>
                <div style="transition: opacity 1000ms ease 0s">
                  <h3 class="text-center"><?php echo ( get_sub_field('name') ); ?></h3>
                  <?php echo ( get_sub_field('bio') ); ?>
                </div>
              <?php endwhile; ?>
            </div>
            <?php while( have_rows('team_member') ): the_row(); ?>
              <div class="hidden max-sm:block">
                <img class="mobile-team max-w-[250px] mb-3 mx-auto" src="<?php echo ( get_sub_field('image') ); ?>" alt="<?php echo ( get_sub_field('name') ); ?>">
                <h3 class="text-center"><?php echo ( get_sub_field('name') ); ?></h3>
                <?php echo ( get_sub_field('bio') ); ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif;?>  
        
        <?php
        if( get_row_layout() == 'simple_content_block' ):?>

            <div class="<?php echo ( get_sub_field('background_color') ); ?> w-full content-box max-md:px-10 max-sm:px-5">
              <div class="mx-auto py-5 max-w-4xl"><?php echo ( get_sub_field('content') ); ?></div>
            </div>
                
        <?php endif;?> 
          
        <?php
        if( get_row_layout() == 'content_block' ):?>

        <div class="<?php echo ( get_sub_field('background_color') ); ?>">
          <div class="lg:grid lg:grid-cols-2 items-center max-w-2xl lg:max-w-[1050px] mx-auto py-10 content-box  max-sm:px-5">
            <div class="lg:col-start-2">
              <img src="<?php echo ( get_sub_field('image') ); ?>" />
            </div>
            <div class="row-start-1 mt-5 lg:mt-0 max-lg:pr-2">
              <h2><?php echo ( get_sub_field('title') ); ?></h2>
              <div class="text-sm"><?php echo ( get_sub_field('content') ); ?></div>
            </div>
          </div>
        </div>
          
        <?php endif;?> 
        
      <?php endwhile; ?>
    <?php endif; ?>  
  </div>
</div>

<?php get_footer(); ?>