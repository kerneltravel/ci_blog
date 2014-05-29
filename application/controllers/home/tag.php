<?php

class Tag extends MY_Controller {

    public function __construct () {
        parent::__construct();
        if (!$this->_data['is_login']) {
            redirect('/login');
        }
    }


    /**
     * 标签首页
     */
    public function index () {
        $this->_view('home/tag/index');
    }

}
