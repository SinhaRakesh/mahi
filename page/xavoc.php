<?php
class page_xavoc extends Page{
	
	function init(){
		parent::init();

		$this->add('View_Info')->set('Hellow Customer ID No is : ' . $_GET['id']);

		$model=$this->add('Model_Project');
		$model->addCondition('customers_id',$_GET['id']);

		$grid=$this->add('Grid');

		$grid->setModel($model);

		$this->add('View_Error')->set(' Happy ----------------------------------------------------------');

	}

}