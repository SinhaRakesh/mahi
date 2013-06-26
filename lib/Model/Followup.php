<?php
class Model_Followup extends Model_Table{
	var $table='followups';
	function init(){
		parent::init();

		$this->hasOne('Complaint','complaints_id');
		$this->addField('name');
		$this->addField('date');
		
	}
}