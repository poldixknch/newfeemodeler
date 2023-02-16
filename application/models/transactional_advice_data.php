<?php

class transactional_advice_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('transactional_advice_data');
        $this->primary_key = 'tad_id';
        $this->setPrimaryKey($this->primary_key);
    }
}