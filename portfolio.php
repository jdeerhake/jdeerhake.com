<?php require_once('include/header.php'); ?>
<h2>Portfolio</h2>

<div class="portfolioItem">
	<h4>ICU Orientation App</h4>
	<a class="preview" href="images/portfolio/orient_ss.png"><img class="crop" src="images/portfolio/orient_ss.png" alt="Orientation" /></a>
	<p>A very new project I'm working on that will serve as an orientation system for ICU nurses.  It's main functionality is systems of organized 'tasks' that are created and categorized by admins, completed by orientees, and then signed-off on by preceptors.  Everything about these tasks and their organization is completely controlled by the admins.<p>
	<p>As of now, the project is around 50% complete.</p>
	<p><a href="http://www.youtube.com/v/2l2hmlq93us&amp;hl=en_US&amp;fs=1&amp;color1=0x3a3a3a&amp;color2=0x999999&amp;hd=1">Here</a> is a quick sneak peak that shows of some of the front end functionality</p>
	<!--<p style="margin: 15px 100px">
		<object width="480" height="372">
			<param name="movie" value="http://www.youtube.com/v/2l2hmlq93us&amp;hl=en_US&amp;fs=1&amp;color1=0x3a3a3a&amp;color2=0x999999&amp;hd=1"></param>
			<param name="wmode" value="opaque" />
			<param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param>
			<embed wmode="opaque" src="http://www.youtube.com/v/2l2hmlq93us&amp;hl=en_US&amp;fs=1&amp;color1=0x3a3a3a&amp;color2=0x999999&amp;hd=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="372">
			</embed>
		</object>
	</p>-->
	<p><em>Technology used: XHTML, CSS (2 &amp; 3), PHP, Javascript, jQuery, MySQL, Mercurial</em></p>
</div>

<div class="portfolioItem">
	<h4>BL Trading</h4>
	<a class="preview" href="images/portfolio/bl_ss.png"><img class="crop" src="images/portfolio/bl_ss.png" alt="BL Trading" /></a>
	<p>At BL Trading I was solely responsible for refreshing the company website.  The new site was built from the ground up, not reusing any code or 
		content form the old site.  It is a  simple update of the old design with optimizations made to the user interface and increased 
		functionality added through jQuery.  The site is largely static, but PHP was used to modularize the new site, make various input forms, 
		and create a search page.<p>
	<p>During the creation of this site I wrote the <a href="inputHintOverlay.php">inputHintOverlay</a> jQuery plugin
		to fill a need for the site.</p>
	<p>How about a little <a class="preview" href="images/portfolio/bl_before.png" title="Before">before</a> and <a class="preview" href="javascript:void(0)" rel="images/portfolio/bl_after.png" title="After">after</a>?</p>
	<p><em>Technology used: XHTML, CSS (2 &amp; 3), PHP, jQuery, MySQL, SVN</em></p>
</div>

<div class="portfolioItem">
	<h4>NASA Jet Propulsion Laboratory</h4>
	<a class="preview" href="images/portfolio/nasa_ss.png"><img class="crop" src="images/portfolio/nasa_ss.png" alt="NASA JPL" /></a>
	<p>While doing a 15 week USRP sponsored internship at NASA JPL in Pasadena, California I was tasked with creating a web-based interface for data colllected from the 
		TOPEX Microwave Radiometer (TMR) aboard the TOPEX/Poseidon satellite. I worked alone on the project, with only guidance from a NASA scientist.</p>
	<p>After organizing and optimizing a MySQL database for the 300+ million data points, I created a web application which would analyze the data and output either raw data, 
		<a class="preview" href="images/portfolio/nasa_map.png" title="NASA JPL project, TMR Data">maps</a>, or 
		<a class="preview" href="images/portfolio/nasa_graph.png" title="NASA JPL project, TMR Data">graphs</a>; 
		all with numerous options such as trending, smoothing, and offset views. Dynamically creating these maps required extensive use of the PHP GD image manipulation library.</p>
	<p>The design is a very simple, light CSS design that uses JavaScript + jQuery for the navagation menu.</p>
	<p>This project was done during fall 2008. At the end of the internship, I gave a <a href="files/presentation.pdf">presentation</a> outlining the system's creation and its abilities.</p>
	<p><em>Technology used: PHP, PHP GD, MySQL, CSS, HTML, JavaScript, jQuery</em></p>
</div>

<div class="portfolioItem">
	<h4>E-Roots Consulting</h4>
	<a class="preview" href="images/portfolio/osbhca_ss.png"><img class="crop" src="images/portfolio/osbhca_ss.png" alt="E-Roots" /></a>
	<!--<a class="preview" href="images/portfolio/sibs_ss.png"><img class="crop" src="images/portfolio/sibs_ss.png" alt="E-Roots" /></a>-->
	<p>At E-Roots most of my tasks dealt with IT or general maintenance on clients' web sites.  I was, however, often tasked with cutting a PSD file into an HTML + CSS site.</p>
	<p>All of the markup for these sites validated 100% and was fully supported by Internet Explorer 6 and 7, Firefox, and Safari.</p>
	<p>All of this work was done during the Summer of 2008.</p>
	<p><em>Technology used: HTML/XHTML, CSS (ocassionally PHP, JavaScript)</em></p>
</div>


<div class="clearFloat"></div>
<?php require_once('include/footer.php'); ?>
