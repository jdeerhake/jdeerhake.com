<?php require_once('include/header.php'); ?>
<h2>inputHintOverlay</h2>
<h3>jQuery Plugin</h3>
<h4>Last update: 9/21/2010</h4>
	<div class="section">
		<h4>About</h4>
		<p>A jQuery plugin that overlays input labels as hints to a form. It uses the title tags on each input/textarea as the label values/hints. It is called it on the form (or any parent). </p>
		<pre><code>$(form).inputHintOverlay()</code></pre>

		<p>Why use title tags? This makes it play nice with pre-filling forms from cookies (if a value is specified, the hint goes away).</p>

		<p>Why use overlay instead of setting the value? This allows validation to work correctly and prevents the user from accidently submiting erroneous data.</p>

		<p>Arguments to this method are adjustments to top and left of the fixed position of each overlay div. The folling would push each hint down 2px and right 5px.</p>
		<pre><code>$(form).inputHintOverlay(2, 5)</code></pre>
		<p>The class .inputHintOverlay can be used to style the hints.</p>
	</div>
	<div class="section">
		<h4>Download</h4>
			<ul class="noMargin">
				<li class="noMark"><a href="files/jquery.inputHintOverlay.js">jquery.inputHintOverlay.js</a> (v1.1.9)</li>
				<li class="noMark"><a href="files/jquery.inputHintOverlay.min.js">jquery.inputHintOverlay.min.js</a> (v1.1.9)</li>
				<li class="noMark"><a href="files/inputHintOverlay.zip">Example</a></li>
				<li class="noMark">&nbsp;</li>
			    <li class="noMark"><a href="http://github.com/jdeerhake/inputHintOverlay">GitHub repository</a></li>
				<li class="noMark"><a href="http://plugins2.jquery.com/project/inputHintOverlay">jQuery plugin page</a></li>
			</ul>
	</div>
	<div class="section">
		<h4>Known Issues</h4>
			<ul>
				<li>Fails when multiple items have the same title
					<ul>
						<li>Fix coming soon</li>
					</ul>
				</li>
				<li>Incorrectly positions the overlays when the input elements are floated
					<ul>
						<li>Not-so-elegant fix: Rather than floating the inputs, wrap each in its own floated block-level element.  This will fix the problem.</li>
						<li>I think this problem stems from how jQuery gets the position of floated elements.  I'm not sure how to fix it just yet.</li>
					</ul>
				</li>
				<li style="text-decoration: line-through">Label fails to clear itself when you click directly on it
					<ul>
						<li>You can fix it this by added a click function to each label that hides it and triggers focus on the input box.</li>
						<li>This will be fixed in the next release</li>
					</ul>
				</li>
				<li>Different positioning in Chrome
					<ul>
						<li>I've noticed that the labels sometimes have slightly different position in Chrome.  Usually small, acceptable differences but I'm not sure what causes them</li>
					</ul>
				</li>
				<li>Find another bug?  <a href="mailto:jdeerhake@gmail.com?subject=inputHintOverlay">Please email me</a> and let me know.  Same goes for feature requests</li>
			</ul>
	</div>
	<div class="section">
		<h4>Compatibility</h4>
			<ul>
				<li>This is known to work with jQuery 1.4.x</li>
				<li>It should work just fine with earlier versions, but YMMV</li>
				<li>Creates fully valid XHMTL 1.0 Strict</li>
				<li>This also plays nicely with the jqTransform plugin and the jQuery Validation plugin (although you have to disable the Validation feature that uses input title attributes as an error message override)</li>
			</ul>
	</div>
	<div class="section">
		<h4>Example</h4>
		<?php	$out= file_get_contents("files/jqiho.example.html"); ?>
		<form id="test" action="submitPage.php">
			<fieldset>
				<input type="text" id="name" title="Full Name" />
				<input type="text" id="email" title="E-Mail" />
				<textarea id="comment" title="Comment" cols="10" rows="5"></textarea>
				<input type="button" value="Submit" />
			</fieldset>
		</form>

	</div>
	<div class="section">
		<h4>Code</h4>
		<p>Just create a form and call the inputHintOverlay method on it.  The title tag of each input will be used as the hint.  Hints can be stylized using the div.inputHintOverlay class</p>
<pre><code><?php echo htmlspecialchars($out);?></code></pre>
	</div>
	
	<div class="clearFloat"></div>
	
<script type="text/javascript">

</script>

<?php require_once('include/footer.php'); ?>
