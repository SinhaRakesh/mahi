<?php
class page_customer extends Page{
	function init(){
		parent ::init();

		$this->add('CRUD')->setModel('Customer');

	//	$f=$this->add('Model_Customer');
	//	$f->addCondition('name','mohan');
	//	$f->load(1);

		//if($f->loaded())
			//echo "name is ".$f['name']." answer  ".$f['date'];


	}
}  