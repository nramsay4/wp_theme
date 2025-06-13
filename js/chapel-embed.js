/**
 * http://stackoverflow.com/a/10997390/11236
 */
function updateURLParameter(url, v, paramVal){
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (var i=0; i<tempArray.length; i++){
            if(tempArray[i].split('=')[0] != v){
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + v + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
}


var newURL = updateURLParameter(window.location.href, 'locId', 'newLoc');
newURL = updateURLParameter(newURL, 'resId', 'newResId');








var iframe = document.querySelector('iframe');
    var player = new Vimeo.Player(iframe);

    player.on('play', function() {
        // console.log('played the video!');
    });

    player.getVideoTitle().then(function(title) {
        // console.log('title:', title);
    }); 



function changeVideo(vimeo_id, num, name, title) {
  jQuery(".class-title h1").html(title + '&mdash;' + name);
  jQuery(".all-classes li").removeClass("active");
  	var video_class = "video_" + vimeo_id;
  	//console.log(video_class);
	
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
});

jQuery( "." + video_class ).addClass( "active" );
window.history.replaceState('', '', updateURLParameter(window.location.href, "v", num));
}

