<?php
class page_followup extends Page{
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Followup');
	}
}