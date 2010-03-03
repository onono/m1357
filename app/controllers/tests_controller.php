<?php
class TestsController extends AppController {

	var $name = 'Tests';
	var $uses = array('Order');
	var $helpers = array('Html','Javascript');
	//var $scaffold;
	
	
	
	function index(){
		$this->layout='ajax';
	}
	
	
	
}
?>
