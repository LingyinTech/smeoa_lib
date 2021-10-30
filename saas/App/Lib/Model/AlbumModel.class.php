<?php

/*---------------------------------------------------------------------------
  小微OA系统 - 让工作更轻松快乐 

  Copyright (c) 2013 http://www.smeoa.com All rights reserved.                                             

  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )  

  Author:  jinzhu.yin<smeoa@qq.com>                         

  Support: https://git.oschina.net/smeoa/smeoa               
 -------------------------------------------------------------------------*/

class AlbumModel extends CommonModel
{
    // 自动验证设置
    protected $_validate = [
        ['name', 'require', '相册名不能为空', 1]
    ];

    public function getPictureTop()
    {
        $sql = "SELECT album_id,sid FROM " . $this->tablePrefix . "picture group by album_id";
        $albumArr = $this->query($sql);
        $list = [];
        if (!empty($albumArr)) {
            $sidArr = array_column($albumArr,'sid');
            $sidStr = implode("','",$sidArr);
            $sql = "SELECT sid,`name`,save_name,thumb_name FROM ".$this->tablePrefix."file WHERE sid in ('{$sidStr}')";
            $fileArr = $this->query($sql);
            $fileList = [];
            foreach ($fileArr as $file) {
                $fileList[$file['sid']] = $file;
            }
            unset($fileArr);

            foreach ($albumArr as $album) {
                !empty($fileList[$album['sid']]) && $album = array_merge($album,$fileList[$album['sid']]);
                $list[$album['album_id']] = $album;
            }
        }

        return $list;
    }
}	
