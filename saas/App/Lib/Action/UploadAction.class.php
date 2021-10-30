<?php
/**
 * UploadAction
 * 
 * 订单操作类
 * 
 * @access public
 * @author ncuzp
 * @version 20141123 V1.2
 * @since 20141123 ncuzp 创建版本
 * 
 */

class UploadAction extends Action {
    protected $config=array('app_type'=>'public');
    
	public function upload(){
		import('@.ORG.Util.UploadFile');
		$upload = UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','dng','psd','ai');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		//设置需要生成缩略图，仅对图像文件有效
        $upload->thumb = true;
        //设置需要生成缩略图的文件后缀
        //设置缩略图最大宽度
        $upload->thumbMaxWidth = '400';
        //设置缩略图最大高度
        $upload->thumbMaxHeight = '400';
        //设置上传文件规则
        $upload->saveRule = 'uniqid';

		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		 }else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		 }

		$this->assign('src',$info[0]['savepath'].'thumb_'.$info[0]['savename']);
		$this -> display();
	}
}