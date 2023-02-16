<?php

class account extends MY_Controller {

    function index() {
        $this->load->model('user');
        $data['stored'] = $this->user->getAll();
        $data['page'] = 'user-list';
        parent::load_view($data);
    }

	function add(){
		$this->load->model('user');
		if($this->input->post()){
			$post = $this->input->post();
			$exists = $this->user->findAll(array('email'=>$post['email']));
            if(count($exists)<1){
            	$post['password'] = md5($post['password']);
            	$this->user->insert($post,1);
                $this->user->user_send_mail('welcome', $post);
                $this->user->user_send_mail('registration_received', $post);
			}
		}
		$data['page'] = 'add-user';
        parent::load_view($data);
	}

    function update($uid){
        $post = $this->input->post();
        $this->load->model('user');
        $user = $this->user->load($uid);
        $user['role'] = isset($post['role'])?$post['role']:$user['role'];
        $user['active'] = isset($post['active'])?$post['active']:$user['active'];
        $this->user->update($user, $uid);
        redirect(site_url('account'));
    }
    
    function delete($uid, $confirmed = false){
        if(!$confirmed) parent::load_view (array('page'=>'confirm'));
        else{
            $this->load->model('user');
            $this->user->delete($uid);
            redirect(site_url('account'));
        }
    }
    
    function change_password(){
        $post = $this->input->post();
        if($post){
            $this->load->model('user');
            $user = $this->user->load($this->session->userdata('uid'));
            if(md5($post['old'])!=$user['password']) $data['message'] = 'Current password does not match';
            else if($post['new1']!=$post['new2']) $data['message'] = 'New Password does not match';
            else{
                $user['password'] = md5($post['new1']);
                $this->user->update($user, $user["uid"]);
                $data['message'] = 'Password changed successfully';
            }
        }
        $data['page'] = 'change-password';
        parent::load_view($data);
    }
}
