<?php
/**
 * DepositAction
 * 
 * 财务部操作类
 * 
 * @access public
 * @author actors315@gmail.com
 * @version 20141116 V1.2
 * @since 20141114 xie.hj@thinkalways.net 创建版本
 * 
 */

class DepositAction extends CommonAction {
    protected $config = array('app_type' => 'public');
    
    function _search_filter(&$map) {
        if (!empty($_POST['keyword'])) {
            $map['cust_name|tel|produce_no|unit|sales'] = array('like', "%" . $_POST['keyword'] . "%");
        }
    }
    
    public function half(){        
       $this->_order(4);
       $this->display();
    }
    
    public function half_agree(){
        if(IS_POST){
            $orderid = $_REQUEST['orderid'];
            if(empty($orderid)){
                $this -> ajaxReturn(NULL, "非法操作", 0);
            }            
            $model = D('OrderFlow');
            //$half = M('OrderDeposit')->find($orderid);
            $model->startTrans();
            $result = $model->where(array('orderid'=>$orderid,'typeid'=>4))->save(array(
                'status'=>100,
                'endtime'=>time(),
                'username'=>session('user_name'),
            ));
            $result1 = D('OrderMain')->where(array('id'=>$orderid))->save(array(
                'order_status'=>'已收款',
                'ifproduce' => 1 ,
                '4_flow_time'   =>  time(),
                'order_note' => array('_string',"concat(ifnull(`order_note`,''),'<br />{$this->now_Y_m_d_H_i_s},{$this->user_name}标记已收款。')")
            ));
            
			/*
            if(empty($half)){
                $result2 = M('OrderDeposit')->add(array(
                    'orderid'=> $orderid,
                    'half_pay_type' =>  $_POST['half_pay_type'],
                    'half_pay_money' => $_POST['half_pay_money'],
                    'half_pay_time'  => $_POST['half_pay_time'],
                    'pay_money'     =>  $_POST['half_pay_money'],
                    'note'  =>  $_POST['note']
                ));
            }else{
                $result2 = M('OrderDeposit')->save(array(  
                    'half_pay_type' =>  $_POST['half_pay_type'],                  
                    'half_pay_money' => $_POST['half_pay_money'],
                    'half_pay_time'  => strtotime($_POST['half_pay_time']),
                    'pay_money'     => $_POST['half_pay_money'] + $half['full_pay_money'],
                    'note'  =>  array('_string',"concat(ifnull(`note`,''),'<br />{".$_POST['note']."}。')")
                ))->where(array(
                    'orderid'=> $orderid,
                ));
            }
            */
            $userlist = M('User') -> where(array('dept_id'=>17)) -> field('id,name') -> select();
            $sender['id'] = 1;
            $sender['name'] = '系统消息';
            D('Message')->batchMessage($sender,$userlist,'有新订单来了，请安排生产.');
            
            
            if(FALSE !== $result && FALSE !== $result1){                
                $model->commit();
                $this -> ajaxReturn(NULL, "标记成功", 1);
            }else{
                $model->rollback();
                $this -> ajaxReturn(NULL, "操作失败：".$model->getDbError(), 0);
            }
        }else{
            $orderid = $_REQUEST['orderid'];
            $this->assign('orderid',$orderid);
            $half = M('OrderDeposit')->find($orderid);
            if(empty($half)){
                $half['half_pay_time'] = strtotime(date('Y-m-d'));
            }
            $this->assign('half',$half);
            $half_pay_type = get_system_config('DEPOSIT_PAY_TYPE');
            $this->assign('half_pay_type',$half_pay_type);
            $widget['date'] = true;
            $this -> assign("widget", $widget);
            $this->display();
        }
    }
    
    public function full(){        
            $this->_order(6);
            $this->display();
    }
    
