    </div><!-- left-col -->
    <div id="right-col">
      <?php
        if( isset( $flickr ) ) {
          $x = 0;
          while($x < $flickr) { ?>
            <a class="img"><img class="flickr-random" /></a>
          <?php $x++;
          }
        } else { ?>
          <img src="/images/me.jpeg">
        <?php } ?>
    </div>
    <hr>
    <footer>
      &copy; <?php echo date_default_timezone_set("Y"); ?> John Deerhake
    </footer>
  </div><!-- page-wrap -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="js/application.js"></script>

  <?php if( extension_loaded('newrelic') ) { echo newrelic_get_browser_timing_footer(); } ?>
</body>

