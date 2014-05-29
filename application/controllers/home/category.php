<?php

class Category extends MY_Controller {

    public function __construct () {
        parent::__construct();
        if (!$this->_data['is_login']) {
            redirect('/login');
        }
    }


    /**
     * 分类首页
     */
    public function index () {
        $this->_view('home/category/index');
    }


    /**
     * 添加分类
     */
    public function add () {
        $this->_view('home/category/add');
    }

}