    public function full_agree(){
        if(IS_POST){
            $orderid = $_REQUEST['orderid'];
            if(empty($orderid)){
                $this -> ajaxReturn(NULL, "非法操作", 0);
            }
            
            $model = D('OrderFlow');
            //$full = M('OrderDeposit')->find($orderid);
            $model->startTrans();
            $result = $model->where(array('orderid'=>$orderid,'typeid'=>6))->save(array(
                'status'=>100,
                'endtime'=>time(),
                '6_flow_time'   =>  time(),
                'username'=>session('user_name'),
            ));
            $result1 = D('OrderMain')->where(array('id'=>$orderid))->save(array(
                'order_status'=>'订单回款完成',
                'order_note' => array('_string',"concat(ifnull(`order_note`,''),'<br />{$this->now_Y_m_d_H_i_s},{$this->user_name}标记全款通过。')")
            ));
            
            $result2 = D('Order')->where(array('id'=>$orderid))->save(array(
                'ifcomplete'=>1,
            ));
            
			/*
            if(empty($full)){
                $result3 = M('OrderDeposit')->add(array(
                    'orderid'=> $orderid,
                    'full_pay_type' =>  $_POST['full_pay_type'],
                    'full_pay_money' => $_POST['full_pay_money'],
                    'full_pay_time'  => $_POST['full_pay_time'],
                    'pay_money'     =>  $_POST['full_pay_money'],
                    'manager_money' =>  $_POST['manager_money'],
                    'director_money' => $_POST['director_money'],
                    'area_money'    =>  $_POST['area_money'],
                    'note'  =>  $_POST['note']
                ));
            }else{
                $result3 = M('OrderDeposit')->save(array(     
                    'full_pay_type' =>  $_POST['full_pay_type'],               
                    'full_pay_money' => $_POST['full_pay_money'],
                    'full_pay_time'  => strtotime($_POST['full_pay_time']),
                    'pay_money'     => $_POST['full_pay_money'] + $full['half_pay_money'],
                    'manager_money' =>  $_POST['manager_money'],
                    'director_money' => $_POST['director_money'],
                    'area_money'    =>  $_POST['area_money'],
                    'note'  =>  array('_string',"concat(ifnull(`note`,''),'<br />{".$_POST['note']."}。')")
                ))->where(array(
                    'orderid'=> $orderid,
                ));
            }*/
            
            if(FALSE !== $result && FALSE !== $result1 && FALSE !==$result2){                
                $model->commit();
                $this -> ajaxReturn(NULL, "标记成功", 1);
            }else{
                $model->rollback();
                $this -> ajaxReturn(NULL, "操作失败：".$model->getDbError(), 0);
                
            }
        }else{
            $orderid = $_REQUEST['orderid'];
            $this->assign('orderid',$orderid);
            $full = M('OrderDeposit')->find($orderid);
            if(empty($full) || empty($half['full_pay_time'])){
                $full['full_pay_time'] = strtotime(date('Y-m-d'));
            }
            $this->assign('full',$full);
            $full_pay_type = get_system_config('DEPOSIT_PAY_TYPE');
            $this->assign('full_pay_type',$full_pay_type);
            $widget['date'] = true;
            $this -> assign("widget", $widget);
            $this->display();
        }
    }
    
    private function _order($typeid){
        $map = $this -> _search('OrderMain');
        if (method_exists($this, '_search_filter')) {
            $this -> _search_filter($map);
        }
        if(isset($_REQUEST['eq_status'])){
            $status = $_REQUEST['eq_status'];
        }else{
            $status = 1;
        }
        
        $ids = D('OrderFlow')->field('orderid')->where('status='.$status.' and typeid='.$typeid)->select();        
        foreach ($ids as $key => $item) {
             $id[] = $item['orderid'];
        }
        
        $map['id'] = array('in',$id);
        $model=D('OrderMain');
        $this->assign('status',$status);
        if (!empty($model)) {
            $this -> _list($model, $map,$typeid.'_flow_time',TRUE);
        }
    }
    
