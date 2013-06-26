<?php
class Model_Customer extends Model_Table{
	var $table='customers';
	
	function init(){
		parent::init();

		$this->addField('name')->mandatory("Name is Must");
		$this->addField('user_name')->caption("Person Name");
		$this->addField('date')->type('date');
		$this->addField('password')->type('password');
		$this->addField('is_active')->type('boolean');

		$this->hasMany('Project','customers_id');

		$this->addExpression('total_projects')->set(function($m,$q){
			return $m->refSQL('Project')->count();

		});


	}
}