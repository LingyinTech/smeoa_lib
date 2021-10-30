<?php
/**
 * SalesAction
 * 
 * 订单操作类
 * 
 * @access public
 * @author actors315@gmail.com
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 * 
 */

class SalesAction extends CommonAction {
	protected $config = array('app_type' => 'public');
       
    public function index(){
        
        
        $this->display();
    }
    
    /**
     * 订单详情
     * 
     * 根据订单编辑查看订单详情，页面包含所有订单和订单的状态
     */
    public function order_info(){
        
        $this->display();
    }
    
    /**
     * 销售部主管能够查看自己手下业务员的订单情况
     */
    public function sales(){
        
        $this->display();
    }
    
    /**
     * 客服初稿审核
     */
    public function check(){
        
        $this->display();
    }
    
    /**
     * 客服终稿确认
     */
    public function confirm(){
     
        $this->display();   
    }
    
    /**
     * 设计部主管派单
     */
    public function distribute(){
        
        $this->display();
    }
    
    /**
     * 设计师提交订单
     */
    public function add_design(){
        
        $this->display();
    }
    
    /**
     * 设计师查看自己的任务
     */
    public function my_task(){
        
        
        $this->display();
    }
    
    /**
     * 设计师和设计部主管审核设计成果
     */
    public function check_design(){
        
        
        $this->display();
    }
    
    /**
     * 财务部收半款
     */
    public function deposit(){
        
        $this->display();
    }
    
    /**
     * 生产部待排生产计划
     */
    public function product_plan(){
        
        $this->display();
    }
     
}
