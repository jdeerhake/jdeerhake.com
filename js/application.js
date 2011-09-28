var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-3736531-1']);
_gaq.push(['_setDomainName', '.jdeerhake.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setAllowHash', false]);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


jQuery(document).ready(function() {
  jQuery.ajax({
    url : "http://api.flickr.com/services/feeds/photoset.gne?set=72157625803158479&nsid=41596089@N00&lang=en-us&format=json",
    dataType : "jsonp",
    jsonp : "jsoncallback",
    success : function(data) {
      var pics = data.items;

      jQuery(".flickr-random").each(function() {
        var rand = Math.floor(Math.random() * pics.length),
          newpic = pics.splice(rand, 1)
          newsrc = newpic[0].media.m.replace("_m.jpg", "_z.jpg");
        $(this).attr("src", newsrc)
          .parent().attr("href", newpic[0].link);
      });
    }
  });
});

