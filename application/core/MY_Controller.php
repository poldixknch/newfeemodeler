<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function load_view($data=null){
        if($this->session->flashdata('message'))
            $data['message'] = $this->session->flashdata('message');
        
        if(!isset($data['page'])) $data['page'] = 'main';
        
        if(current_url()==site_url('main/free')){
        }else if(!$this->session->userdata('uid')) $data['page'] = 'login';
       
        if(!isset($data['menu']))
            $data['menu'] = $data['page'] === 'main' ? 'calculator-menu' : 'home-menu';
        $menu_location = $this->session->userdata('uid') ? APPPATH."views/user-menu/" : APPPATH."views/visitor-menu/";
        $data['menu'] = $menu_location.$data['menu'].'.php';
                
        $this->load->view($data['page'] == 'login'?'landing_page':'page-frame', $data);
    }

}