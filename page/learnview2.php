<?php
class page_learnview2 extends Page{
	function init(){
		parent::init();
		$form=$this->add('Form');
		$field_customer=$form->addField('dropdown','customers');
		$field_customer->setModel('Customer');

		$form->addSubmit("Refresh");
		$v=$this->add('View');

		if($_GET['customer']){
			$p=$this->add('Model_Project');
			$p->addCondition('customers_id',$_GET['customer']);
			// throw $this->exception($p->count());
			foreach ($p as $junk) {
				$v->add('View_Project',null,null,array('view/project'))->setModel($p);
			}
		}
		




		if($form->isSubmitted()){
			$v->js()->reload(array('customer'=>$form->get('customers')))->execute();
		}
	}
}