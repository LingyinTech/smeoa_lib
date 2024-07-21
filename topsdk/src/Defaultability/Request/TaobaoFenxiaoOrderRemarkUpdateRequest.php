<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFenxiaoOrderRemarkUpdateRequest {

    /**
        采购单编号
     **/
    private $purchaseOrderId;

    /**
        备注内容(供应商操作)
     **/
    private $supplierMemo;

    /**
        旗子的标记，1-5之间的数字。非1-5之间，都采用1作为默认。
1:红色
2:黄色
3:绿色
4:蓝色
5:粉红色
     **/
    private $supplierMemoFlag;


    public function getPurchaseOrderId() : int{
        return $this->purchaseOrderId;
    }

    public function setPurchaseOrderId(int $purchaseOrderId){
        $this->purchaseOrderId = $purchaseOrderId;
    }

    public function getSupplierMemo() : string{
        return $this->supplierMemo;
    }

    public function setSupplierMemo(string $supplierMemo){
        $this->supplierMemo = $supplierMemo;
    }

    public function getSupplierMemoFlag() : int{
        return $this->supplierMemoFlag;
    }

    public function setSupplierMemoFlag(int $supplierMemoFlag){
        $this->supplierMemoFlag = $supplierMemoFlag;
    }


    public function getApiName() : string {
        return "taobao.fenxiao.order.remark.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->purchaseOrderId)) {
            $requestParam["purchase_order_id"] = TopUtil::convertBasic($this->purchaseOrderId);
        }

        if (!TopUtil::checkEmpty($this->supplierMemo)) {
            $requestParam["supplier_memo"] = TopUtil::convertBasic($this->supplierMemo);
        }

        if (!TopUtil::checkEmpty($this->supplierMemoFlag)) {
            $requestParam["supplier_memo_flag"] = TopUtil::convertBasic($this->supplierMemoFlag);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

