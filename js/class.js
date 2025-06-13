
//jQuery( ".all-classes li:first-child").addClass( "active" );  

/*

    var iframe = document.querySelector('iframe');
    var player = new Vimeo.Player(iframe);

    player.on('play', function() {
        console.log('played the video!');
    });

    player.getVideoTitle().then(function(title) {
        console.log('title:', title);
    });

  


function changeVideo(vimeo_id) {
  jQuery(".all-classes li").removeClass("active");
  	var video_class = "video_" + vimeo_id;
  	console.log(video_class);
	
	player.loadVideo(vimeo_id).then(function(id) {
    // the video successfully loaded
}).catch(function(error) {
    switch (error.name) {
        case 'TypeError':
            // the id was not a number
            break;

        case 'PasswordError':
            // the video is password-protected and the viewer needs to enter the
            // password first
            break;

        case 'PrivacyError':
            // the video is password-protected or private
            break;

        default:
            // some other error occurred
            break;
    }
});*/

//Query( "." + video_class ).addClass( "active" );

/*} */


 
jQuery('.insideLink').click(function(event){
    event.stopImmediatePropagation();
});


jQuery( document ).ready(function() {
  const leftColumnHeight = jQuery(".class-wrapper-nav").innerHeight();
 jQuery(".class-nav-body").css('max-height', leftColumnHeight + 'px');
 jQuery(".class-nav-body").css('min-height', leftColumnHeight + 'px');
 // console.log(leftColumnHeight);
  
  jQuery('#switch').click(function(event){
    
      	if (jQuery(".view-switcher img").attr("src") === "/wp-content/themes/thriveu/img/IconViewTheater.svg") {
        	
        	jQuery(".view-switcher img").attr("src", "/wp-content/themes/thriveu/img/IconViewSplit.svg");
        	jQuery(".view-switcher span").html('Split View');
        	
        	jQuery(".class-wrapper-nav").prependTo(".class-wrapper-data");
        	
        	jQuery("body").addClass("theater");
        	
        	/*
        	 jQuery( ".theater .title-area-wrapper" ).mouseleave(function() {
            jQuery('.theater .title-area').fadeOut('slow');

          });
         
          jQuery( ".theater .title-area-wrapper" ).mouseenter(function() {
           jQuery('.theater .title-area').fadeIn('fast');

          });
          */
        	
        	jQuery( ".theater .class-wrapper-data" ).mouseenter(function() {
            jQuery('.theater .title-area').fadeOut('slow');

          });
         
          jQuery( ".theater .class-wrapper-top" ).mouseleave(function() {
           jQuery('.theater .title-area').fadeIn('fast');

          });
        	
          var navHeight = jQuery(".author-bio").innerHeight();
          jQuery(".class-nav-body").css('max-height', navHeight + 'px');
          console.log(navHeight);
          
         
      	}
      	
      	else if (jQuery(".view-switcher img").attr("src") === "/wp-content/themes/thriveu/img/IconViewSplit.svg") {
        	 jQuery(".view-switcher img").attr("src", "/wp-content/themes/thriveu/img/IconViewTheater.svg");
        	 jQuery(".view-switcher span").html('Theater View');
           jQuery("body").removeClass("theater");
           jQuery(".class-nav-body").css('max-height', leftColumnHeight + 'px');
          
           jQuery(".class-wrapper-nav").prependTo(".class-wrapper-top");
           
           
        }
        
    /*if ( jQuery("body.theater").mousemove()) {
      console.log('move move test');
    } */   

    });
    
    
    
    
    
    /*
    
    */
    
});

if (jQuery(window).width() < 1250) {
  
  jQuery(".class-wrapper-nav").prependTo(".class-wrapper-data");
 	jQuery("body").addClass("theater");
 	jQuery(".view-switcher img").attr("src", "/wp-content/themes/thriveu/img/IconViewSplit.svg");
  jQuery(".view-switcher span").html('Split View');
}
//jQuery('.title-area').fadeIn('slow').delay(1000).fadeOut('slow');
//jQuery( ".title-area" ).fadeTo( "slow" , 0, function() {
    // Animation complete.
 // });
  /*
function changeYouTube(youtube_id) {
    	var video_class = "video_" + youtube_id;
    	jQuery(".all-classes li").removeClass("active");
  //var youtube_id = "S2ISrpNM-0s";
  jQuery(".actualyoutube iframe").remove();
  jQuery('<iframe frameborder="0" allowfullscreen></iframe>')
      .attr("src", "https://www.youtube.com/embed/" + youtube_id + "?showinfo=0&modestbranding=1&rel=0")
      .appendTo(".actualyoutube");
      jQuery( "." + video_class ).addClass( "active" );
}    
*/