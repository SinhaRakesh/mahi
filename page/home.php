<?php
class page_home extends Page{
	function init(){
		parent ::init();

		$this->add('View_Error')->set('ERROR!');
		$this->add('View_Warning')->set('WARNING ??');
		$this->add('Hint')->set('You can use..... HINT');
		
	}
}