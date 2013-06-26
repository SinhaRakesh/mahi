<?php
class page_complaint extends Page{
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Complaint');
		
	}
}