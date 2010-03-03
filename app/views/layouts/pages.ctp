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
					<?php 
					$i=0;
					foreach($xml4['Rss']['Channel']['Item'] as $value4){?>
					<li>
					<a id="article<?php echo $i;?>" href="#" title="<?php echo str_replace('"','&quot;',$value4['title']);?>"><?php echo $value4['title'];?></a><p id="article_detail<?php echo $i;?>" style="display:none; color:#e7e7e7;" ><?php echo str_replace('"','&quot;',$value4['description']);?><a href="<?php echo $value4['link'];?>" title="<?php echo str_replace('"','&quot;',$value4['title']);?>">more..</a></p></li>
					
					<?php 
					$i++;
					} ?>
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
					
	
					
					
					
				<h3>รายงานสภาวะอากาศ</h3>
				<a href="<?php echo $xml3['Rss']['Channel']['Item']['link'];?>" title="<?php echo str_replace('"','&quot;',$xml3['Rss']['Channel']['Item']['title']);?>"><?php echo $xml3['Rss']['Channel']['Item']['title'];?></a>
				<?php echo $xml3['Rss']['Channel']['Item']['description'];?>
					
				
				<h3>Premium Templates</h3>
				<p>These <a href="http://www.free-css-templates.com/website_templates.html" title="Professional Website Designs">website templates</a>, flash templates and other products are ready-made web designs, that can be used as a basis for fast and high-quality website and are completely customizable and ready for immediate download!</p>
			</div>
		</div>
		
		<div id="left_side">
			<div class="intro">
				<div class="pad"><strong>2OH-Online</strong>&nbsp;เราเขียนเวบโดยใช้ภาษา PHP ออกแบบฐานข้อมูล MySQL อ้างอิงมาตรฐาน W3C นำเทคโนโลยี PHP Framework ของ CakePHP มาใช้เป็นแกนหลักในการพัฒนา Web Application เพื่อประสิทธิภาพและง่ายต่อการบำรุงรักษา ที่สำคัญเราหวังให้ผู้ใช้งานทั่วไปมีทัศนคติที่ดีต่อการใช้งาน Web Application และ Internet เพื่อชีวิตออนไลน์
					<br /><a href="#" id="show_intro" title="sNews cms">Read more...</a>
					<div class="intro" id="title_intro" style="display:none;margin-bottom:20px;" ><br />
			เรามีใช้เครื่องมือพัฒนาทั้งหมดที่เป็น Open Source จึงหมดกังวลเรื่องลิขสิทธิ์ และความยืดหยุ่นในการแก้ไขโปรแกรม<br/>
			เทคโนโลยี Framework ที่เราใช้ เช่น CakePHP, jQuery, Prototype, Codeignitor เป็นต้น<br/>
			การใช้ Framework ทำให้การเขียน Web Application เป็นไปในทิศทางเดียวกัน ง่ายต่อการบำรุงรักษา เราสามารถ Traning บุคลากรของท่านเพื่อจะได้แก้ไข Web Site ได้เองโดยไม่ทำให้ระบบเสียหายเพราะใช้คู่มือหลักการเขียนแนวทางเดียวกัน
			</div>
				</div>
			</div>
			
			
			<script type="text/javascript">
				$("#show_intro").click(function(){$("#title_intro").slideToggle("slow");return false;});
				$("#article0").click(function(){$("#article_detail0").slideToggle("slow");return false;});
				$("#article1").click(function(){$("#article_detail1").slideToggle("slow");return false;});
				$("#article2").click(function(){$("#article_detail2").slideToggle("slow");return false;});
				$("#article3").click(function(){$("#article_detail3").slideToggle("slow");return false;});
				$("#article4").click(function(){$("#article_detail4").slideToggle("slow");return false;});
				$("#article5").click(function(){$("#article_detail5").slideToggle("slow");return false;});
				$("#article6").click(function(){$("#article_detail6").slideToggle("slow");return false;});
				$("#article7").click(function(){$("#article_detail7").slideToggle("slow");return false;});
				$("#article8").click(function(){$("#article_detail8").slideToggle("slow");return false;});
				$("#article9").click(function(){$("#article_detail9").slideToggle("slow");return false;});
				$("#article10").click(function(){$("#article_detail10").slideToggle("slow");return false;});
				$("#article11").click(function(){$("#article_detail11").slideToggle("slow");return false;});
				$("#article12").click(function(){$("#article_detail12").slideToggle("slow");return false;});
				$("#article13").click(function(){$("#article_detail13").slideToggle("slow");return false;});
				$("#article14").click(function(){$("#article_detail14").slideToggle("slow");return false;});
			</script>


			<div class="mpart">
			<?php $session->flash(); ?>
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