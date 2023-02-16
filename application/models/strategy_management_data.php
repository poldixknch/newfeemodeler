<?php

class strategy_management_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('strategy_management_data');
        $this->primary_key = 'sm_id';
        $this->setPrimaryKey($this->primary_key);
    }
}