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


function changeYouTube(youtube_id,num,name,title) {
    	var video_class = "video_" + youtube_id;
    	jQuery(".all-classes li").removeClass("active");
  //var youtube_id = "S2ISrpNM-0s";
  jQuery(".actualyoutube iframe").remove();
  jQuery('<iframe frameborder="0" allowfullscreen></iframe>')
      .attr("src", "https://www.youtube.com/embed/" + youtube_id + "?showinfo=0&modestbranding=1&rel=0 allowfullscreen")
      .appendTo(".actualyoutube");
      jQuery( "." + video_class ).addClass( "active" );
      jQuery(".class-title h1").html(title + '&mdash;' + name);
      
      
      jQuery( "." + video_class ).addClass( "active" );
window.history.replaceState('', '', updateURLParameter(window.location.href, "v", num));
      
}  