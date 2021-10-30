<?php

/**
 * PrintAction
 *
 * 印花操作类
 *
 * @access public
 * @author actors315@gmail.com
 * @version 20150420 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 *
 */
class PrintAction extends CommonAction
{

    //过滤查询字段
    protected $config = array('app_type' => 'public');

    function _search_filter(&$map)
    {
        if (!empty($_POST['keyword'])) {
            $map['val|name|code'] = array('like', "%" . $_POST['keyword'] . "%");
        }
    }

    public function select()
    {
        $id = $_REQUEST['id'];
        $orderInfo = M('OrderInfo')->where(['id'=>$id])->find();
        if(empty($orderInfo)) {
            $this->error('非法操作');
        }
        $this->assign('orderId', $id);
        $this->assign('craftType',intval($orderInfo['craft_type']));

        $this->assign('craftTypeList',self::CRAFT_TYPE_LIST);

        $this->display();
    }

}