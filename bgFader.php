<?php require_once('include/header.php'); ?>
<h2>bgFader</h2>
<h3>jQuery Plugin</h3>
<h4>v0.1.0</h4>
<h4>Last update: 9/23/2010</h4>
	<div class="section">
		<h4>About</h4>
		<p>A jQuery plugin that allows a background to fade in or out independently of its content.</p>
		
		<p>Example call to bgFader:</p>
		<pre><code>$(myDiv).bgFader({
			'type' : 'out',  //in or out  (cross coming soon)
			'duration' : 300, //animation duraction - accepts jQuery defined strings (eg slow, fast) or ms
			'newBg' : '', //new aruments for CSS 'background:' short hand declaration
			'easing' : 'linear', //linear or swing (unless you have the jQuery easing plugin installed)
			'fadeTo' : '0', //Opacity level at end of animation
			'callback' : '' //Callback function when animation has completed
		})</code></pre>
		<p>The example values provided are also the defaults (with the exception that fadeTo defaults to 1 for a fade in)</p>

	</div>
	<div class="section">
		<h4>Download</h4>
			<ul class="noMargin">
				<li class="noMark"><a href="files/jquery.bgFader.js">jquery.bgFader.js</a> (v0.1.0)</li>
				<!--<li class="noMark"><a href="files/jquery.bgFader.min.js">jquery.bgFader.min.js</a> (v0.0.1)</li>-->
				<li class="noMark"><a href="http://plugins.jquery.com/project/bgFader">jQuery plugin page</a></li>
			</ul>
	</div>
	<div class="section">
		<h4>Known Issues</h4>
			<ul>
				<li>There are surely a lot of issues.</li>
				<li>Curently only tested in Firefox 3 and IE8.</li>
				<li>Find a bug?  <a href="mailto:jdeerhake@gmail.com?subject=bgFader">Please email me</a> and let me know.  Same goes for feature requests</li>
			</ul>
	</div>
	<div class="section">
		<h4>Compatibility</h4>
			<ul>
				<li>This is known to work with jQuery 1.4.x</li>
				<li>It should work just fine with earlier versions, but YMMV</li>
			</ul>
	</div>
	<div class="section">
		<h4>Example</h4>
		<p>Coming soon.</p>
	</div>
	<div class="section">
		<h4>Code</h4>
		<p>Coming soon.</p>
		<?php /*<p>Just create a form and call the inputHintOverlay method on it.  The title tag of each input will be used as the hint.  Hints can be stylized using the div.inputHintOverlay class</p>
<pre><code><?php echo htmlspecialchars($out);?></code></pre>*/ ?>
	</div>
	
	<div class="clearFloat"></div>
	
<script type="text/javascript">

</script>

<?php require_once('include/footer.php'); ?>
