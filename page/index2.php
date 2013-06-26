<?php
class page_index2 extends Page{
    function page_index(){
        // parent::init();

        $grid=$this->add('Grid');

        $grid->setModel('Customer');

        $grid->addColumn('expander','try','Project');
    }

    function page_try(){

        $this->api->stickyGET('customers_id');


        $grid=$this->add('Grid');
        $p=$this->add('Model_Project');
        // throw new Exception("Error Processing Request.". $_GET['customers_id']);

        $p->addCondition('customers_id',$_GET['customers_id']);
        

        $grid->setModel($p);

        $grid->addColumn('expander','com','Complain');

    }

    function page_try_com(){

        $this->api->stickyGET('projects_id');

        $grid=$this->add('Grid');

        $c=$this->add('Model_Complaint');


        $c->addCondition('projects_id',$_GET['projects_id']);

        // $c->tryLoadAny();

        $grid->setModel($c);






    }
}