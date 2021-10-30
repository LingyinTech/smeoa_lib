<?php
class OperatorWidget extends Widget {
	public function render($data) {	
		$content = '<a class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-caret-down"></span>标记为  </a>';
        $content .= '<ul class="dropdown-menu" style="">';

        if (isset($data['urgent']) && $data['urgent'] == true) {
            $content.='<li onclick="urgent('.$data['id'].')"><a>订单加急</a></li>';
        }
        if (isset($data['urgent']) && $data['24ship'] == true) {
            $content.='<li onclick="ship24('.$data['id'].')"><a>当日发货</a></li>';
        }
        if (isset($data['refund']) && $data['refund'] == true) {
            $content.='<li onclick="refund('.$data['id'].')"><a>订单退单</a></li>';
        }
        if (isset($data['after_sale']) && $data['after_sale'] == true) {
            $content.='<li onclick="afterSale('.$data['id'].')"><a>订单售后</a></li>';
        }

        if (isset($data['produce']) && $data['produce'] == true) {
            $content.='<li onclick="produce('.$data['id'].')"><a>已安排</a></li>';
        }

        if (isset($data['redo']) && $data['redo'] == true) {
            $content.='<li onclick="redo('.$data['id'].')"><a>退回重做</a></li>';
        }
        if (isset($data['other']) && $data['other'] == true) {
            $content.='<li onclick="redo('.$data['id'].')"><a>其他</a></li>';
        }
        
        $content.='</ul>';
        
		return $content;
	}
}
