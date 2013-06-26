<?php
class page_project extends Page{
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Project');

			}
}