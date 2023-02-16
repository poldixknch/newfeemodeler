<?php

class auth extends MY_Controller {
    function login($action = null){
        $post = $this->input->post();
        $post['password'] = isset($post['password']) ? md5($post['password']) : null ;
        $this->load->model('user');
        switch ($action) {
            case 'forgot':
                $this->session->set_flashdata('message', $this->user->forgot($post));
                break;
            case 'register':
                $exists = $this->user->findAll(array('email'=>$post['email']));
                if(count($exists)>0) 
                    $this->session->set_flashdata('message', 'Email already registered');
                else{
                    $this->user->insert($post);
                    $this->session->set_flashdata('message', 'Registration success!, please check your email');
                    $this->user->user_send_mail('welcome', $post);
                    $this->user->user_send_mail('registration_received', $post);
                }
                break;
            case 'logout':
                $this->session->sess_destroy();
                break;
            default:
                $this->session->set_flashdata('message', $this->user->authenticate($post));
                break;
        }
        redirect(base_url());
    }
}
