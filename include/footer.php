    </div><!-- left-col -->
    <div id="right-col">
      <?php
        if($flickr) {
          $x = 0;
          while($x < $flickr) { ?>
            <a class="img"><img class="flickr-random" /></a>
          <?php $x++;
          }
        } ?>
    </div>
    <hr>
    <footer>
      &copy; <?php echo date("Y"); ?> John Deerhake
    </footer>
  </div><!-- page-wrap -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="js/application.js"></script>
</body>

