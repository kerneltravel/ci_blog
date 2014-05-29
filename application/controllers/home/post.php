<?php

class Post extends MY_Controller {

    public function __construct () {
        parent::__construct();
        if (!$this->_data['is_login']) {
            redirect('/login');
        }
    }


    /**
     * 文章首页
     */
    public function index () {
        $this->_view('home/post/index');
    }

}
