<?php

class standard_advice_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('standard_advice_data');
        $this->primary_key = 'sad_id';
        $this->setPrimaryKey($this->primary_key);
    }
}