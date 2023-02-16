<?php

class financial_target_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('financial_target_data');
        $this->primary_key = 'ftd_id';
        $this->setPrimaryKey($this->primary_key);
    }
}