<?php
class Model_Complaint extends Model_Table{
	var $table='complaints';
	function init(){
		parent::init();

			$this->hasOne('Project','projects_id');
			$this->addField('name');
			$this->addField('date');
			$this->addField('cost');
			$this->addField('is_solved')->type('boolean');
			$this->hasMany('Followup','complaints_id');

		$this->addExpression('avcd')->set(function ($m,$q){
			return $m->refSQL('Followup')->count();

		 });
		
	}
}