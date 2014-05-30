<?php

class MY_Controller extends CI_Controller {

    protected $_data;  // 公用模版传值数组
    protected $_user;  // 公用用户信息数组


    public function __construct () {
        parent::__construct();
        $this->load->model('user_model');

        $this->_data['site_domain'] = '127.0.0.1:3000';
        $this->_data['site_url'] = 'http://'.$this->_data['site_domain'];
        $this->_data['site_name'] = '多用户博客系统';
        $this->_data['is_login'] = $this->_is_login();

        if (ENVIRONMENT === 'development') {
            $this->output->enable_profiler(true);
        }
    }


    /**
     * 自定义模版加载方法
     */
    protected function _view ($tpl) {
        $this->load->view($tpl, $this->_data);
    }


    /**
     * 判断是否处于登录状态
     */
    protected function _is_login () {
        $ses = $this->session->all_userdata();
        if ($ses && @$ses['uid']) {
            $data = $this->user_model->find_by_uid($ses['uid']);
            if ($data and $ses['password'] == $data['password'] and $ses['last_login'] == $data['last_login_time']) {
                $this->_user['uid'] = intval($data['id']);
                $this->_user['username'] = $data['username'];
                return true;
            }
        }
        return false;
    }

}
