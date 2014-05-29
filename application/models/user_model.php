<?php

class User_model extends CI_Model {

    private $tb_name;  // 表名


    public function __construct () {
        parent::__construct();
        $this->tb_name = 'user';
    }


    /**
     * 新增记录
     */
    public function insert ($data) {
        if (!$data or !is_array($data)) return false;

        $insert_data = array(
            'username' => $data['username'],
            'password' => md5($data['password']),
            'register_time' => time(),
            'last_login_time' => time()
        );

        $ret = $this->db->insert($this->tb_name, $insert_data);
        return $ret;
    }


    /**
     * 根据用户ID查找记录
     */
    public function find_by_uid ($uid) {
        $uid = intval($uid);
        $query = $this->db->get_where($this->tb_name, array(
            'id' => $uid
        ));
        return $query->row_array();
    }


    /**
     * 根据用户名查找记录
     */
    public function find_by_username ($username) {
        $query = $this->db->get_where($this->tb_name, array(
            'username' => $username
        ));
        return $query->row_array();
    }


    /**
     * 更新最后登录时间
     */
    public function update_last_login_time ($uid) {
        $uid  = intval($uid);
        $time = time();

        $this->db->where('id', $uid);
        $this->db->update($this->tb_name, array('last_login_time' => $time));

        return $time;
    }

}
