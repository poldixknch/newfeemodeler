<?php

class service_offering_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('service_offering_data');
        $this->primary_key = 'sod_id';
        $this->setPrimaryKey($this->primary_key);
    }
}