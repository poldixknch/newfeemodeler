<?php

class other_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('other_data');
        $this->primary_key = 'od_id';
        $this->setPrimaryKey($this->primary_key);
    }

    function findByLabel($md_id, $label) {
        return parent::find(["md_id" => $md_id, "label" => $label]);
    }
}