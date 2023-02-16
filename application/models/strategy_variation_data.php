<?php

class strategy_variation_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('strategy_variation_data');
        $this->primary_key = 'svd_id';
        $this->setPrimaryKey($this->primary_key);
    }
}