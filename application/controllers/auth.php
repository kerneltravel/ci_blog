<?php

class Auth extends MY_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->model('user_model');
    }


    /**
     * 主入口
     */
    public function index () {
        var_dump('首页');

        // todo: 转到真正的首页去
    }


    /**
     * 登录
     */
    public function login () {
        if ($this->is_login()) $this->index();
        $this->load->view('auth/login');
    }


    /**
     * 执行登录
     */
    public function login_action () {
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));

        if (!$username and !$password) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名和密码不能为空')));
        } elseif (!$username) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名不能为空')));
        } elseif (!$password) {
            exit(json_encode(array('status' => 0, 'msg' => '密码不能为空')));
        }

        $data = $this->user_model->find_by_username($username);
        if (!$data) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名不存在')));
        }
        if (md5($password) !== $data['password']) {
            exit(json_encode(array('status' => 0, 'msg' => '密码错误')));
        }

        // 更新最后登录时间
        $last_login = $this->user_model->update_last_login_time($data['id']);

        $this->session->set_userdata(array(
            'uid'        => $data['id'],
            'username'   => $data['username'],
            'password'   => $data['password'],
            'last_login' => $last_login
        ));
        exit(json_encode(array('status' => 1, 'msg' => '登录成功，即将跳转到首页', 'url' => '/')));
    }


    /**
     * 登出
     */
    public function login_out () {
        $this->session->sess_destroy();
        $this->index();
    }


    /**
     * 注册
     */
    public function register () {
        if ($this->is_login()) $this->index();
        $this->load->view('auth/register');
    }


    /**
     * 执行注册
     */
    public function register_action () {
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));

        if (!$username and !$password) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名和密码不能为空')));
        } elseif (!$username) {
            exit(json_encode(array('status' => 0, 'msg' => '用户名不能为空')));
        } elseif (!$password) {
            exit(json_encode(array('status' => 0, 'msg' => '密码不能为空')));
        }

        // 先检查该用户名是否已被注册
        $check = $this->user_model->find_by_username($username);
        if ($check) {
            exit(json_encode(array('status' => 0, 'msg' => '该用户名已注册')));
        }

        $data = array(
            'username' => $username,
            'password' => $password
        );

        $ret = $this->user_model->insert($data);
        if ($ret) {
            exit(json_encode(array('status' => 1, 'msg' => '注册成功，即将跳转到首页', 'url' => '/')));
        } else {
            exit(json_encode(array('status' => 0, 'msg' => '注册失败')));
        }
    }


    /**
     * 判断是否处于登录状态
     */
    public function is_login () {
        $ses = $this->session->all_userdata();
        if ($ses && @$ses['uid']) {
            $data = $this->user_model->find_by_uid($ses['uid']);
            if ($ses['password'] == $data['password']
                and $ses['last_login'] == $data['last_login_time']) {
                    return true;
                }
        }
        return false;
    }

}
