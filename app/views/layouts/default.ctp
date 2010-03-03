<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('2OH Online::'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css(array('style'));
		echo $javascript->link('jquery');
		echo $scripts_for_layout;
	?>

</head>
<body>
	
<div id="topbar">
		<div class="content">
			<div id="icons">
					<a href="/" title="Home page"><img src="/images/home.gif" alt="Home" /></a>
					<a href="/pages/contact/" title="Contact us"><img src="/images/contact.gif" alt="Contact" /></a>
					<a href="/pages/sitemap/" title="Sitemap"><img src="/images/sitemap.gif" alt="Sitemap" /></a>
			</div>
			<div class="url">
				<a href="/" title="">2Oh&nbsp;Online</a>
			</div>
		</div>
</div>
	
<div id="top">
	<div class="content">
			<div id="menu">
				<ul>	
					<li><a id="menu_home" href="/" title="home"><span>HOME</span></a></li>
					<li><a href="/pages/gallery" title="Gallery"><span>STORE</span></a></li>
					<li><a href="#" title="Affiliates"><span>AFFILIATES</span></a></li>
					<li><a href="#" title="Articles"><span>ARTICLES</span></a></li>
					<li><a href="#" title="Abous us"><span>ABOUTS US</span></a></li>
					<li><a href="/pages/contact" id="menu_contact" title="Contact"><span>CONTACT</span></a></li>
				</ul>
			</div>
			<h1><a href="/" title="">2OH Online</a></h1>
			<h2>ทูโอ้ ออนไลน์ดอทคอม</h2>
	</div>
</div>

	
<div class="content">
	<div id="main">
		<div class="right_side">
			<div class="pad">
				<h3>CakePHP&nbsp;Recent&nbsp;Articles:</h3>
					<ul>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					</ul>
				
				
				
				
				<h3>Daily Exchange Rates:</h3>
				<ul>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
				</ul>
					
				
					
					<a href="/rss/" title="RSS Feed"><img src="/images/rss.jpg" alt="RSS Feed" /></a>
				
			</div>
		</div>
		
		
		<div class="right_side">
			<div class="pad">
				<h3>Categories:</h3>
					<ul>
					<li><a class="current" href="http://www.2oh-online.com/" title="Home">Home</a></li>
					<li><a href="http://www.free-css-templates.com/free_css_xhtml_templates/" title="Free Css/XHTML Templates for your Websites!">Templates</a></li>
					<li><a href="http://www.divland.com" title="Css techniques">CSS Techniques</a></li>
					<li><a href="http://www.free-css-templates.com/internet-news/" title="Internet News">Internet</a></li>
					<li><a href="http://www.free-css-templates.com/photoshop-stuffs/" title="Photoshop Stuffs">Photoshop</a></li>
					<li><a href="http://www.goragod.com/" title="tutorials about webdesign and photoshop.">Tutorials</a></li>
					<li><a href="http://www.chip.de" title="German Magazine">German Magazine</a></li>
					</ul>
					
					
				<h3><?php __("Change UI language")?></h3>
					<ul>
					<li><?php echo $html->link("English","/orders/ChangeLanguage/eng");?></li>
					<li><?php echo $html->link("Thai","/orders/ChangeLanguage/tha");?></li>
					<li><?php echo $html->link("Deutsch","/orders/ChangeLanguage/deu");?></li>
					<li><?php echo $html->link("Japanese","/orders/ChangeLanguage/jap");?></li>
					</ul>	
						
				<h3>Mune2</h3>
				<ul>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
					<li>test&nbsp;test&nbsp;test&nbsp;test&nbsp;</li>
				</ul>
				
				<h3>Premium Templates</h3>
				<p>These <a href="http://www.free-css-templates.com/website_templates.html" title="Professional Website Designs">website templates</a>, flash templates and other products are ready-made web designs, that can be used as a basis for fast and high-quality website and are completely customizable and ready for immediate download!</p>
			</div>
		</div>
		
		<div id="left_side">
			<div class="intro">
			<?php $session->flash(); ?>
			</div>
			
			



			<div class="mpart">
			
			<?php echo $content_for_layout; ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="right">&copy; Copyright 2009, 2OH Online </div>
			<a href="/rss/" title="RSS Feed">RSS Feed</a> - <a href="http://validator.w3.org/check?uri=referer" title="Validate">XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Validate">CSS</a>
	</div>
</div>
<?php echo $cakeDebug; ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5087152-4");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>