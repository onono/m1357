<?php
class OrdersController extends AppController {

	var $name = 'Orders';
	var $uses = array();
	var $helpers = array('Html','Javascript');
	//var $scaffold;
	
	
	
	function index(){
	
	}
	
	function test(){
	
	}
	
	function changeLanguage($lang=null){
		$this->Session->write('Config.language', $lang); 
		$this->redirect($this->referer());
	}
	
}
?>
