<?php
/* SVN FILE: $Id: pages_controller.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 */
class PagesController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';
/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html');
/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array();
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function display() {
		$this->layout = 'pages';
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title = Inflector::humanize($path[$count - 1]);
		}
		App::import('Xml'); 
		
		
		$xml = new Xml("http://www.rssthai.com/rss/it.xml");
		$xml = Set::reverse($xml);
		
		//$xml2 = new Xml("http://www.itnews.com.au/RSS/rss.ashx?type=Category&ID=406");
		//$xml2 = Set::reverse($xml2); 
		
		$xml3 = new Xml("http://www.tmd.go.th/xml/weather_report.php?StationNumber=48327");
		$xml3 = Set::reverse($xml3); 
		
		$xml4 = new Xml("http://bakery.cakephp.org/articles/rss");
		$xml4 = Set::reverse($xml4);
		
		//$xml5 = new Xml("http://www2.bot.or.th/RSS/fxrates/fxrate-all.xml");
		//$xml5 = Set::reverse($xml5);
		/*
		$xml6 = new Xml("http://www.chip.de/rss/rss_bildergalerie.xml");
		$xml6 = Set::reverse($xml6);
		*/
		//$xml6 = new Xml("http://groups.google.com/group/cakephp-de/feed/rss_v2_0_topics.xml?num=50");
		//$xml6 = Set::reverse($xml6);
		
		//debug($xml6);
		$this->set('xml',$xml);
		//$this->set('xml2',$xml2);
		$this->set('xml3',$xml3);
		$this->set('xml4',$xml4);
		//$this->set('xml5',$xml5);
		//$this->set('xml6',$xml6);
		$this->set(compact('page', 'subpage', 'title'));
		$this->render(join('/', $path));
	}
}

?>