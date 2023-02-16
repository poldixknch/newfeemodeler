<?php

class one_one_service_data extends MY_Model {

  function __construct() {
    parent::__construct();
    $this->setTable('one_one_service_data');
    $this->primary_key = 'oosd_id';
    $this->setPrimaryKey($this->primary_key);
  }

  function findAllWithService($where) {
    $this->db->from('one_one_service_data');
    $this->db->join('service_offering_data', 'service_offering_data.service_id = one_one_service_data.oosd_id AND service_type = "one_to_one"', 'left');
    $result = $this->db->where($where)->get()->result_array();
    $return_result = [];
    foreach($result as &$data) {
      for($i = 1; $i <= 7; $i++) {
        $data["service_offering"]["service_" . $i] = !is_null($data["service_" . $i]) && $data["service_" . $i] != 0 ? numericDisplay($data["service_" . $i]) : "";
        unset($data["service_" . $i]);
      }
      unset($data["service_type"]);
      unset($data["service_id"]);
      unset($data["sod_id"]);
      $return_result[] = $data;
    }
    unset($data);
    return $return_result;
  }
}