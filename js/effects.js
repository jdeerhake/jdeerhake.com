var Nav = {
	set : function() {
		var filename = location.pathname.split("/").pop();
		if(filename == "") filename = "index.php";
		$("ul#topNav li a[href='" + filename + "']").parent().addClass("current");
	}
}

$(document).ready(function() {
	Nav.set();
	hljs.tabReplace = '    ';
	hljs.initHighlighting();
  jQuery.ajax({
    url : "http://api.flickr.com/services/feeds/photoset.gne?set=72157625803158479&nsid=41596089@N00&lang=en-us&format=json",
    dataType : "jsonp",
    jsonp : "jsoncallback",
    success : function(data) {
      var pics = data.items,
        replaced = jQuery(".flickr-random").each(function() {
          var rand = Math.floor(Math.random()* pics.length),
            newpic = pics.splice(rand, 1)
            newsrc = newpic[0].media.m.replace("_m.jpg", "_z.jpg");
          $(this).attr("src", newsrc)
            .parent().attr("href", newpic[0].link);
        });
    }
  });
});
