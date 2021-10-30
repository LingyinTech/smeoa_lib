<?php

/*---------------------------------------------------------------------------
                              _oo8oo_
                             o8888888o
                             88" . "88
                             (| -_- |)
                             0\  =  /0
                           ___/'==='\___
                         .' \\|     |// '.
                        / \\|||  :  |||// \
                       / _||||| -:- |||||_ \
                      |   | \\\  -  /// |   |
                      | \_|  ''\---/''  |_/ |
                      \  .-\__  '-'  __/-.  /
                    ___'. .'  /--.--\  '. .'___
                 ."" '<  '.___\_<|>_/___.'  >' "".
                | | :  `- \`.:`\ _ /`:.`/ -`  : | |
                \  \ `-.   \_ __\ /__ _/   .-` /  /
            =====`-.____`.___ \_____/ ___.`____.-`=====
                              `=---=`
           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                                                        佛祖保佑         永不宕机/永无bug
   
 Copyright (c) 2014 http://www.xiehuanjin.cn All rights reserved.                                             

  @Author:  xie.hj<xie.hj@thinkalways.net>                                 
 -------------------------------------------------------------------------*/

class RoleModel extends CommonModel
{
    public $_validate = array(array('name', 'require', '名称必须'),);

    function get_node_list($role_id)
    {
        $rs = $this->db->query('SELECT * FROM ' . $this->tablePrefix . "role_node as a  WHERE a.role_id='{$role_id}'");
        return $rs;
    }

    function del_node($role_id, $node_list)
    {
        if (empty($node_list)) {
            return true;
        }
        if (is_array($node_list)) {
            $node_list = array_filter($node_list);
        } else {
            $node_list = explode(",", $node_list);
            $node_list = array_filter($node_list);
        }
        $node_list = implode(",", $node_list);
        $table = $this->tablePrefix . 'role_node';

        $result = $this->db->execute('DELETE FROM ' . $table . ' WHERE role_id=' . $role_id . ' AND node_id in (' . $node_list . ')');

        if ($result === false) {
            return false;
        } else {
            return true;
        }
    }

    function set_node($role_id, $node_list)
    {
        if (empty($node_list)) {
            return true;
        }
        if (is_array($node_list)) {
            $node_list = array_filter($node_list);
        } else {
            $node_list = explode(",", $node_list);
            $node_list = array_filter($node_list);
        }

        foreach ($node_list as $node) {
            $result = $this->db->execute('INSERT INTO ' . $this->tablePrefix . 'role_node (role_id,node_id) values(' . $role_id . ',' . $node . ')');
            if ($result === false) {
                return false;
            }
        }
        return true;
    }

    function get_role_list($user_id)
    {
        $table = $this->tablePrefix . 'role_user';
        $rs = $this->db->query('select a.role_id from ' . $table . ' as a where a.user_id=' . $user_id . ' ');
        return $rs;
    }

    function del_role($user_list)
    {
        if (empty($user_list)) {
            return true;
        }
        if (is_array($user_list)) {
            $user_list = array_filter($user_list);
        } else {
            $user_list = explode(",", $user_list);
            $user_list = array_filter($user_list);
        }
        $user_list = implode(",", $user_list);

        $table = $this->tablePrefix . 'role_user';

        $result = $this->db->execute('delete from ' . $table . ' where user_id in (' . $user_list . ')');
        if ($result === false) {
            return false;
        } else {
            return true;
        }
    }

    function set_role($user_list, $role_list)
    {

        if (empty($user_list)) {
            return true;
        }
        if (empty($role_list)) {
            return true;
        }
        if (is_array($user_list)) {
            $user_list = array_filter($user_list);
        } else {
            $user_list = explode(",", $user_list);
            $user_list = array_filter($user_list);
        }
        $user_list = implode(",", $user_list);

        if (is_array($role_list)) {
            $role_list = array_filter($role_list);
        } else {
            $role_list = explode(",", $role_list);
            $role_list = array_filter($role_list);
        }
        $role_list = implode(",", $role_list);

        $where = 'a.id in (' . $user_list . ') AND b.id in(' . $role_list . ')';
        $sql = 'INSERT INTO ' . $this->tablePrefix . 'role_user (user_id,role_id) ';
        $sql .= ' SELECT a.id, b.id FROM ' . $this->tablePrefix . 'user a, ' . $this->tablePrefix . 'role b WHERE ' . $where;
        $result = $this->execute($sql);
        if ($result === false) {
            return false;
        } else {
            return true;
        }
    }

    function get_duty_list($role_list)
    {
        if (is_array($role_list)) {
            $role_list = array_filter($role_list);
        } else {
            $role_list = explode(",", $role_list);
            $role_list = array_filter($role_list);
        }
        $role_list = implode(",", $role_list);
        return $this->db->query('SELECT DISTINCT partner_id FROM ' . $this->tablePrefix . 'role_duty AS a WHERE a.user_id in(' . $role_list . ')');
    }

    function del_duty($role_list)
    {
        if (empty($role_list)) {
            return true;
        }
        if (is_array($role_list)) {
            $role_list = array_filter($role_list);
        } else {
            $role_list = explode(",", $role_list);
            $role_list = array_filter($role_list);
        }
        $role_list = implode(",", $role_list);

        $table = $this->tablePrefix . 'role_duty';

        $result = $this->db->execute('DELETE FROM ' . $table . ' WHERE user_id IN (' . $role_list . ')');
        if ($result === false) {
            return false;
        } else {
            return true;
        }
    }

    function set_partner($role_list, $duty_list)
    {
        if (empty($role_list)) {
            return true;
        }

        if (is_array($role_list)) {
            $role_list = array_filter($role_list);
        } else {
            $role_list = array_filter(explode(",", $role_list));
        }
        $role_list = implode(",", $role_list);

        if (empty($duty_list)) {
            return true;
        }
        if (is_array($duty_list)) {
            $duty_list = array_filter($duty_list);
        } else {
            $duty_list = array_filter(explode(",", $duty_list));
        }
        $duty_list = implode(",", $duty_list);

        $where = 'a.id in(' . $role_list . ') AND b.id in(' . $duty_list . ')';
        $sql = 'INSERT INTO ' . $this->tablePrefix . 'role_duty (user_id,partner_id)';
        $sql .= ' SELECT a.id, b.id FROM ' . $this->tablePrefix . 'user a, ' . $this->tablePrefix . 'partner b WHERE ' . $where;
        return $this->execute($sql);
    }

}
