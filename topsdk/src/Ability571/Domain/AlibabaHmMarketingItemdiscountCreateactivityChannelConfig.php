<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaHmMarketingItemdiscountCreateactivityChannelConfig {

    /**
        淘鲜达:"31",饿了么:"3",京东到家:"26",美团外卖:"2"
     **/
    public $channel;


    public function getChannel() : string{
        return $this->channel;
    }

    public function setChannel(string $channel){
        $this->channel = $channel;
    }


}

