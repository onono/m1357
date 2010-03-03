<script type="text/javascript">
$("#menu_home").addClass("current");
</script>
<?php $this->addscript('meta_keywords','<meta name="keywords" content="รับทำเวบ,ทำเว็บ,รับสอนเบื้องต้นด้วยภาษา PHP,MySQL,CakePHP Framework,"/>');?>
<?php $this->addscript('meta_description','<meta name="description" content="WEB DESIGN, WEB APPLICATION, CAKEPHP, WEB PROMOTE, WEB PROGRAMMING, WEB E-COMMERCE,  WEBSITE, SEO,รับทำ SEO,เว็บไซต์  ,ทำเว็บไซต์ , ทำเว็บ เชียงใหม่ , บริการออกแบบ,ออกแบบเว็บ เชียงใหม่, ออกแบบเว็บไซต์ เชียงใหม่,ออกแบบเว็บ,รับทำเว็บ ,รับทำเวบ ,รับทำเวป ,รับทำเว็ป,รับทำเว็บไซต์ ,รับทำเวบไซต์ ,รับทำเวปไซต์ ,รับทำเว็ปไซต์,รับทำเว็บไซท์ ,รับทำเวบไซท์ ,รับทำเวปไซท์ ,รับทำเว็ปไซท์,รับออกแบบเว็บ ,รับออกแบบเวบ ,รับออกแบบเวป ,รับออกแบบเว็ป ,รับออกแบบเว็บไซต์ ,รับออกแบบเวบไซต์ ,รับออกแบบเวปไซต์ ,รับออกแบบเว็ปไซต์,รับออกแบบเว็บไซท์ ,รับออกแบบเวบไซท์ ,รับออกแบบเวปไซท์ ,รับออกแบบเว็ปไซท์,ออกแบบเว็บไซต์ ,ออกแบบเวบไซต์ ,ออกแบบเวปไซต์ ,ออกแบบเว็ปไซต์,ออกแบบเว็บไซท์ ,ออกแบบเวบไซท์ ,ออกแบบเวปไซท์ ,ออกแบบเว็ปไซท์,เว็บไซต์เชียงใหม่"/>');?>
<?php $this->pageTitle="รับทำเวบ,ทำเว็บ,รับสอนเบื้องต้นด้วยภาษา PHP,MySQL,CakePHP Framework,";?>
<div id="it_news" class="intro" style="display:block;">
<?php
$i=0;
foreach($xml['Rss']['Channel']['Item'] as $value){
	
	?>
	<div id="news_title<?php echo $i;?>" style="float:left;margin-bottom:10px;">
	<table>
	<tr>
	<td>
	<a href="<?php echo str_replace("&","&amp;",$value['link']);?>" title="<?php echo str_replace('"','&quot;',$value['title']);?>"><img src="<?php echo $value['Enclosure']['url'];?>" width="60" height="60" alt="<?php echo str_replace('"','&quot;',$value['title']);?>"/></a>
	</td>
	<td>
	<a href="<?php echo str_replace("&","&amp;",$value['link']);?>" title="<?php echo str_replace('"','&quot;',$value['title']);?>"><?php echo $value['title'];?></a>
	<?php echo $value['description'];?>
	</td>
	
	</tr>
	</table>
	</div>
	
	<?php
	
	
	/*
	echo $value['title']."<br/>";
	echo $value['description']."<br/>";
	echo $value['link']."<br/>";
	echo $value['pubDate']."<br/>";
	echo $value['Enclosure']['url']."<br/>";	
	echo "<br/>";*/
$i++;
}
?>
</div>
<div style="clear:both;"></div>
<div id="result" >2222222</div>
<br/>
<h2>CakePHP</h2>
				<h3>Posted on August 26 , 2009 in <a href="#" title="">sNews</a></h3>
				<p>This is DkBlog, a free, fully standards-compliant CSS template designed by <a href="http://www.cakephp.org/">CakePHP Framework Open Source</a>.
Get it now!

