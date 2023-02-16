<?php
/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $CI = &get_instance();
                if($CI->session->flashdata('message'))
            $vars['message'] = $CI->session->flashdata('message');
        if(!isset($vars['page'])) $vars['page'] = 'main';
        if(current_url()==site_url('main/free')){
        }else if(!$CI->session->userdata('uid')){
            $vars['page'] = 'login';
            if(!isset($vars['menu']))
            $vars['menu'] = $vars['page'] === 'main' ? 'calculator-menu' : 'home-menu';
            $menu_location = $CI->session->userdata('uid') ? APPPATH."views/user-menu/" : APPPATH."views/visitor-menu/";
            $vars['menu'] = $menu_location.$vars['menu'].'.php';
                    
            $this->view($vars['page'] == 'login'?'landing_page':'page-frame', $vars);
            return;
        }

        if(!isset($vars['menu']))
            $vars['menu'] = $vars['page'] === 'main' ? 'calculator-menu' : 'home-menu';
        $menu_location = $CI->session->userdata('uid') ? APPPATH."views/user-menu/" : APPPATH."views/visitor-menu/";
        $vars['menu'] = $menu_location.$vars['menu'].'.php';
        if($return):
            $content  = $this->view('templates/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else:
            $this->view('templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }
}