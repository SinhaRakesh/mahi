<?php
class page_page1 extends Page{

	function init(){
		parent ::init();
		$this->api->stickyGET('customer');

		$form=$this->add('Form');
		$form->addField('dropdown','name','Customer Name')->setEmptyText('Select any one')->setModel('Customer'); 

		$form->addSubmit('Submit');
		$grid=$this->add('Grid');
		$p=$this->add('Model_Project');
		$grid->addPaginator(1);
		if($_GET['customer']) $p->addCondition('customers_id',$_GET['customer']);

		$grid->setModel($p);

		if($form->isSubmitted()){
			$grid->js()->reload(array('customer'=>$form->get('name')))->execute();
		}
	}
}