CakePHP is a rapid development framework for PHP that provides an extensible architecture for developing, maintaining, and deploying applications. Using commonly known design patterns like MVC and ORM within the convention over configuration paradigm, CakePHP reduces development costs and helps developers write less code. 

				</p>
				<p>
					Here a code sample made with <a id="showajax" href="#" title="Source code styled with CSS">Code2CSS</a>:
				</p>
				
			<ol class="code">
			<li class="t0" ><code>class RecipesController extends AppController {</code></li>
			<li class="t1" ><code>	function view($id){</code></li>
			<li class="t2" ><code>		//action logic goes here..</code></li>
			<li class="t1" ><code>	}</code></li>
			<li class="t1" ><code>	function share($customer_id, $recipe_id){</code></li>
			<li class="t2" ><code>		//action logic goes here..</code></li>
			<li class="t1" ><code>	}</code></li>
			<li class="t1" ><code>	function search($query){</code></li>
			<li class="t2" ><code>		//action logic goes here..</code></li>
			<li class="t1" ><code>	}</code></li>
			<li class="t0" ><code>}</code></li>
			</ol>


				<strong>Hot Features</strong>:
					
						<ul>
					    <li><strong>No Configuration</strong> - Set-up the database and let the magic begin</li>
						<li><strong>Extremely Simple</strong> - Just look at the name...It's Cake</li>
						<li><strong>Active, Friendly Community</strong> - Join us #cakephp on IRC. We'd love to help you get started.</li>
						<li><strong>Flexible License</strong> - Distributed under the MIT License</li>
						<li><strong>Clean IP</strong> - Every line of code was written by the CakePHP development team</li>
						<li><strong>Best Practices</strong> - covering security, authentication, and session handling, among the many other features.</li>
						<li><strong>OO</strong> - Whether you are a seasoned object-oriented programmer or a beginner, you'll feel comfortable</li>
						</ul>

					
				<div class="date"><a href="#" id="comment_showlink1" title="Comment Title" >Comments (5)</a></div>
				<div class="intro" id="comment_title1" style="display:none;margin-bottom:20px;" >testesettttttttttt</div>
				<script type="text/javascript">
				$("#comment_showlink1").click(function(){
				$("#comment_title1").slideToggle("slow"); 
				return false;
				});
				
				
				$("#showajax").click(function(){var dummy = new Date().getTime(); $("#result").slideUp("slow").load("/tests/index/"+dummy ).slideDown("slow"); $("#comment_title1").toggle("slow");return false;})
				</script>
				<h2>Webdesign</h2>
				<h3>Posted on April 11 , 2007 in <a href="#" title="">sNews</a></h3>
				<p>This is DkBlog, a free, fully standards-compliant CSS template designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>.

This free template is released under a Creative Commons Attributions 2.5 license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) 

				</p>
				<p>
					Here a code sample made with <a href="http://www.free-css-templates.com/code2css.php" title="Source code styled with CSS">Code2CSS</a>:
				</p>
				<ol class="code">
					<li class="t0" >for ($i = 0; $i &lt; $num_kw; $i++) {</li>
					<li class="t2" ><code>$keywords = trim($kws[$i]);</code></li>
					<li class="t2" ><code>$value .= &quot; keywords_meta LIKE '%$keywords%' &quot;;</code></li>
					<li class="t2" ><code>if ($i &lt; $num_kw-1) {</code></li>
					<li class="t3" ><code>$value .= &quot; OR &quot;;</code></li>
					<li class="t2" ><code>}</code></li>
					<li class="t0" ><code>}</code></li>
				</ol>
				<p>Blockquote example:</p>
					<blockquote>
						<p>The Extensible HyperText Markup Language, or XHTML, is a markup language that has the same depth of expression as HTML, but with a syntax that conform to XML syntax.</p>
					</blockquote>
				<div class="date"><a href="#" title="#">Comments (5)</a></div>
				<h2>Cascading Style Sheets</h2>
				<h3>Posted on April 10 , 2007 in <a href="#" title="">Internet</a></h3>
				<div class="rs">
					<strong>List example</strong>:
					<ul>
						<li>list line 1</li>
						<li>list line 2
							<ul>
								<li>sublist line a</li>
								<li>sublist line b</li>
							</ul>
						</li>
					</ul>
				</div>
				<p>In computing, <b>Cascading Style Sheets</b> (<b>CSS</b>) is a <a href="http://en.wikipedia.org/wiki/Stylesheet_language" title="Stylesheet language">stylesheet language</a> used to describe the presentation of a document written in a <a href="http://en.wikipedia.org/wiki/Markup_language" title="Markup language">markup language</a>. Its most common application is to style <a href="http://en.wikipedia.org/wiki/Web_page" title="Web page">web pages</a> written in <a href="http://en.wikipedia.org/wiki/HTML" title="HTML">HTML</a> and <a href="http://en.wikipedia.org/wiki/XHTML" title="XHTML">XHTML</a>, but the language can be applied to any kind of <a href="http://en.wikipedia.org/wiki/XML" title="XML">XML</a> document, including <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics" title="Scalable Vector Graphics">SVG</a> and <a href="http://en.wikipedia.org/wiki/XUL" title="XUL">XUL</a>. The CSS specifications are maintained by the <a href="http://en.wikipedia.org/wiki/World_Wide_Web_Consortium" title="World Wide Web Consortium">World Wide Web Consortium</a> (W3C).</p>
				<p>CSS has various levels and profiles. Each level of CSS builds upon the last, typically adding new features and are typically denoted as CSS1, CSS2, and CSS3. Profiles are typically a subset of one or more levels of CSS built for a particular device or user interface. Currently there are profiles for mobile devices, printers, and television sets. Profiles should not be confused with media types which were added in CSS2.</p>
				<div class="date"><a href="#" title="#">Comments (11)</a></div>