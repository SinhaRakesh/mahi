<?php
class page_learnview extends Page{
	function init(){
		parent::init();
		$form=$this->add('Form');
		$field_customer=$form->addField('dropdown','customers');
		$field_customer->setModel('Customer');

		$form->addSubmit("Refresh");

		$view=$this->add('View_ProjectList');

		$customer=$this->add('Model_Customer');

		if($_GET['customer']){
			$customer->load($_GET['customer']);
			$view->setModel($customer);
		}




		if($form->isSubmitted()){
			$view->js()	->reload(array('customer'=>$form->get('customers')))->execute();
		}
	}
}