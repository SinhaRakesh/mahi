<?php
class Model_Project extends Model_Table{
	var $table='projects';
	function init(){
		parent ::init();

		$this->hasOne('Customer','customers_id');
		$this->addField('name');
		$this->hasMany('Complaint','projects_id');
		
		$this->addExpression('unsolved_complaints')->set(function($m,$q){
			return $m->refSQL('Complaint')->addCondition('is_solved',false)->count();
		});

		$this->addExpression('remaining_cost')->set(function($m,$q){
				return $m->refSQL('Complaint')->addCondition('is_solved',false)->sum('cost');

			});
	}
}