    public function export_all(){
        if(IS_POST){
            $map = $this -> _search('OrderMain');
            if (method_exists($this, '_search_filter')) {
                $this -> _search_filter($map);
            }
            if(!empty($map)){
                foreach($map as $k=>$v) {
                    $map['a.'.$k] = $map[$k];
                    unset($map[$k]);
                }
            }            
            
            if(isset($_POST['gt_start_time'])&&!empty($_POST['gt_start_time'])){
                $map['c.starttime'][] = array('egt',strtotime($_POST['gt_start_time'].' '.$_POST['gt_start_hour'].':00:00'));
            }

            if(isset($_POST['lt_start_time'])&&!empty($_POST['lt_start_time'])){
                $map['c.starttime'][] = array('elt',strtotime($_POST['lt_start_time'].' '.$_POST['lt_start_hour'].':59:59'));
            }
            
            $depost_list = '';
            $depost_list = M('OrderMain') ->table(C('DB_PREFIX').'order_main a,'.C('DB_PREFIX').'order b,'.C('DB_PREFIX').'order_flow c')
            -> field('b.*,a.sales,a.produce_no,a.order_status,c.starttime') -> where($map)->where('a.id=b.id and a.id = c.orderid and c.typeid = 4 and c.status > 0') -> select();
            
            Vendor('Excel.PHPExcel');
            
            $inputFileName = "Public/templete/deposit.xlsx";
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
            $objPHPExcel -> getProperties() -> setCreator("dfsg") -> setLastModifiedBy("dfsg") 
                -> setTitle("Office 2007 XLSX Test Document") 
                -> setSubject("Office 2007 XLSX Test Document") 
                -> setDescription("Test document for Office 2003 XLS, generated using PHP classes.") 
                -> setKeywords("office 2007 openxml php") -> setCategory("Test result file");
                
            $i = 3;
            $orderShip = M('OrderShip');
            foreach ($depost_list as $val) {                
                $ship = $orderShip->where(array(
                    'orderid'   =>  $val['id'],
                ))->find();
                if(isset($ship['ship_time'])){
                    $ship_time = date('Y-m-d H:i:s',$ship['ship_time']);
                }else{
                    $ship_time = '';
                }
                
                $i++;
                $objPHPExcel -> setActiveSheetIndex(0) 
                -> setCellValue("A$i", date('m',$val["starttime"]))
                -> setCellValue("B$i", date('d',$val["starttime"]))
                -> setCellValue("C$i", "'".$val["produce_no"]) 
                -> setCellValue("D$i", $val["cust_name"]) 
                -> setCellValue("E$i", $val["unit"]) 
                -> setCellValue("F$i", $val["style"]) 
                -> setCellValue("G$i", $val['mxs']+$val['ms']+$val['mm']+$val['ml']+$val['mxl']+$val['mxxl']+$val['mxxxl']+$val['mxxxxl']+$val['fs']+$val['fm']+$val['fl']+$val['fxl']+$val['fxxl']) 
                -> setCellValue("H$i", $val["print_desc"]) 
                -> setCellValue("I$i", $val["sales"]) 
                -> setCellValue("J$i", $val["area"])
                -> setCellValue("K$i", $ship_time)
                -> setCellValue("L$i", $val["order_status"])
                -> setCellValue("M$i", $val["note"]);
                unset($ship_time);
            }
            //unset($depost_list);
            $objPHPExcel -> getActiveSheet() -> setTitle('所有订单');
            $file_name=date('Y-m-d').".xlsx";
            // Redirect output to a client’s web browser (Excel2007)
            header("Content-Type: application/force-download");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header("Content-Disposition:attachment;filename =" . str_ireplace('+', '%20', URLEncode($file_name)));
            header('Cache-Control: max-age=0');
    
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            //readfile($filename);
            $objWriter -> save('php://output');
            unset($objWriter);
            unset($objPHPExcel);
            exit(0);
        }else{
            $widget['date'] = true;        
            $this -> assign("widget", $widget);
            $this->display();
        }
    }
}
