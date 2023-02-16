<?php

class MY_Model extends CI_Model {

    private $table;
    private $primary_key;
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getCurrentDate() {
        return date("Y-m-d H:i:s");
    }

    function setTable($table){
        $this->table = $table;
    }
    
    function setPrimaryKey($field){
        $this->primary_key = $field;
    }
    
    function getAll(){
        return $this->db->get($this->table)->result();
    }
    
    function findAll($where, $array = false){
        if($array) {
            return $this->db->get_where($this->table, $where)->result_array();
        }
        return $this->db->get_where($this->table, $where)->result();
    }
    
    function load($primary_key){
        $where[$this->primary_key] = $primary_key;
        return $this->find($where);
    }
    
    function find($where){
        return $this->db->get_where($this->table, $where)->row_array();
    }
    
    function insert($data){
        $data[$this->primary_key] = time();
        $this->db->insert($this->table,$data);
        return $data[$this->primary_key];
    }

    function insert2($data) {
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    
    function update($data){
        return $this->db->where($this->primary_key, $data[$this->primary_key])->update($this->table,$data);
    }

    function updateWhere($data, $where) {
        return $this->db->where($where)->update($this->table, $data);
    }
    
    function delete($primary_key){
        return $this->db->where($this->primary_key,$primary_key)->delete($this->table);
    }

    function delete_not_in($where, $not_in_key, $not_in) {
        if(is_array($where)) {
            $this->db->where($where);
        }
        $this->db->where_not_in($not_in_key, $not_in);
        $this->db->delete($this->table);
    }

    function emptyTable() {
        $this->db->empty_table($this->table);
    }
    
    function audere_send_mail($to = null, $htmlMessage, $subject) {
        $sender['name'] = 'audere.com.au';
        $sender['email']= 'info@audere.com.au';
        
        $to = null === $to ? $sender['email'] : $to ;
        $list = is_array($to) ? $to : array($to);
        
        $this->load->library('email');
        $this->email->clear();
        $config['mailtype'] = "html";
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($sender['email'], $sender['name']);
        $this->email->to($list);
        $this->email->subject($subject);
        $this->email->message($htmlMessage);
        
        return $this->email->send() ? true : $this->email->print_debugger();
    }
}