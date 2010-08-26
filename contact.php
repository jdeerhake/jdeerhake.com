<?php require_once('include/header.php'); ?>
<a href="http://www.flickr.com/photos/deerhake11/3693283795/">
	<img class="right" src="http://farm3.static.flickr.com/2494/3693283795_1b76b8c0a1.jpg"  alt="Fountain on Feuersee, Stuttgart, Germany"/>
</a>
<h2>Contact Me</h2>

<div class="floatLeft">
	<dl class="contactMe">
		<dt>Email</dt>
			<dd><a href="mailto:jdeerhake@gmail.com">jdeerhake@gmail.com</a></dd>
		<dt>Address</dt>
			<dd>8 Summer St, Apt 9<br /> Hanover, NH 03755</dd>
	</dl>
</div>

<div class="floatLeft">
	<h2>Social</h2>
	<div class="socialGrid">
		<a href="http://facebook.com/deerhake11"><img class="socialIcon" src="images/facebook.png" alt="Facebook" /></a>
		<a href="http://flickr.com/photos/deerhake11"><img class="socialIcon" src="images/flickr.png" alt="Flickr" /></a>
		<a href="http://twitter.com/jdeerhake"><img class="socialIcon" src="images/twitter.png" alt="Twitter" /></a>
		<a href="http://forrst.com/people/jdeerhake"><img class="socialIcon" src="images/forrst.png" alt="Forrst" /></a>
		<a href="http://beeradvocate.com/user/profile/jdeerhake"><img class="socialIcon" src="images/beer.png" alt="BeerAdvocate" /></a>
	</div>
</div>

<div class="floatLeft">
	<h2>Flickr</h2>
	<p>Heres a few of my recent pictures..</p>
	<div>
	<?php 
		require_once('phpFlickr/phpFlickr.php');
		$key = "0956cc00af6d0aa33ad6e311dfe41efa";
		$username = "deerhake.11";
		$f = new phpFlickr("$key");
		$i = 0;
		$person = $f->people_findByUsername($username);
		$photos_url = $f->urls_getUserPhotos($person['id']);
		$photos = $f->people_getPublicPhotos($person['id'], NULL, NULL, 10);
		foreach ((array)$photos['photos']['photo'] as $photo) {
			echo "<a href=$photos_url$photo[id]>";
			echo "<img border='0' alt='$photo[title]' ".
				"src=" . $f->buildPhotoURL($photo, "Square") . ">";
			echo "</a>";
			$i++;
			// If it reaches the sixth photo, insert a line break
			if ($i % 5 == 0) {
				echo "<br>\n";
			}
		}
	?>
	</div>
</div>
<div class="clearFloat"></div>
<?php require_once('include/footer.php'); ?>