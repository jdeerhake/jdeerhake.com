    </div><!-- left-col -->
    <div id="right-col">
      <?php
        if($flickr) {
          $x = 0;
          while($x < $flickr) { ?>
            <a class="img"><img class="flickr-random" /></a>
          <?php $x++;
          }
        } else { ?>
          <a class="img" href="http://www.flickr.com/photos/deerhake11/3681694068/in/set-72157625803158479/"><img src="http://farm4.static.flickr.com/3049/3681694068_402f826c3e_z.jpg"></a>
        <?php } ?>
    </div>
    <hr>
    <footer>
      &copy; <?php echo date("Y"); ?> John Deerhake
    </footer>
  </div><!-- page-wrap -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="js/application.js"></script>
</body>

