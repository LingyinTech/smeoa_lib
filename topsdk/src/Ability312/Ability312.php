<?php
namespace Topsdk\Topapi\Ability312;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability312\Request\AlibabaAliqinTaNumberSinglecallbyvoiceRequest;
use Topsdk\Topapi\Ability312\Request\AlibabaAliqinTaNumberSinglecallbyttsRequest;
use Topsdk\Topapi\Ability312\Request\AlibabaAliqinTaVoiceNumDoublecallRequest;
use Topsdk\Topapi\Ability312\Request\AlibabaAliqinTaSmsNumQueryRequest;
use Topsdk\Topapi\Ability312\Request\TaobaoJstSmsMessageDirectBatchsendRequest;
use Topsdk\Topapi\Ability312\Request\AlibabaAliqinTaSmsNumSendRequest;
use Topsdk\Topapi\Ability312\Request\TaobaoJstSmsTemplateReportRequest;
use Topsdk\Topapi\Ability312\Request\TaobaoJstSmsSignnameReportRequest;

class Ability312 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        根据号码tts单呼
    **/
    public function alibabaAliqinTaNumberSinglecallbyvoice(AlibabaAliqinTaNumberSinglecallbyvoiceRequest $request) {
        return $this->client->execute("alibaba.aliqin.ta.number.singlecallbyvoice", $request->toMap(), $request->toFileParamMap());
    }
    /**
        根据号码tts单呼
    **/
    public function alibabaAliqinTaNumberSinglecallbytts(AlibabaAliqinTaNumberSinglecallbyttsRequest $request) {
        return $this->client->execute("alibaba.aliqin.ta.number.singlecallbytts", $request->toMap(), $request->toFileParamMap());
    }
    /**
        聚石塔语音双呼接口
    **/
    public function alibabaAliqinTaVoiceNumDoublecall(AlibabaAliqinTaVoiceNumDoublecallRequest $request) {
        return $this->client->execute("alibaba.aliqin.ta.voice.num.doublecall", $request->toMap(), $request->toFileParamMap());
    }
    /**
        短信查询
    **/
    public function alibabaAliqinTaSmsNumQuery(AlibabaAliqinTaSmsNumQueryRequest $request) {
        return $this->client->execute("alibaba.aliqin.ta.sms.num.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        OAID批量发送，支持明文手机号发送
    **/
    public function taobaoJstSmsMessageDirectBatchsend(TaobaoJstSmsMessageDirectBatchsendRequest $request) {
        return $this->client->execute("taobao.jst.sms.message.direct.batchsend", $request->toMap(), $request->toFileParamMap());
    }
    /**
        短信发送
    **/
    public function alibabaAliqinTaSmsNumSend(AlibabaAliqinTaSmsNumSendRequest $request) {
        return $this->client->execute("alibaba.aliqin.ta.sms.num.send", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务商存量短信模板上传
    **/
    public function taobaoJstSmsTemplateReport(TaobaoJstSmsTemplateReportRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.template.report", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务商存量短信签名上传
    **/
    public function taobaoJstSmsSignnameReport(TaobaoJstSmsSignnameReportRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.report", $request->toMap(), $request->toFileParamMap(), $session);
    }
}