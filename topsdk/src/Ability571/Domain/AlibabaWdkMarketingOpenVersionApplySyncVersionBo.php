<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingOpenVersionApplySyncVersionBo {

    /**
        外部唯一ID
     **/
    public $out_unique_id;

    /**
        数据周期结束时间
     **/
    public $range_end_time;

    /**
        数据周期开始时间
     **/
    public $range_start_time;

    /**
        同步数据总数
     **/
    public $total_count;

    /**
        同步的数据表名称
     **/
    public $table_name;

    /**
        操作ID
     **/
    public $operate_id;

    /**
        WDK_MARKET--营销数据
     **/
    public $biz_code;


    public function getOutUniqueId() : string{
        return $this->out_unique_id;
    }

    public function setOutUniqueId(string $outUniqueId){
        $this->out_unique_id = $outUniqueId;
    }

    public function getRangeEndTime() : int{
        return $this->range_end_time;
    }

    public function setRangeEndTime(int $rangeEndTime){
        $this->range_end_time = $rangeEndTime;
    }

    public function getRangeStartTime() : int{
        return $this->range_start_time;
    }

    public function setRangeStartTime(int $rangeStartTime){
        $this->range_start_time = $rangeStartTime;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getTableName() : string{
        return $this->table_name;
    }

    public function setTableName(string $tableName){
        $this->table_name = $tableName;
    }

    public function getOperateId() : string{
        return $this->operate_id;
    }

    public function setOperateId(string $operateId){
        $this->operate_id = $operateId;
    }

    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }


}

