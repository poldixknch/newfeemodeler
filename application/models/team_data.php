<?php

class team_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('team_data');
        $this->primary_key = 'td_id';
        $this->setPrimaryKey($this->primary_key);
    }
}