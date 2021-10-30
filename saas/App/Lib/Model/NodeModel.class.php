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
   
    ThinkOA - 畅想科技出品
    Copyright (c) 2015 http://www.thinkalways.net All rights reserved.                                             

    @Author:  xie.hj<xie.hj@thinkalways.net>    
    @since 20150323 xie.hj@thinkalways.net 创建版本                             
 -------------------------------------------------------------------------*/


// 节点模型
class NodeModel extends CommonModel
{
    protected $_validate = array(
        array('name', 'checkNode', '节点已经存在', 0, 'callback'),
    );

    public function checkNode()
    {
        $map['name'] = $_POST['name'];
        $map['pid'] = isset($_POST['pid']) ? $_POST['pid'] : 0;
        $map['is_del'] = 1;
        if (!empty($_POST['id'])) {
            $map['id'] = array('neq', $_POST['id']);
        }
        $result = $this->where($map)->field('id')->find();
        if ($result) {
            return false;
        } else {
            return true;
        }
    }

    public function checkAccess($url)
    {
        if(is_array($url)) {
            $url = implode("','",$url);
        }

        $userId = get_user_id();
        $sql = " SELECT  c.id";
        $sql .= " FROM " . $this->tablePrefix . "role_user AS a, " . $this->tablePrefix . "role_node b, " . $this->tablePrefix . "node AS c ";
        $sql .= " WHERE a.role_id = b.role_id and c.id = b.node_id ";
        $sql .= " AND a.user_id = {$userId}";
        $sql .= " AND c.url in ('{$url}')";
        $sql .= " group by c.id ";

        return $this->db->query($sql);

    }

    public function access_list($includeDel = false)
    {
        $userId = get_user_id();
        $sql = " SELECT  c.id, c.pid, c.name, c.url,sum(b.admin) as 'admin' ,sum(b.write) as  'write' ,sum(b.read) as 'read',c.icon ";
        $sql .= " FROM " . $this->tablePrefix . "role_user AS a, " . $this->tablePrefix . "role_node b, " . $this->tablePrefix . "node AS c ";
        $sql .= " WHERE a.role_id = b.role_id and c.id = b.node_id ";
        $sql .= " AND a.user_id ={$userId}";
        empty($includeDel) && $sql .= " AND c.is_del = 0";
        $sql .= " group by c.id ";
        $sql .= " ORDER BY c.sort ";
        return $this->db->query($sql);
    }

    public function getDocList()
    {
        $sql = " SELECT  c.id, c.pid, c.name, c.url,c.icon ";
        $sql .= " FROM " . $this->tablePrefix . "node AS c ";
        $sql .= " WHERE c.is_del = 0 AND url like 'doc/index?type=%'";
        return $this->db->query($sql);
    }

    public function get_top_menu()
    {
        $userId = get_user_id();
        $sql = " SELECT distinct c.id, c.pid, c.name, c.url,c.icon";
        $sql .= " FROM " . $this->tablePrefix . "role_user AS a, " . $this->tablePrefix . "role_node b, " . $this->tablePrefix . "node AS c ";
        $sql .= " WHERE a.role_id = b.role_id and c.id = b.node_id ";
        $sql .= " AND a.user_id ={$userId}";
        $sql .= " AND c.is_del =0 ";
        $sql .= " AND c.pid = 0 ";
        $sql .= " ORDER BY c.sort asc";
        $rs = $this->db->query($sql);
        return $rs;
    }
}