<?php
class View_Project extends View{
		
		function setModel($model){

		// $this->add('H1',null,'project_name')->set($model['name']);

			$this->template->trySet('name',123);
			// $this->add('Button',null,'btn')->js('click')->univ()->frameURL('frametitle',$this->api->url('index'));
		parent::setModel($model);
	}
}