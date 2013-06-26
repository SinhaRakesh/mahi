<?php
class View_ProjectList extends View{
	
	function setModel($model){

		if(!($model instanceof Model_Customer)) throw $this->exception("Only Customer Model is Allowed");

		foreach ($p=$model->ref('Project') as $junk) {
			$this->add('View_Project',null,null,array('view/project'))->setModel($p);
		}

		parent::setModel($model);
	}


}