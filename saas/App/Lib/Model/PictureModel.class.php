<?php

/*---------------------------------------------------------------------------
  小微OA系统 - 让工作更轻松快乐 

  Copyright (c) 2013 http://www.smeoa.com All rights reserved.                                             

  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )  

  Author:  jinzhu.yin<smeoa@qq.com>                         

  Support: https://git.oschina.net/smeoa/smeoa               
 -------------------------------------------------------------------------*/

class PictureModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = [
        ['sid', 'require', '图片不能为空', 1]
    ];

    public function addPicture($albumId,$pictureArr)
    {
        $sql = "INSERT INTO ".$this->tablePrefix."picture(album_id,sid) VALUES";
        foreach ($pictureArr as $sid) {
            $sql.="('{$albumId}','{$sid}'),";
        }
        return $this->execute(rtrim($sql,','));
    }
}	
