<?php

class Index extends MY_Controller {

    public function __construct () {
        parent::__construct();
    }


    /**
     * 站点首页
     */
    public function index () {
        $this->_view('www/index/index');
    }

}
