    </div><!-- left-col -->
    <div id="right-col">
      <?php
        if( isset( $images ) ) {
          foreach( $images as $href => $src ) { ?>
            <a class="img" href="<?= $href ?>"><img src="<?= $src ?>" /></a>
          <?php }
        } ?>
    </div>
    <hr>
    <footer>
      &copy; <?php echo date("Y"); ?> John Deerhake
    </footer>
  </div><!-- page-wrap -->


  <script>
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
  </script>

  <?php if( extension_loaded('newrelic') ) { echo newrelic_get_browser_timing_footer(); } ?>
</body>

