<?php
      $args = array( 'category' => '3','numberposts' => '2', 'post_status' => 'publish');
      $recent_posts = wp_get_recent_posts( $args );
      foreach( $recent_posts as $recent ) {
        $featured_img_url = get_the_post_thumbnail_url($recent["ID"],'full');        
        echo '<a class="featured-resource" href=' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" ><div class="featured-img" style="background:url(' . $featured_img_url . ') no-repeat; background-position: top center; background-size: cover;"></div><div class="post-description"><h3>' . $recent["post_title"] .'</h3><span>Learn more</span></div></a>';
      }
    ?>