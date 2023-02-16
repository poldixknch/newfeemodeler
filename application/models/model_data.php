<?php

class model_data extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTable('model_data');
        $this->primary_key = 'md_id';
        $this->setPrimaryKey($this->primary_key);
    }

    function insert($model_data = null) {
        if($model_data == null) {
            $model_data = [
                "uid" => $this->session->userdata("uid"),
                "file_name" => $this->input->post("file_name"),
                "date_created" => $this->getCurrentDate(),
                "date_modified" => $this->getCurrentDate()
            ];
        }
        return parent::insert2($model_data);
    }

    function update($primary_key, $model_data = null) {
        if($model_data == null) {
            $model_data = [
                "md_id" => $primary_key,
                "file_name" => $this->input->post("file_name"),
                "date_modified" => $this->getCurrentDate()
            ];
        }
        return parent::update($model_data);
    }

    function getLists() {
        $file_name = $this->input->get("file_name");
        $this->db->select('*');
        $this->db->from('model_data');
        if ($this->session->userdata('role') != 'admin') {
            $this->db->where("uid", $this->session->userdata('uid'));
        }
        if(!is_null($file_name) && trim($file_name) != "") {
            $this->db->like("file_name", $file_name);
        }
        $this->db->order_by('date_modified', 'DESC');
        return $this->db->get()->result_array();
    }
}