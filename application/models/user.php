<?php

class user extends MY_Model {
    
    function __construct() {
        parent::__construct();
        parent::setPrimaryKey('uid');
        parent::setTable('user');
    }
       
    function getAll() {
        return $this->db->order_by('uid','DESC')->get('user')->result();
    }
    
    function insert($data, $active = 0, $role = 'principal') {
        if(strlen($data['email'])<5) return 'Please provide valid email';
        $exist = parent::findAll(array('email'=>$data['email']));
        if(count($exist) > 0) return 'email already registered';
        else{
            $data['active'] = $active;
            $data['role'] = $role;
            parent::insert($data, true);
            return true;
        }
    }
    
    function authenticate($data){
        $exist = parent::findAll(array('email'=>$data['email']));
        if(count($exist) < 1) return 'Email not registered';
        
        else $user = reset ($exist);
        if($user->active < 1) return 'Account not active';
        else if($user->password !== $data['password']) return 'Password did not match, forgot password ?';
        else $this->session->set_userdata($user);
    }
    
    function forgot($data){
        $exist = parent::findAll(array('email'=>$data['email']));
        if(count($exist) < 1) return 'Email not registered';
        else $user = reset ($exist);
        if($user->active < 1) return 'Account not active';
        $user = (array) $user;
        $user['password'] = time();
        $this->user_send_mail('reset_password', $user);
        $user['password'] = md5($user['password']);
        parent::update($user);
        return 'Your new password has been sent to your email';
    }
            
    function user_send_mail($mail_type, $data){
        $site_name = str_replace('http://', '', base_url());
        switch ($mail_type) {
            case 'welcome':
                $html_message = "Welcome to $site_name,<br/>".
                "Glad to receive your registration submission, please wait while we are activating your account,<br/>".
                "You could login to the site after receiving next email containing activation notification from us<br/>".
                "<br/>Thank you";
                parent::audere_send_mail($data['email'], $html_message, "Registration Successfull @ $site_name");
                break;
            case 'registration_received':
                $newuser = $data['email'];
                $user_list_page = site_url('account');
                $html_message = "A new registration form has received from $newuser,<br/>".
                                "You could activate it <a href='$user_list_page'>here</a>";
                parent::audere_send_mail(null, $html_message, "New registration received @ $site_name");
                break;
            case 'account_activated':
                $login_page = base_url();
                $html_message = "Congratulation,<br/>".
                        "Your account has been activated, please <a href='$login_page'>login here</a>";
                parent::audere_send_mail($data['email'], $html_message, "Account activation successfull @ $site_name");
                break;
            case 'reset_password':
                $login_page = base_url();
                $new_pwd = $data['password'];
                $html_message = "Dear user,<br/>".
                        "Your new password is $new_pwd, please <a href='$login_page'>login here</a>";
                parent::audere_send_mail($data['email'], $html_message, "Password reset successfull @ $site_name");
                break;
        }
    }
}
