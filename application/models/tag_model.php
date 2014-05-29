<?php

class Tag_model extends CI_Model {

    private $tb_name;  // 表名


    public function __construct () {
        parent::__construct();
        $this->tb_name = 'tag';
    }

}
