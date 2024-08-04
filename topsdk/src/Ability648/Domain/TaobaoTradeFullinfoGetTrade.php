<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoTradeFullinfoGetTrade {

    /**
        买家OpenUid
     **/
    public $buyer_open_uid;

    /**
        交易标题，以店铺名作为此标题的值。注:taobao.trades.get接口返回的Trade中的title是商品名称
     **/
    public $title;

    /**
        交易类型列表，同时查询多种交易类型可用逗号分隔。默认同时查询guarantee_trade, auto_delivery, ec, cod的4种交易类型的数据 可选值 fixed(一口价) auction(拍卖) guarantee_trade(一口价、拍卖) auto_delivery(自动发货) independent_simple_trade(旺店入门版交易) independent_shop_trade(旺店标准版交易) ec(直冲) cod(货到付款) fenxiao(分销) game_equipment(游戏装备) shopex_trade(ShopEX交易) netcn_trade(万网交易) external_trade(统一外部交易)o2o_offlinetrade（O2O交易）step (万人团)nopaid(无付款订单)pre_auth_type(预授权0元购机交易)
     **/
    public $type;

    /**
        交易创建时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        交易编号 (父订单的交易编号)
     **/
    public $sid;

    /**
        交易编号 (父订单的交易编号)
     **/
    public $tid;

    /**
        Acookie订单唯一ID。
     **/
    public $acookie_id;

    /**
        卖家是否已评价。可选值:true(已评价),false(未评价)
     **/
    public $seller_rate;

    /**
        买家是否已评价。可选值:true(已评价),false(未评价)。如买家只评价未打分，此字段仍返回false
     **/
    public $buyer_rate;

    /**
        交易状态。可选值:    * TRADE_NO_CREATE_PAY(没有创建支付宝交易)    * WAIT_BUYER_PAY(等待买家付款)    * SELLER_CONSIGNED_PART(卖家部分发货)    * WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)    * WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)    * TRADE_BUYER_SIGNED(买家已签收,货到付款专用)    * TRADE_FINISHED(交易成功)    * TRADE_CLOSED(付款以后用户退款成功，交易自动关闭)    * TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易)    * PAY_PENDING(国际信用卡支付付款确认中)    * WAIT_PRE_AUTH_CONFIRM(0元购合约中)	* PAID_FORBID_CONSIGN(拼团中订单或者发货强管控的订单，已付款但禁止发货)
     **/
    public $status;

    /**
        实付金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $payment;

    /**
        建议使用trade.promotion_details查询系统优惠系统优惠金额（如打折，VIP，满就送等），精确到2位小数，单位：元。如：200.07，表示：200元7分
     **/
    public $discount_fee;

    /**
        卖家手工调整金额，精确到2位小数，单位：元。如：200.07，表示：200元7分。来源于订单价格修改，如果有多笔子订单的时候，这个为0，单笔的话则跟[order].adjust_fee一样
     **/
    public $adjust_fee;

    /**
        邮费。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $post_fee;

    /**
        商品金额（商品价格乘以数量的总金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $total_fee;

    /**
        付款时间。格式:yyyy-MM-dd HH:mm:ss。订单的付款时间即为物流订单的创建时间。
     **/
    public $pay_time;

    /**
        交易结束时间。交易成功时间(更新交易状态为成功的同时更新)/确认收货时间或者交易关闭时间 。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_time;

    /**
        交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        卖家发货时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $consign_time;

    /**
        卖家实际收到的支付宝打款金额（由于子订单可以部分确认收货，这个金额会随着子订单的确认收货而不断增加，交易成功后等于买家实付款减去退款金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $received_payment;

    /**
        交易佣金。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $commission_fee;

    /**
        买家备注（与淘宝网上订单的买家备注对应，只有买家才能查看该字段）
     **/
    public $buyer_memo;

    /**
        卖家备注（与淘宝网上订单的卖家备注对应，只有卖家才能查看该字段）
     **/
    public $seller_memo;

    /**
        买家下单的地区
     **/
    public $buyer_area;

    /**
        支付宝交易号，如：2009112081173831
     **/
    public $alipay_no;

    /**
        买家留言
     **/
    public $buyer_message;

    /**
        商品图片绝对途径
     **/
    public $pic_path;

    /**
        商品数字编号
     **/
    public $num_iid;

    /**
        商品价格。精确到2位小数；单位：元。如：200.07，表示：200元7分
     **/
    public $price;

    /**
        货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分。
     **/
    public $cod_fee;

    /**
        货到付款物流状态。初始状态 NEW_CREATED,接单成功 ACCEPTED_BY_COMPANY,接单失败 REJECTED_BY_COMPANY,接单超时 RECIEVE_TIMEOUT,揽收成功 TAKEN_IN_SUCCESS,揽收失败 TAKEN_IN_FAILED,揽收超时 TAKEN_TIMEOUT,签收成功 SIGN_IN,签收失败 REJECTED_BY_OTHER_SIDE,订单等待发送给物流公司 WAITING_TO_BE_SENT,用户取消物流订单 CANCELED
     **/
    public $cod_status;

    /**
        买家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分
     **/
    public $buyer_cod_fee;

    /**
        卖家货到付款服务费。精确到2位小数;单位:元。如:12.07，表示:12元7分。卖家不承担服务费的订单：未发货的订单获取服务费为0，发货后就能获取到正确值。
     **/
    public $seller_cod_fee;

    /**
        快递代收款。精确到2位小数;单位:元。如:212.07，表示:212元7分
     **/
    public $express_agency_fee;

    /**
        创建交易时的物流方式（交易完成前，物流方式有可能改变，但系统里的这个字段一直不变）。可选值：free(卖家包邮),post(平邮),express(快递),ems(EMS),virtual(虚拟发货)，25(次日必达)，26(预约配送),seller(商家自配送),instant(即时配送)。
     **/
    public $shipping_type;

    /**
        商品购买数量。取值范围：大于零的整数,对于一个trade对应多个order的时候（一笔主订单，对应多笔子订单），num=0，num是一个跟商品关联的属性，一笔订单对应多比子订单的时候，主订单上的num无意义。
     **/
    public $num;

    /**
        买家使用积分,下单时生成，且一直不变。格式:100;单位:个.
     **/
    public $point_fee;

    /**
        买家实际使用积分（扣除部分退款使用的积分），交易完成后生成（交易成功或关闭），交易未完成时该字段值为0。格式:100;单位:个
     **/
    public $real_point_fee;

    /**
        买家获得积分,返点的积分。格式:100;单位:个。返点的积分要交易成功之后才能获得。
     **/
    public $buyer_obtain_point_fee;

    /**
        买家支付宝账号
     **/
    public $buyer_alipay_no;

    /**
        收货人的姓名（加密）
     **/
    public $receiver_name;

    /**
        收货人国籍
     **/
    public $receiver_country;

    /**
        收货人的所在省份
     **/
    public $receiver_state;

    /**
        收货人的所在城市<br/>注：因为国家对于城市和地区的划分的有：省直辖市和省直辖县级行政区（区级别的）划分的，淘宝这边根据这个差异保存在不同字段里面比如：广东广州：广州属于一个直辖市是放在的receiver_city的字段里面；而河南济源：济源属于省直辖县级行政区划分，是区级别的，放在了receiver_district里面<br/>建议：程序依赖于城市字段做物流等判断的操作，最好加一个判断逻辑：如果返回值里面只有receiver_district参数，该参数作为城市
     **/
    public $receiver_city;

    /**
        收货人的所在地区<br/>注：因为国家对于城市和地区的划分的有：省直辖市和省直辖县级行政区（区级别的）划分的，淘宝这边根据这个差异保存在不同字段里面比如：广东广州：广州属于一个直辖市是放在的receiver_city的字段里面；而河南济源：济源属于省直辖县级行政区划分，是区级别的，放在了receiver_district里面<br/>建议：程序依赖于城市字段做物流等判断的操作，最好加一个判断逻辑：如果返回值里面只有receiver_district参数，该参数作为城市
     **/
    public $receiver_district;

    /**
        收货人街道地址
     **/
    public $receiver_town;

    /**
        收货人的详细地址（加密）
     **/
    public $receiver_address;

    /**
        收货人的邮编
     **/
    public $receiver_zip;

    /**
        收货人的手机号码（加密）
     **/
    public $receiver_mobile;

    /**
        收货人的电话号码（加密）
     **/
    public $receiver_phone;

    /**
        买家邮件地址
     **/
    public $buyer_email;

    /**
        卖家支付宝账号
     **/
    public $seller_alipay_no;

    /**
        卖家手机
     **/
    public $seller_mobile;

    /**
        卖家电话
     **/
    public $seller_phone;

    /**
        卖家姓名
     **/
    public $seller_name;

    /**
        卖家邮件地址
     **/
    public $seller_email;

    /**
        交易中剩余的确认收货金额（这个金额会随着子订单确认收货而不断减少，交易成功后会变为零）。精确到2位小数;单位:元。如:200.07，表示:200 元7分
     **/
    public $available_confirm_fee;

    /**
        是否包含邮费。与available_confirm_fee同时使用。可选值:true(包含),false(不包含)
     **/
    public $has_post_fee;

    /**
        超时到期时间。格式:yyyy-MM-dd HH:mm:ss。业务规则：前提条件：只有在买家已付款，卖家已发货的情况下才有效如果申请了退款，那么超时会落在子订单上；比如说3笔ABC，A申请了，那么返回的是BC的列表, 主定单不存在如果没有申请过退款，那么超时会挂在主定单上；比如ABC，返回主定单，ABC的超时和主定单相同
     **/
    public $timeout_action_time;

    /**
        交易快照地址
     **/
    public $snapshot_url;

    /**
        交易备注。
     **/
    public $trade_memo;

    /**
        交易促销详细信息
     **/
    public $promotion;

    /**
        是否3D交易
     **/
    public $is_3D;

    /**
        是否保障速递，如果为true，则为保障速递订单，使用线下联系发货接口发货，如果未false，则该订单非保障速递，根据卖家设置的订单流转规则可使用物流宝或者常规物流发货。
     **/
    public $is_lgtype;

    /**
        表示是否是品牌特卖（常规特卖，不包括特卖惠和特实惠）订单，如果是返回true，如果不是返回false。当此字段与is_force_wlb均为true时，订单强制物流宝发货。
     **/
    public $is_brand_sale;

    /**
        订单是否强制使用物流宝发货。当此字段与is_brand_sale均为true时，订单强制物流宝发货。此字段为false时，该订单根据流转规则设置可以使用物流宝或者常规方式发货
     **/
    public $is_force_wlb;

    /**
        买家备注旗帜（与淘宝网上订单的买家备注旗帜对应，只有买家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
     **/
    public $buyer_flag;

    /**
        卖家备注旗帜（与淘宝网上订单的卖家备注旗帜对应，只有卖家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
     **/
    public $seller_flag;

    /**
        使用信用卡支付金额数
     **/
    public $credit_card_fee;

    /**
        分阶段付款的订单状态（例如万人团订单等），目前有四个返回状态FRONT_NOPAID_FINAL_NOPAID(定金未付尾款未付)，FRONT_PAID_FINAL_NOPAID(定金已付尾款未付)，FRONT_PAID_FINAL_PAID(定金和尾款都付)，FRONT_PAID_FRONT_FORFEITED（预售定金罚没）
     **/
    public $step_trade_status;

    /**
        分阶段付款的已付金额（万人团订单已付金额）
     **/
    public $step_paid_fee;

    /**
        电子凭证的垂直信息
     **/
    public $eticket_ext;

    /**
        订单出现异常问题的时候，给予用户的描述,没有异常的时候，此值为空
     **/
    public $mark_desc;

    /**
        订单中是否包含运费险订单，如果包含运费险订单返回true，不包含运费险订单，返回false
     **/
    public $has_yfx;

    /**
        订单的运费险，单位为元
     **/
    public $yfx_fee;

    /**
        运费险支付号
     **/
    public $yfx_id;

    /**
        运费险类型
     **/
    public $yfx_type;

    /**
        订单将在此时间前发出，主要用于预售订单
     **/
    public $send_time;

    /**
        买家可以通过此字段查询是否当前交易可以评论，can_rate=true可以评价，false则不能评价。
     **/
    public $can_rate;

    /**
        卖家是否可以对订单进行评价
     **/
    public $seller_can_rate;

    /**
        是否是多次发货的订单如果卖家对订单进行多次发货，则为true否则为false
     **/
    public $is_part_consign;

    /**
        表示订单交易是否含有对应的代销采购单。如果该订单中存在一个对应的代销采购单，那么该值为true；反之，该值为false。
     **/
    public $is_daixiao;

    /**
        表示订单交易是否网厅订单。 如果该订单是网厅订单，那么该值为true；反之，该值为false。
     **/
    public $is_wt;

    /**
        物流到货时效，单位天
     **/
    public $arrive_interval;

    /**
        物流到货时效截单时间，格式 HH:mm
     **/
    public $arrive_cut_time;

    /**
        物流发货时效，单位小时
     **/
    public $consign_interval;

    /**
        导购宝=crm
     **/
    public $o2o;

    /**
        导购员id
     **/
    public $o2o_guide_id;

    /**
        导购员名称
     **/
    public $o2o_guide_name;

    /**
        导购员门店id
     **/
    public $o2o_shop_id;

    /**
        导购门店名称
     **/
    public $o2o_shop_name;

    /**
        导购宝提货方式，inshop：店内提货，online：线上发货
     **/
    public $o2o_delivery;

    /**
        外部订单号
     **/
    public $o2o_out_trade_id;

    /**
        线下自提门店编码
     **/
    public $shop_code;

    /**
        拼音名
     **/
    public $hk_en_name;

    /**
        航班号
     **/
    public $hk_flight_no;

    /**
        中文名
     **/
    public $hk_china_name;

    /**
        证件号码
     **/
    public $hk_card_code;

    /**
        证件类型001代表港澳通行证类型、002代表入台证003代表护照
     **/
    public $hk_card_type;

    /**
        航班飞行时间
     **/
    public $hk_flight_date;

    /**
        性别M: 男性，F: 女性
     **/
    public $hk_gender;

    /**
        出生日期
     **/
    public $hk_birthday;

    /**
        提货地点
     **/
    public $hk_pickup;

    /**
        提货地点id
     **/
    public $hk_pickup_id;

    /**
        商家的预计发货时间
     **/
    public $est_con_time;

    /**
        订单列表
     **/
    public $orders;

    /**
        优惠详情
     **/
    public $promotion_details;

    /**
        物流标签
     **/
    public $service_tags;

    /**
        服务子订单列表
     **/
    public $service_orders;

    /**
        交易内部来源。WAP(手机);HITAO(嗨淘);TOP(TOP平台);TAOBAO(普通淘宝);JHS(聚划算)一笔订单可能同时有以上多个标记，则以逗号分隔
     **/
    public $trade_from;

    /**
        交易外部来源：ownshop(商家官网)
     **/
    public $trade_source;

    /**
        在返回的trade对象上专门增加一个字段zero_purchase来区分，这个为true的就是0元购机预授权交易
     **/
    public $zero_purchase;

    /**
        付款时使用的支付宝积分的额度,单位分，比如返回1，则为1分钱
     **/
    public $alipay_point;

    /**
        天猫点券卡实付款金额,单位分
     **/
    public $pcc_af;

    /**
        交易扩展表信息
     **/
    public $trade_ext;

    /**
        天猫国际官网直供主订单关税税费
     **/
    public $order_tax_fee;

    /**
        天猫汽车服务预约时间
     **/
    public $et_ser_time;

    /**
        电子凭证预约门店地址
     **/
    public $et_shop_name;

    /**
        电子凭证核销门店地址
     **/
    public $et_verified_shop_name;

    /**
        车牌号码
     **/
    public $et_plate_number;

    /**
        抢单状态<br/>0,未处理待分发;1,抢单中;2,已抢单;3,已发货;-1,超时;-2,处理异常;-3,匹配失败;-4,取消抢单;-5,退款取消;-9,逻辑删除
     **/
    public $o2o_snatch_status;

    /**
        是否屏蔽发货
     **/
    public $is_sh_ship;

    /**
        天猫电子凭证家装
     **/
    public $eticket_service_addr;

    /**
        电子凭证扫码购-扫码支付订单type
     **/
    public $et_type;

    /**
        垂直市场
     **/
    public $market;

    /**
        门店预约自提订单标
     **/
    public $obs;

    /**
        扫码购关联门店
     **/
    public $et_shop_id;

    /**
        满返红包的金额；如果没有满返红包，则值为 0.00
     **/
    public $paid_coupon_fee;

    /**
        线下门店自提
     **/
    public $shop_pick;

    /**
        处方药审核状态
     **/
    public $rx_audit_status;

    /**
        yyyyMMdd
     **/
    public $es_date;

    /**
        hh:mm-hh:mm
     **/
    public $es_range;

    /**
        yyyyMMdd
     **/
    public $os_date;

    /**
        hh:mm-hh:mm
     **/
    public $os_range;

    /**
        100
     **/
    public $coupon_fee;

    /**
        邮关订单
     **/
    public $post_gate_declare;

    /**
        跨境订单
     **/
    public $cross_bonded_declare;

    /**
        主订单扩展属性;payCurrency:HKD(港币)、TWD(台币)
     **/
    public $trade_attr;

    /**
        TOP拦截标识，0不拦截，1拦截
     **/
    public $top_hold;

    /**
        星盘标识字段
     **/
    public $omni_attr;

    /**
        星盘业务字段
     **/
    public $omni_param;

    /**
        assembly
     **/
    public $assembly;

    /**
        聚划算一起买字段
     **/
    public $forbid_consign;

    /**
        采购订单标识
     **/
    public $identity;

    /**
        天猫拼团拦截标示
     **/
    public $team_buy_hold;

    /**
        分享购拦截
     **/
    public $share_group_hold;

    /**
        天猫国际拦截
     **/
    public $ofp_hold;

    /**
        组装O2O多阶段尾款订单的明细数据 总阶段数，当前阶数，阶段金额（单位：分），支付状态，例如 3_1_100_paid ; 3_2_2000_nopaid
     **/
    public $o2o_step_trade_detail;

    /**
        特权定金订单的尾款订单ID
     **/
    public $o2o_step_order_id;

    /**
        分阶段订单的特权定金订单ID
     **/
    public $o2o_et_order_id;

    /**
        分阶段订单的特权定金抵扣金额，单位：分
     **/
    public $o2o_voucher_price;

    /**
        天猫国际计税优惠金额
     **/
    public $order_tax_promotion_fee;

    /**
        聚划算火拼标记
     **/
    public $delay_create_delivery;

    /**
        tidStr
     **/
    public $tid_str;

    /**
        top定义订单类型
     **/
    public $toptype;

    /**
        包含的交易服务类型
     **/
    public $service_type;

    /**
        o2oServiceMobile
     **/
    public $o2o_service_mobile;

    /**
        o2oServiceName
     **/
    public $o2o_service_name;

    /**
        o2oServiceState
     **/
    public $o2o_service_state;

    /**
        o2oServiceCity
     **/
    public $o2o_service_city;

    /**
        o2oServiceDistrict
     **/
    public $o2o_service_district;

    /**
        o2oServiceTown
     **/
    public $o2o_service_town;

    /**
        o2oServiceAddress
     **/
    public $o2o_service_address;

    /**
        o2oStepTradeDetailNew
     **/
    public $o2o_step_trade_detail_new;

    /**
        o2oXiaopiao
     **/
    public $o2o_xiaopiao;

    /**
        o2oContract
     **/
    public $o2o_contract;

    /**
        rechargeFee
     **/
    public $recharge_fee;

    /**
        retailStoreCode
     **/
    public $retail_store_code;

    /**
        retailOutOrderId
     **/
    public $retail_out_order_id;

    /**
        platformSubsidyFee
     **/
    public $platform_subsidy_fee;

    /**
        nrOffline
     **/
    public $nr_offline;

    /**
        网厅订单垂直表信息
     **/
    public $wtt_param;

    /**
        子单物流发货信息
     **/
    public $logistics_infos;

    /**
        sellerNick
     **/
    public $seller_nick;

    /**
        buyerNick
     **/
    public $buyer_nick;

    /**
        nrStoreOrderId
     **/
    public $nr_store_order_id;

    /**
        门店 ID
     **/
    public $nr_shop_id;

    /**
        门店名称
     **/
    public $nr_shop_name;

    /**
        导购员ID
     **/
    public $nr_shop_guide_id;

    /**
        导购员名称
     **/
    public $nr_shop_guide_name;

    /**
        sortInfo
     **/
    public $sort_info;

    /**
        1已排序 2不排序
     **/
    public $sorted;

    /**
        一小时达不处理订单
     **/
    public $nr_no_handle;

    /**
        为tmall.daogoubao.cloudstore时表示云店链路
     **/
    public $biz_code;

    /**
        为1，且bizCode不为tmall.daogoubao.cloudstore时，为旗舰店订单
     **/
    public $cloud_store;

    /**
        暂不公开
     **/
    public $is_gift;

    /**
        暂不公开
     **/
    public $donee_nick;

    /**
        暂不公开
     **/
    public $donee_open_uid;

    /**
        苏宁自提门店code
     **/
    public $suning_shop_code;

    /**
        苏宁自提门店是否有效
     **/
    public $suning_shop_valid;

    /**
        允许的appkey，逗号分隔
     **/
    public $allow_appkeys;

    /**
        是否预售
     **/
    public $new_presell;

    /**
        是否优享
     **/
    public $you_xiang;

    /**
        天猫未来店线下店铺 ID
     **/
    public $retail_store_id;

    /**
        区分istore订单和普通订单
     **/
    public $is_istore;

    /**
        区分istore订单来源
     **/
    public $ua;

    /**
        linkedmall透传参数
     **/
    public $linkedmall_ext_info;

    /**
        支付渠道：0 用户主动支付 1 系统代扣 2 保险赔付
     **/
    public $pay_channel;

    /**
        新零售全渠道订单：订单类型，自提订单：pickUp，电商发货：tmall，门店发货（配送、骑手）：storeSend
     **/
    public $rt_omni_send_type;

    /**
        新零售全渠道订单：发货门店ID
     **/
    public $rt_omni_store_id;

    /**
        新零售全渠道订单：商家自有发货门店编码
     **/
    public $rt_omni_outer_store_id;

    /**
        同城预约配送开始时间
     **/
    public $tcps_start;

    /**
        同城业务类型,com.tmall.dsd:定时送,storeDsd-fn-3-1:淘速达3公里蜂鸟配送
     **/
    public $tcps_code;

    /**
        同城预约配送结束时间
     **/
    public $tcps_end;

    /**
        主订单商家代缴税费
     **/
    public $m_tariff_fee;

    /**
        时效服务身份，如tmallPromise代表天猫时效承诺
     **/
    public $timing_promise;

    /**
        时效服务字段，服务字段，会有多个服务值，以英文半角逗号","切割
     **/
    public $promise_service;

    /**
        物流截单时间，分钟
     **/
    public $cutoff_minutes;

    /**
        物流时效，相对时间，单位是天
     **/
    public $es_time;

    /**
        最晚发货时间，日期
     **/
    public $delivery_time;

    /**
        最晚揽收时间，日期
     **/
    public $collect_time;

    /**
        最晚派送时间，日期
     **/
    public $dispatch_time;

    /**
        最晚签收时间，日期
     **/
    public $sign_time;

    /**
        外部会员id
     **/
    public $outer_partner_member_id;

    /**
        叶子分类
     **/
    public $root_cat;

    /**
        1-gifting订单
     **/
    public $gifting;

    /**
        1-coffee gifting订单
     **/
    public $gifting_takeout;

    /**
        预约安装时间
     **/
    public $oi_date;

    /**
        预约安装时间段
     **/
    public $oi_range;

    /**
        暂不安装
     **/
    public $hold_install;

    /**
        订单来源
     **/
    public $app_name;

    /**
        同城站类型
     **/
    public $easy_home_city_type;

    /**
        同城站关联订单号
     **/
    public $nr_deposit_order_id;

    /**
        摊位id
     **/
    public $nr_store_code;

    /**
        使用淘金币的数量，以分为单位，和订单标propoint中间那一段一样，没有返回null
     **/
    public $propoint;

    /**
        是否周期送订单
     **/
    public $zqs_order_tag;

    /**
        天鲜配冰柜id
     **/
    public $txp_freezer_id;

    /**
        天鲜配自提方式
     **/
    public $txp_receive_method;

    /**
        购物金信息输出
     **/
    public $expandcard_info;

    /**
        透出的额外信息
     **/
    public $extend_info;

    /**
        收货地址有变更，返回"1"
     **/
    public $lm;

    /**
        同城购订单来源
     **/
    public $brand_light_shop_source;

    /**
        同城购渠道店id
     **/
    public $brand_light_shop_store_id;

    /**
        标识完美履约订单
     **/
    public $is_wmly;

    /**
        全渠道包裹信息
     **/
    public $omni_package;

    /**
        新康众扩展数据
     **/
    public $ncz_ext_attr;

    /**
        苹果发票详情
     **/
    public $invoice_detail_pay;

    /**
        苹果发票详情
     **/
    public $invoice_detail_mid_refund;

    /**
        苹果发票详情
     **/
    public $invoice_detail_after_refund;

    /**
        买卡订单本金
     **/
    public $expand_card_basic_price;

    /**
        买卡订单权益金
     **/
    public $expand_card_expand_price;

    /**
        用卡订单所用的本金
     **/
    public $expand_card_basic_price_used;

    /**
        用卡订单所用的权益金
     **/
    public $expand_card_expand_price_used;

    /**
        配送cp
     **/
    public $delivery_cps;

    /**
        业务身份
     **/
    public $asdp_biz_type;

    /**
        是否是Openmall订单
     **/
    public $is_openmall;

    /**
        是否是码上收订单
     **/
    public $v_logistics_create;

    /**
        是否是非物流订单
     **/
    public $q_r_pay;

    /**
        关联下单订单
     **/
    public $order_follow_id;

    /**
        无物流信息返回true，平台属性，业务不要依赖
     **/
    public $no_shipping;

    /**
        送货上门标
     **/
    public $asdp_ads;

    /**
        消费者催发货标识，lg表示消费者做过催发货
     **/
    public $ob_tag;

    /**
        地址aid字段
     **/
    public $aid;

    /**
        通用的是否预售，默认是false，需要传general_new_presell参数才能真正识别是否是预售订单
     **/
    public $general_new_presell;

    /**
        是否疫情登记的订单。0=未登记，1=已登记
     **/
    public $drug_register;

    /**
        分阶段支付详情
     **/
    public $step_pay_details;

    /**
        同意退款检查标识字段
     **/
    public $agree_refund_checks;

    /**
        阶段地址详情字段
     **/
    public $address_details;

    /**
        阶段收货地址标识字段
     **/
    public $stage_address_type;

    /**
        订单分组ID
     **/
    public $og_id;

    /**
        承诺/最晚送达时间
     **/
    public $promise_sign_time;

    /**
        天猫商家使用，订单使用的红包信息
     **/
    public $tmall_coupon_fee;

    /**
        交付计划
     **/
    public $delivery_plan;

    /**
        全渠道订单相关字段
     **/
    public $omnichannel_param;

    /**
        入参fields字段必须包含receiver_name、receiver_address、created、receiver_mobile、receiver_phone 5个字段，否则无法生成oaid。
     **/
    public $oaid;

    /**
        CRM系统中特有的ouid
     **/
    public $ouid;

    /**
        是否是周期购订单
     **/
    public $is_cycle_buy;

    /**
        淘鲜达生鲜半日达
     **/
    public $scenario_group;

    /**
        拼团玩法垂直标
     **/
    public $play_type;

    /**
        ascp会自动流转到菜鸟仓发货
     **/
    public $is_force_dc;

    /**
        子订单组合品物流详情（仅支持拆单发货）
     **/
    public $combine_logistics_details;

    /**
        三方鉴定信息
     **/
    public $identify_info;

    /**
        物流时效信息
     **/
    public $logistics_consign_info;

    /**
        发货时效修改记录
     **/
    public $logistics_modify_info;

    /**
        优先发货时间
     **/
    public $priority_consign_time;

    /**
        物流服务
     **/
    public $logistics_agreement;

    /**
        天猫国际实名认证状态，1：实名完成 0：实名未完成
     **/
    public $real_name_auth_status;

    /**
        天猫国际第三方报关标识，1：第三方报关 0：非第三方报关
     **/
    public $third_party_customs_declaration;

    /**
        补差类型，ITEM:商品补差 POSTAGE:邮费补差 OTHER：其他补差
     **/
    public $receipt_type;

    /**
        补差关联订单号列表
     **/
    public $receipt_rel_ids;

    /**
        插旗标签
     **/
    public $seller_flag_tag;

    /**
        卖家openId
     **/
    public $seller_open_uid;

    /**
        文教行业授权手机号
     **/
    public $education_receiver_mobile;

    /**
        是否是集运订单
     **/
    public $is_gfjy;


    public function getBuyerOpenUid() : string{
        return $this->buyer_open_uid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyer_open_uid = $buyerOpenUid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getSid() : string{
        return $this->sid;
    }

    public function setSid(string $sid){
        $this->sid = $sid;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getAcookieId() : string{
        return $this->acookie_id;
    }

    public function setAcookieId(string $acookieId){
        $this->acookie_id = $acookieId;
    }

    public function getSellerRate() : bool{
        return $this->seller_rate;
    }

    public function setSellerRate(bool $sellerRate){
        $this->seller_rate = $sellerRate;
    }

    public function getBuyerRate() : bool{
        return $this->buyer_rate;
    }

    public function setBuyerRate(bool $buyerRate){
        $this->buyer_rate = $buyerRate;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getDiscountFee() : string{
        return $this->discount_fee;
    }

    public function setDiscountFee(string $discountFee){
        $this->discount_fee = $discountFee;
    }

    public function getAdjustFee() : string{
        return $this->adjust_fee;
    }

    public function setAdjustFee(string $adjustFee){
        $this->adjust_fee = $adjustFee;
    }

    public function getPostFee() : string{
        return $this->post_fee;
    }

    public function setPostFee(string $postFee){
        $this->post_fee = $postFee;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getReceivedPayment() : string{
        return $this->received_payment;
    }

    public function setReceivedPayment(string $receivedPayment){
        $this->received_payment = $receivedPayment;
    }

    public function getCommissionFee() : string{
        return $this->commission_fee;
    }

    public function setCommissionFee(string $commissionFee){
        $this->commission_fee = $commissionFee;
    }

    public function getBuyerMemo() : string{
        return $this->buyer_memo;
    }

    public function setBuyerMemo(string $buyerMemo){
        $this->buyer_memo = $buyerMemo;
    }

    public function getSellerMemo() : string{
        return $this->seller_memo;
    }

    public function setSellerMemo(string $sellerMemo){
        $this->seller_memo = $sellerMemo;
    }

    public function getBuyerArea() : string{
        return $this->buyer_area;
    }

    public function setBuyerArea(string $buyerArea){
        $this->buyer_area = $buyerArea;
    }

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getBuyerMessage() : string{
        return $this->buyer_message;
    }

    public function setBuyerMessage(string $buyerMessage){
        $this->buyer_message = $buyerMessage;
    }

    public function getPicPath() : string{
        return $this->pic_path;
    }

    public function setPicPath(string $picPath){
        $this->pic_path = $picPath;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getCodFee() : string{
        return $this->cod_fee;
    }

    public function setCodFee(string $codFee){
        $this->cod_fee = $codFee;
    }

    public function getCodStatus() : string{
        return $this->cod_status;
    }

    public function setCodStatus(string $codStatus){
        $this->cod_status = $codStatus;
    }

    public function getBuyerCodFee() : string{
        return $this->buyer_cod_fee;
    }

    public function setBuyerCodFee(string $buyerCodFee){
        $this->buyer_cod_fee = $buyerCodFee;
    }

    public function getSellerCodFee() : string{
        return $this->seller_cod_fee;
    }

    public function setSellerCodFee(string $sellerCodFee){
        $this->seller_cod_fee = $sellerCodFee;
    }

    public function getExpressAgencyFee() : string{
        return $this->express_agency_fee;
    }

    public function setExpressAgencyFee(string $expressAgencyFee){
        $this->express_agency_fee = $expressAgencyFee;
    }

    public function getShippingType() : string{
        return $this->shipping_type;
    }

    public function setShippingType(string $shippingType){
        $this->shipping_type = $shippingType;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getPointFee() : int{
        return $this->point_fee;
    }

    public function setPointFee(int $pointFee){
        $this->point_fee = $pointFee;
    }

    public function getRealPointFee() : int{
        return $this->real_point_fee;
    }

    public function setRealPointFee(int $realPointFee){
        $this->real_point_fee = $realPointFee;
    }

    public function getBuyerObtainPointFee() : int{
        return $this->buyer_obtain_point_fee;
    }

    public function setBuyerObtainPointFee(int $buyerObtainPointFee){
        $this->buyer_obtain_point_fee = $buyerObtainPointFee;
    }

    public function getBuyerAlipayNo() : string{
        return $this->buyer_alipay_no;
    }

    public function setBuyerAlipayNo(string $buyerAlipayNo){
        $this->buyer_alipay_no = $buyerAlipayNo;
    }

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
    }

    public function getReceiverCountry() : string{
        return $this->receiver_country;
    }

    public function setReceiverCountry(string $receiverCountry){
        $this->receiver_country = $receiverCountry;
    }

    public function getReceiverState() : string{
        return $this->receiver_state;
    }

    public function setReceiverState(string $receiverState){
        $this->receiver_state = $receiverState;
    }

    public function getReceiverCity() : string{
        return $this->receiver_city;
    }

    public function setReceiverCity(string $receiverCity){
        $this->receiver_city = $receiverCity;
    }

    public function getReceiverDistrict() : string{
        return $this->receiver_district;
    }

    public function setReceiverDistrict(string $receiverDistrict){
        $this->receiver_district = $receiverDistrict;
    }

    public function getReceiverTown() : string{
        return $this->receiver_town;
    }

    public function setReceiverTown(string $receiverTown){
        $this->receiver_town = $receiverTown;
    }

    public function getReceiverAddress() : string{
        return $this->receiver_address;
    }

    public function setReceiverAddress(string $receiverAddress){
        $this->receiver_address = $receiverAddress;
    }

    public function getReceiverZip() : string{
        return $this->receiver_zip;
    }

    public function setReceiverZip(string $receiverZip){
        $this->receiver_zip = $receiverZip;
    }

    public function getReceiverMobile() : string{
        return $this->receiver_mobile;
    }

    public function setReceiverMobile(string $receiverMobile){
        $this->receiver_mobile = $receiverMobile;
    }

    public function getReceiverPhone() : string{
        return $this->receiver_phone;
    }

    public function setReceiverPhone(string $receiverPhone){
        $this->receiver_phone = $receiverPhone;
    }

    public function getBuyerEmail() : string{
        return $this->buyer_email;
    }

    public function setBuyerEmail(string $buyerEmail){
        $this->buyer_email = $buyerEmail;
    }

    public function getSellerAlipayNo() : string{
        return $this->seller_alipay_no;
    }

    public function setSellerAlipayNo(string $sellerAlipayNo){
        $this->seller_alipay_no = $sellerAlipayNo;
    }

    public function getSellerMobile() : string{
        return $this->seller_mobile;
    }

    public function setSellerMobile(string $sellerMobile){
        $this->seller_mobile = $sellerMobile;
    }

    public function getSellerPhone() : string{
        return $this->seller_phone;
    }

    public function setSellerPhone(string $sellerPhone){
        $this->seller_phone = $sellerPhone;
    }

    public function getSellerName() : string{
        return $this->seller_name;
    }

    public function setSellerName(string $sellerName){
        $this->seller_name = $sellerName;
    }

    public function getSellerEmail() : string{
        return $this->seller_email;
    }

    public function setSellerEmail(string $sellerEmail){
        $this->seller_email = $sellerEmail;
    }

    public function getAvailableConfirmFee() : string{
        return $this->available_confirm_fee;
    }

    public function setAvailableConfirmFee(string $availableConfirmFee){
        $this->available_confirm_fee = $availableConfirmFee;
    }

    public function getHasPostFee() : bool{
        return $this->has_post_fee;
    }

    public function setHasPostFee(bool $hasPostFee){
        $this->has_post_fee = $hasPostFee;
    }

    public function getTimeoutActionTime() : string{
        return $this->timeout_action_time;
    }

    public function setTimeoutActionTime(string $timeoutActionTime){
        $this->timeout_action_time = $timeoutActionTime;
    }

    public function getSnapshotUrl() : string{
        return $this->snapshot_url;
    }

    public function setSnapshotUrl(string $snapshotUrl){
        $this->snapshot_url = $snapshotUrl;
    }

    public function getTradeMemo() : string{
        return $this->trade_memo;
    }

    public function setTradeMemo(string $tradeMemo){
        $this->trade_memo = $tradeMemo;
    }

    public function getPromotion() : string{
        return $this->promotion;
    }

    public function setPromotion(string $promotion){
        $this->promotion = $promotion;
    }

    public function getIs3D() : bool{
        return $this->is_3D;
    }

    public function setIs3D(bool $is3D){
        $this->is_3D = $is3D;
    }

    public function getIsLgtype() : bool{
        return $this->is_lgtype;
    }

    public function setIsLgtype(bool $isLgtype){
        $this->is_lgtype = $isLgtype;
    }

    public function getIsBrandSale() : bool{
        return $this->is_brand_sale;
    }

    public function setIsBrandSale(bool $isBrandSale){
        $this->is_brand_sale = $isBrandSale;
    }

    public function getIsForceWlb() : bool{
        return $this->is_force_wlb;
    }

    public function setIsForceWlb(bool $isForceWlb){
        $this->is_force_wlb = $isForceWlb;
    }

    public function getBuyerFlag() : int{
        return $this->buyer_flag;
    }

    public function setBuyerFlag(int $buyerFlag){
        $this->buyer_flag = $buyerFlag;
    }

    public function getSellerFlag() : int{
        return $this->seller_flag;
    }

    public function setSellerFlag(int $sellerFlag){
        $this->seller_flag = $sellerFlag;
    }

    public function getCreditCardFee() : string{
        return $this->credit_card_fee;
    }

    public function setCreditCardFee(string $creditCardFee){
        $this->credit_card_fee = $creditCardFee;
    }

    public function getStepTradeStatus() : string{
        return $this->step_trade_status;
    }

    public function setStepTradeStatus(string $stepTradeStatus){
        $this->step_trade_status = $stepTradeStatus;
    }

    public function getStepPaidFee() : string{
        return $this->step_paid_fee;
    }

    public function setStepPaidFee(string $stepPaidFee){
        $this->step_paid_fee = $stepPaidFee;
    }

    public function getEticketExt() : string{
        return $this->eticket_ext;
    }

    public function setEticketExt(string $eticketExt){
        $this->eticket_ext = $eticketExt;
    }

    public function getMarkDesc() : string{
        return $this->mark_desc;
    }

    public function setMarkDesc(string $markDesc){
        $this->mark_desc = $markDesc;
    }

    public function getHasYfx() : bool{
        return $this->has_yfx;
    }

    public function setHasYfx(bool $hasYfx){
        $this->has_yfx = $hasYfx;
    }

    public function getYfxFee() : string{
        return $this->yfx_fee;
    }

    public function setYfxFee(string $yfxFee){
        $this->yfx_fee = $yfxFee;
    }

    public function getYfxId() : string{
        return $this->yfx_id;
    }

    public function setYfxId(string $yfxId){
        $this->yfx_id = $yfxId;
    }

    public function getYfxType() : string{
        return $this->yfx_type;
    }

    public function setYfxType(string $yfxType){
        $this->yfx_type = $yfxType;
    }

    public function getSendTime() : string{
        return $this->send_time;
    }

    public function setSendTime(string $sendTime){
        $this->send_time = $sendTime;
    }

    public function getCanRate() : bool{
        return $this->can_rate;
    }

    public function setCanRate(bool $canRate){
        $this->can_rate = $canRate;
    }

    public function getSellerCanRate() : bool{
        return $this->seller_can_rate;
    }

    public function setSellerCanRate(bool $sellerCanRate){
        $this->seller_can_rate = $sellerCanRate;
    }

    public function getIsPartConsign() : bool{
        return $this->is_part_consign;
    }

    public function setIsPartConsign(bool $isPartConsign){
        $this->is_part_consign = $isPartConsign;
    }

    public function getIsDaixiao() : bool{
        return $this->is_daixiao;
    }

    public function setIsDaixiao(bool $isDaixiao){
        $this->is_daixiao = $isDaixiao;
    }

    public function getIsWt() : bool{
        return $this->is_wt;
    }

    public function setIsWt(bool $isWt){
        $this->is_wt = $isWt;
    }

    public function getArriveInterval() : int{
        return $this->arrive_interval;
    }

    public function setArriveInterval(int $arriveInterval){
        $this->arrive_interval = $arriveInterval;
    }

    public function getArriveCutTime() : string{
        return $this->arrive_cut_time;
    }

    public function setArriveCutTime(string $arriveCutTime){
        $this->arrive_cut_time = $arriveCutTime;
    }

    public function getConsignInterval() : int{
        return $this->consign_interval;
    }

    public function setConsignInterval(int $consignInterval){
        $this->consign_interval = $consignInterval;
    }

    public function getO2o() : string{
        return $this->o2o;
    }

    public function setO2o(string $o2o){
        $this->o2o = $o2o;
    }

    public function getO2oGuideId() : string{
        return $this->o2o_guide_id;
    }

    public function setO2oGuideId(string $o2oGuideId){
        $this->o2o_guide_id = $o2oGuideId;
    }

    public function getO2oGuideName() : string{
        return $this->o2o_guide_name;
    }

    public function setO2oGuideName(string $o2oGuideName){
        $this->o2o_guide_name = $o2oGuideName;
    }

    public function getO2oShopId() : string{
        return $this->o2o_shop_id;
    }

    public function setO2oShopId(string $o2oShopId){
        $this->o2o_shop_id = $o2oShopId;
    }

    public function getO2oShopName() : string{
        return $this->o2o_shop_name;
    }

    public function setO2oShopName(string $o2oShopName){
        $this->o2o_shop_name = $o2oShopName;
    }

    public function getO2oDelivery() : string{
        return $this->o2o_delivery;
    }

    public function setO2oDelivery(string $o2oDelivery){
        $this->o2o_delivery = $o2oDelivery;
    }

    public function getO2oOutTradeId() : string{
        return $this->o2o_out_trade_id;
    }

    public function setO2oOutTradeId(string $o2oOutTradeId){
        $this->o2o_out_trade_id = $o2oOutTradeId;
    }

    public function getShopCode() : string{
        return $this->shop_code;
    }

    public function setShopCode(string $shopCode){
        $this->shop_code = $shopCode;
    }

    public function getHkEnName() : string{
        return $this->hk_en_name;
    }

    public function setHkEnName(string $hkEnName){
        $this->hk_en_name = $hkEnName;
    }

    public function getHkFlightNo() : string{
        return $this->hk_flight_no;
    }

    public function setHkFlightNo(string $hkFlightNo){
        $this->hk_flight_no = $hkFlightNo;
    }

    public function getHkChinaName() : string{
        return $this->hk_china_name;
    }

    public function setHkChinaName(string $hkChinaName){
        $this->hk_china_name = $hkChinaName;
    }

    public function getHkCardCode() : string{
        return $this->hk_card_code;
    }

    public function setHkCardCode(string $hkCardCode){
        $this->hk_card_code = $hkCardCode;
    }

    public function getHkCardType() : string{
        return $this->hk_card_type;
    }

    public function setHkCardType(string $hkCardType){
        $this->hk_card_type = $hkCardType;
    }

    public function getHkFlightDate() : string{
        return $this->hk_flight_date;
    }

    public function setHkFlightDate(string $hkFlightDate){
        $this->hk_flight_date = $hkFlightDate;
    }

    public function getHkGender() : string{
        return $this->hk_gender;
    }

    public function setHkGender(string $hkGender){
        $this->hk_gender = $hkGender;
    }

    public function getHkBirthday() : string{
        return $this->hk_birthday;
    }

    public function setHkBirthday(string $hkBirthday){
        $this->hk_birthday = $hkBirthday;
    }

    public function getHkPickup() : string{
        return $this->hk_pickup;
    }

    public function setHkPickup(string $hkPickup){
        $this->hk_pickup = $hkPickup;
    }

    public function getHkPickupId() : string{
        return $this->hk_pickup_id;
    }

    public function setHkPickupId(string $hkPickupId){
        $this->hk_pickup_id = $hkPickupId;
    }

    public function getEstConTime() : string{
        return $this->est_con_time;
    }

    public function setEstConTime(string $estConTime){
        $this->est_con_time = $estConTime;
    }

    public function getOrders() : array{
        return $this->orders;
    }

    public function setOrders(array $orders){
        $this->orders = $orders;
    }

    public function getPromotionDetails() : array{
        return $this->promotion_details;
    }

    public function setPromotionDetails(array $promotionDetails){
        $this->promotion_details = $promotionDetails;
    }

    public function getServiceTags() : array{
        return $this->service_tags;
    }

    public function setServiceTags(array $serviceTags){
        $this->service_tags = $serviceTags;
    }

    public function getServiceOrders() : array{
        return $this->service_orders;
    }

    public function setServiceOrders(array $serviceOrders){
        $this->service_orders = $serviceOrders;
    }

    public function getTradeFrom() : string{
        return $this->trade_from;
    }

    public function setTradeFrom(string $tradeFrom){
        $this->trade_from = $tradeFrom;
    }

    public function getTradeSource() : string{
        return $this->trade_source;
    }

    public function setTradeSource(string $tradeSource){
        $this->trade_source = $tradeSource;
    }

    public function getZeroPurchase() : bool{
        return $this->zero_purchase;
    }

    public function setZeroPurchase(bool $zeroPurchase){
        $this->zero_purchase = $zeroPurchase;
    }

    public function getAlipayPoint() : int{
        return $this->alipay_point;
    }

    public function setAlipayPoint(int $alipayPoint){
        $this->alipay_point = $alipayPoint;
    }

    public function getPccAf() : int{
        return $this->pcc_af;
    }

    public function setPccAf(int $pccAf){
        $this->pcc_af = $pccAf;
    }

    public function getTradeExt() : TaobaoTradeFullinfoGetTradeExt{
        return $this->trade_ext;
    }

    public function setTradeExt(TaobaoTradeFullinfoGetTradeExt $tradeExt){
        $this->trade_ext = $tradeExt;
    }

    public function getOrderTaxFee() : string{
        return $this->order_tax_fee;
    }

    public function setOrderTaxFee(string $orderTaxFee){
        $this->order_tax_fee = $orderTaxFee;
    }

    public function getEtSerTime() : string{
        return $this->et_ser_time;
    }

    public function setEtSerTime(string $etSerTime){
        $this->et_ser_time = $etSerTime;
    }

    public function getEtShopName() : string{
        return $this->et_shop_name;
    }

    public function setEtShopName(string $etShopName){
        $this->et_shop_name = $etShopName;
    }

    public function getEtVerifiedShopName() : string{
        return $this->et_verified_shop_name;
    }

    public function setEtVerifiedShopName(string $etVerifiedShopName){
        $this->et_verified_shop_name = $etVerifiedShopName;
    }

    public function getEtPlateNumber() : string{
        return $this->et_plate_number;
    }

    public function setEtPlateNumber(string $etPlateNumber){
        $this->et_plate_number = $etPlateNumber;
    }

    public function getO2oSnatchStatus() : string{
        return $this->o2o_snatch_status;
    }

    public function setO2oSnatchStatus(string $o2oSnatchStatus){
        $this->o2o_snatch_status = $o2oSnatchStatus;
    }

    public function getIsShShip() : bool{
        return $this->is_sh_ship;
    }

    public function setIsShShip(bool $isShShip){
        $this->is_sh_ship = $isShShip;
    }

    public function getEticketServiceAddr() : string{
        return $this->eticket_service_addr;
    }

    public function setEticketServiceAddr(string $eticketServiceAddr){
        $this->eticket_service_addr = $eticketServiceAddr;
    }

    public function getEtType() : string{
        return $this->et_type;
    }

    public function setEtType(string $etType){
        $this->et_type = $etType;
    }

    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }

    public function getObs() : string{
        return $this->obs;
    }

    public function setObs(string $obs){
        $this->obs = $obs;
    }

    public function getEtShopId() : int{
        return $this->et_shop_id;
    }

    public function setEtShopId(int $etShopId){
        $this->et_shop_id = $etShopId;
    }

    public function getPaidCouponFee() : string{
        return $this->paid_coupon_fee;
    }

    public function setPaidCouponFee(string $paidCouponFee){
        $this->paid_coupon_fee = $paidCouponFee;
    }

    public function getShopPick() : string{
        return $this->shop_pick;
    }

    public function setShopPick(string $shopPick){
        $this->shop_pick = $shopPick;
    }

    public function getRxAuditStatus() : string{
        return $this->rx_audit_status;
    }

    public function setRxAuditStatus(string $rxAuditStatus){
        $this->rx_audit_status = $rxAuditStatus;
    }

    public function getEsDate() : string{
        return $this->es_date;
    }

    public function setEsDate(string $esDate){
        $this->es_date = $esDate;
    }

    public function getEsRange() : string{
        return $this->es_range;
    }

    public function setEsRange(string $esRange){
        $this->es_range = $esRange;
    }

    public function getOsDate() : string{
        return $this->os_date;
    }

    public function setOsDate(string $osDate){
        $this->os_date = $osDate;
    }

    public function getOsRange() : string{
        return $this->os_range;
    }

    public function setOsRange(string $osRange){
        $this->os_range = $osRange;
    }

    public function getCouponFee() : int{
        return $this->coupon_fee;
    }

    public function setCouponFee(int $couponFee){
        $this->coupon_fee = $couponFee;
    }

    public function getPostGateDeclare() : bool{
        return $this->post_gate_declare;
    }

    public function setPostGateDeclare(bool $postGateDeclare){
        $this->post_gate_declare = $postGateDeclare;
    }

    public function getCrossBondedDeclare() : bool{
        return $this->cross_bonded_declare;
    }

    public function setCrossBondedDeclare(bool $crossBondedDeclare){
        $this->cross_bonded_declare = $crossBondedDeclare;
    }

    public function getTradeAttr() : array{
        return $this->trade_attr;
    }

    public function setTradeAttr(array $tradeAttr){
        $this->trade_attr = $tradeAttr;
    }

    public function getTopHold() : int{
        return $this->top_hold;
    }

    public function setTopHold(int $topHold){
        $this->top_hold = $topHold;
    }

    public function getOmniAttr() : string{
        return $this->omni_attr;
    }

    public function setOmniAttr(string $omniAttr){
        $this->omni_attr = $omniAttr;
    }

    public function getOmniParam() : string{
        return $this->omni_param;
    }

    public function setOmniParam(string $omniParam){
        $this->omni_param = $omniParam;
    }

    public function getAssembly() : string{
        return $this->assembly;
    }

    public function setAssembly(string $assembly){
        $this->assembly = $assembly;
    }

    public function getForbidConsign() : int{
        return $this->forbid_consign;
    }

    public function setForbidConsign(int $forbidConsign){
        $this->forbid_consign = $forbidConsign;
    }

    public function getIdentity() : string{
        return $this->identity;
    }

    public function setIdentity(string $identity){
        $this->identity = $identity;
    }

    public function getTeamBuyHold() : int{
        return $this->team_buy_hold;
    }

    public function setTeamBuyHold(int $teamBuyHold){
        $this->team_buy_hold = $teamBuyHold;
    }

    public function getShareGroupHold() : int{
        return $this->share_group_hold;
    }

    public function setShareGroupHold(int $shareGroupHold){
        $this->share_group_hold = $shareGroupHold;
    }

    public function getOfpHold() : int{
        return $this->ofp_hold;
    }

    public function setOfpHold(int $ofpHold){
        $this->ofp_hold = $ofpHold;
    }

    public function getO2oStepTradeDetail() : string{
        return $this->o2o_step_trade_detail;
    }

    public function setO2oStepTradeDetail(string $o2oStepTradeDetail){
        $this->o2o_step_trade_detail = $o2oStepTradeDetail;
    }

    public function getO2oStepOrderId() : string{
        return $this->o2o_step_order_id;
    }

    public function setO2oStepOrderId(string $o2oStepOrderId){
        $this->o2o_step_order_id = $o2oStepOrderId;
    }

    public function getO2oEtOrderId() : string{
        return $this->o2o_et_order_id;
    }

    public function setO2oEtOrderId(string $o2oEtOrderId){
        $this->o2o_et_order_id = $o2oEtOrderId;
    }

    public function getO2oVoucherPrice() : string{
        return $this->o2o_voucher_price;
    }

    public function setO2oVoucherPrice(string $o2oVoucherPrice){
        $this->o2o_voucher_price = $o2oVoucherPrice;
    }

    public function getOrderTaxPromotionFee() : string{
        return $this->order_tax_promotion_fee;
    }

    public function setOrderTaxPromotionFee(string $orderTaxPromotionFee){
        $this->order_tax_promotion_fee = $orderTaxPromotionFee;
    }

    public function getDelayCreateDelivery() : int{
        return $this->delay_create_delivery;
    }

    public function setDelayCreateDelivery(int $delayCreateDelivery){
        $this->delay_create_delivery = $delayCreateDelivery;
    }

    public function getTidStr() : string{
        return $this->tid_str;
    }

    public function setTidStr(string $tidStr){
        $this->tid_str = $tidStr;
    }

    public function getToptype() : int{
        return $this->toptype;
    }

    public function setToptype(int $toptype){
        $this->toptype = $toptype;
    }

    public function getServiceType() : string{
        return $this->service_type;
    }

    public function setServiceType(string $serviceType){
        $this->service_type = $serviceType;
    }

    public function getO2oServiceMobile() : string{
        return $this->o2o_service_mobile;
    }

    public function setO2oServiceMobile(string $o2oServiceMobile){
        $this->o2o_service_mobile = $o2oServiceMobile;
    }

    public function getO2oServiceName() : string{
        return $this->o2o_service_name;
    }

    public function setO2oServiceName(string $o2oServiceName){
        $this->o2o_service_name = $o2oServiceName;
    }

    public function getO2oServiceState() : string{
        return $this->o2o_service_state;
    }

    public function setO2oServiceState(string $o2oServiceState){
        $this->o2o_service_state = $o2oServiceState;
    }

    public function getO2oServiceCity() : string{
        return $this->o2o_service_city;
    }

    public function setO2oServiceCity(string $o2oServiceCity){
        $this->o2o_service_city = $o2oServiceCity;
    }

    public function getO2oServiceDistrict() : string{
        return $this->o2o_service_district;
    }

    public function setO2oServiceDistrict(string $o2oServiceDistrict){
        $this->o2o_service_district = $o2oServiceDistrict;
    }

    public function getO2oServiceTown() : string{
        return $this->o2o_service_town;
    }

    public function setO2oServiceTown(string $o2oServiceTown){
        $this->o2o_service_town = $o2oServiceTown;
    }

    public function getO2oServiceAddress() : string{
        return $this->o2o_service_address;
    }

    public function setO2oServiceAddress(string $o2oServiceAddress){
        $this->o2o_service_address = $o2oServiceAddress;
    }

    public function getO2oStepTradeDetailNew() : string{
        return $this->o2o_step_trade_detail_new;
    }

    public function setO2oStepTradeDetailNew(string $o2oStepTradeDetailNew){
        $this->o2o_step_trade_detail_new = $o2oStepTradeDetailNew;
    }

    public function getO2oXiaopiao() : string{
        return $this->o2o_xiaopiao;
    }

    public function setO2oXiaopiao(string $o2oXiaopiao){
        $this->o2o_xiaopiao = $o2oXiaopiao;
    }

    public function getO2oContract() : string{
        return $this->o2o_contract;
    }

    public function setO2oContract(string $o2oContract){
        $this->o2o_contract = $o2oContract;
    }

    public function getRechargeFee() : string{
        return $this->recharge_fee;
    }

    public function setRechargeFee(string $rechargeFee){
        $this->recharge_fee = $rechargeFee;
    }

    public function getRetailStoreCode() : string{
        return $this->retail_store_code;
    }

    public function setRetailStoreCode(string $retailStoreCode){
        $this->retail_store_code = $retailStoreCode;
    }

    public function getRetailOutOrderId() : string{
        return $this->retail_out_order_id;
    }

    public function setRetailOutOrderId(string $retailOutOrderId){
        $this->retail_out_order_id = $retailOutOrderId;
    }

    public function getPlatformSubsidyFee() : string{
        return $this->platform_subsidy_fee;
    }

    public function setPlatformSubsidyFee(string $platformSubsidyFee){
        $this->platform_subsidy_fee = $platformSubsidyFee;
    }

    public function getNrOffline() : string{
        return $this->nr_offline;
    }

    public function setNrOffline(string $nrOffline){
        $this->nr_offline = $nrOffline;
    }

    public function getWttParam() : string{
        return $this->wtt_param;
    }

    public function setWttParam(string $wttParam){
        $this->wtt_param = $wttParam;
    }

    public function getLogisticsInfos() : array{
        return $this->logistics_infos;
    }

    public function setLogisticsInfos(array $logisticsInfos){
        $this->logistics_infos = $logisticsInfos;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getNrStoreOrderId() : string{
        return $this->nr_store_order_id;
    }

    public function setNrStoreOrderId(string $nrStoreOrderId){
        $this->nr_store_order_id = $nrStoreOrderId;
    }

    public function getNrShopId() : string{
        return $this->nr_shop_id;
    }

    public function setNrShopId(string $nrShopId){
        $this->nr_shop_id = $nrShopId;
    }

    public function getNrShopName() : string{
        return $this->nr_shop_name;
    }

    public function setNrShopName(string $nrShopName){
        $this->nr_shop_name = $nrShopName;
    }

    public function getNrShopGuideId() : string{
        return $this->nr_shop_guide_id;
    }

    public function setNrShopGuideId(string $nrShopGuideId){
        $this->nr_shop_guide_id = $nrShopGuideId;
    }

    public function getNrShopGuideName() : string{
        return $this->nr_shop_guide_name;
    }

    public function setNrShopGuideName(string $nrShopGuideName){
        $this->nr_shop_guide_name = $nrShopGuideName;
    }

    public function getSortInfo() : TaobaoTradeFullinfoGetSortInfo{
        return $this->sort_info;
    }

    public function setSortInfo(TaobaoTradeFullinfoGetSortInfo $sortInfo){
        $this->sort_info = $sortInfo;
    }

    public function getSorted() : int{
        return $this->sorted;
    }

    public function setSorted(int $sorted){
        $this->sorted = $sorted;
    }

    public function getNrNoHandle() : string{
        return $this->nr_no_handle;
    }

    public function setNrNoHandle(string $nrNoHandle){
        $this->nr_no_handle = $nrNoHandle;
    }

    public function getBizCode() : string{
        return $this->biz_code;
    }

    public function setBizCode(string $bizCode){
        $this->biz_code = $bizCode;
    }

    public function getCloudStore() : string{
        return $this->cloud_store;
    }

    public function setCloudStore(string $cloudStore){
        $this->cloud_store = $cloudStore;
    }

    public function getIsGift() : bool{
        return $this->is_gift;
    }

    public function setIsGift(bool $isGift){
        $this->is_gift = $isGift;
    }

    public function getDoneeNick() : string{
        return $this->donee_nick;
    }

    public function setDoneeNick(string $doneeNick){
        $this->donee_nick = $doneeNick;
    }

    public function getDoneeOpenUid() : string{
        return $this->donee_open_uid;
    }

    public function setDoneeOpenUid(string $doneeOpenUid){
        $this->donee_open_uid = $doneeOpenUid;
    }

    public function getSuningShopCode() : string{
        return $this->suning_shop_code;
    }

    public function setSuningShopCode(string $suningShopCode){
        $this->suning_shop_code = $suningShopCode;
    }

    public function getSuningShopValid() : int{
        return $this->suning_shop_valid;
    }

    public function setSuningShopValid(int $suningShopValid){
        $this->suning_shop_valid = $suningShopValid;
    }

    public function getAllowAppkeys() : string{
        return $this->allow_appkeys;
    }

    public function setAllowAppkeys(string $allowAppkeys){
        $this->allow_appkeys = $allowAppkeys;
    }

    public function getNewPresell() : bool{
        return $this->new_presell;
    }

    public function setNewPresell(bool $newPresell){
        $this->new_presell = $newPresell;
    }

    public function getYouXiang() : bool{
        return $this->you_xiang;
    }

    public function setYouXiang(bool $youXiang){
        $this->you_xiang = $youXiang;
    }

    public function getRetailStoreId() : string{
        return $this->retail_store_id;
    }

    public function setRetailStoreId(string $retailStoreId){
        $this->retail_store_id = $retailStoreId;
    }

    public function getIsIstore() : bool{
        return $this->is_istore;
    }

    public function setIsIstore(bool $isIstore){
        $this->is_istore = $isIstore;
    }

    public function getUa() : string{
        return $this->ua;
    }

    public function setUa(string $ua){
        $this->ua = $ua;
    }

    public function getLinkedmallExtInfo() : string{
        return $this->linkedmall_ext_info;
    }

    public function setLinkedmallExtInfo(string $linkedmallExtInfo){
        $this->linkedmall_ext_info = $linkedmallExtInfo;
    }

    public function getPayChannel() : string{
        return $this->pay_channel;
    }

    public function setPayChannel(string $payChannel){
        $this->pay_channel = $payChannel;
    }

    public function getRtOmniSendType() : string{
        return $this->rt_omni_send_type;
    }

    public function setRtOmniSendType(string $rtOmniSendType){
        $this->rt_omni_send_type = $rtOmniSendType;
    }

    public function getRtOmniStoreId() : string{
        return $this->rt_omni_store_id;
    }

    public function setRtOmniStoreId(string $rtOmniStoreId){
        $this->rt_omni_store_id = $rtOmniStoreId;
    }

    public function getRtOmniOuterStoreId() : string{
        return $this->rt_omni_outer_store_id;
    }

    public function setRtOmniOuterStoreId(string $rtOmniOuterStoreId){
        $this->rt_omni_outer_store_id = $rtOmniOuterStoreId;
    }

    public function getTcpsStart() : string{
        return $this->tcps_start;
    }

    public function setTcpsStart(string $tcpsStart){
        $this->tcps_start = $tcpsStart;
    }

    public function getTcpsCode() : string{
        return $this->tcps_code;
    }

    public function setTcpsCode(string $tcpsCode){
        $this->tcps_code = $tcpsCode;
    }

    public function getTcpsEnd() : string{
        return $this->tcps_end;
    }

    public function setTcpsEnd(string $tcpsEnd){
        $this->tcps_end = $tcpsEnd;
    }

    public function getMTariffFee() : string{
        return $this->m_tariff_fee;
    }

    public function setMTariffFee(string $mTariffFee){
        $this->m_tariff_fee = $mTariffFee;
    }

    public function getTimingPromise() : string{
        return $this->timing_promise;
    }

    public function setTimingPromise(string $timingPromise){
        $this->timing_promise = $timingPromise;
    }

    public function getPromiseService() : string{
        return $this->promise_service;
    }

    public function setPromiseService(string $promiseService){
        $this->promise_service = $promiseService;
    }

    public function getCutoffMinutes() : string{
        return $this->cutoff_minutes;
    }

    public function setCutoffMinutes(string $cutoffMinutes){
        $this->cutoff_minutes = $cutoffMinutes;
    }

    public function getEsTime() : string{
        return $this->es_time;
    }

    public function setEsTime(string $esTime){
        $this->es_time = $esTime;
    }

    public function getDeliveryTime() : string{
        return $this->delivery_time;
    }

    public function setDeliveryTime(string $deliveryTime){
        $this->delivery_time = $deliveryTime;
    }

    public function getCollectTime() : string{
        return $this->collect_time;
    }

    public function setCollectTime(string $collectTime){
        $this->collect_time = $collectTime;
    }

    public function getDispatchTime() : string{
        return $this->dispatch_time;
    }

    public function setDispatchTime(string $dispatchTime){
        $this->dispatch_time = $dispatchTime;
    }

    public function getSignTime() : string{
        return $this->sign_time;
    }

    public function setSignTime(string $signTime){
        $this->sign_time = $signTime;
    }

    public function getOuterPartnerMemberId() : string{
        return $this->outer_partner_member_id;
    }

    public function setOuterPartnerMemberId(string $outerPartnerMemberId){
        $this->outer_partner_member_id = $outerPartnerMemberId;
    }

    public function getRootCat() : string{
        return $this->root_cat;
    }

    public function setRootCat(string $rootCat){
        $this->root_cat = $rootCat;
    }

    public function getGifting() : string{
        return $this->gifting;
    }

    public function setGifting(string $gifting){
        $this->gifting = $gifting;
    }

    public function getGiftingTakeout() : string{
        return $this->gifting_takeout;
    }

    public function setGiftingTakeout(string $giftingTakeout){
        $this->gifting_takeout = $giftingTakeout;
    }

    public function getOiDate() : string{
        return $this->oi_date;
    }

    public function setOiDate(string $oiDate){
        $this->oi_date = $oiDate;
    }

    public function getOiRange() : string{
        return $this->oi_range;
    }

    public function setOiRange(string $oiRange){
        $this->oi_range = $oiRange;
    }

    public function getHoldInstall() : string{
        return $this->hold_install;
    }

    public function setHoldInstall(string $holdInstall){
        $this->hold_install = $holdInstall;
    }

    public function getAppName() : string{
        return $this->app_name;
    }

    public function setAppName(string $appName){
        $this->app_name = $appName;
    }

    public function getEasyHomeCityType() : string{
        return $this->easy_home_city_type;
    }

    public function setEasyHomeCityType(string $easyHomeCityType){
        $this->easy_home_city_type = $easyHomeCityType;
    }

    public function getNrDepositOrderId() : string{
        return $this->nr_deposit_order_id;
    }

    public function setNrDepositOrderId(string $nrDepositOrderId){
        $this->nr_deposit_order_id = $nrDepositOrderId;
    }

    public function getNrStoreCode() : string{
        return $this->nr_store_code;
    }

    public function setNrStoreCode(string $nrStoreCode){
        $this->nr_store_code = $nrStoreCode;
    }

    public function getPropoint() : string{
        return $this->propoint;
    }

    public function setPropoint(string $propoint){
        $this->propoint = $propoint;
    }

    public function getZqsOrderTag() : string{
        return $this->zqs_order_tag;
    }

    public function setZqsOrderTag(string $zqsOrderTag){
        $this->zqs_order_tag = $zqsOrderTag;
    }

    public function getTxpFreezerId() : string{
        return $this->txp_freezer_id;
    }

    public function setTxpFreezerId(string $txpFreezerId){
        $this->txp_freezer_id = $txpFreezerId;
    }

    public function getTxpReceiveMethod() : string{
        return $this->txp_receive_method;
    }

    public function setTxpReceiveMethod(string $txpReceiveMethod){
        $this->txp_receive_method = $txpReceiveMethod;
    }

    public function getExpandcardInfo() : TaobaoTradeFullinfoGetExpandCardInfo{
        return $this->expandcard_info;
    }

    public function setExpandcardInfo(TaobaoTradeFullinfoGetExpandCardInfo $expandcardInfo){
        $this->expandcard_info = $expandcardInfo;
    }

    public function getExtendInfo() : string{
        return $this->extend_info;
    }

    public function setExtendInfo(string $extendInfo){
        $this->extend_info = $extendInfo;
    }

    public function getLm() : string{
        return $this->lm;
    }

    public function setLm(string $lm){
        $this->lm = $lm;
    }

    public function getBrandLightShopSource() : string{
        return $this->brand_light_shop_source;
    }

    public function setBrandLightShopSource(string $brandLightShopSource){
        $this->brand_light_shop_source = $brandLightShopSource;
    }

    public function getBrandLightShopStoreId() : string{
        return $this->brand_light_shop_store_id;
    }

    public function setBrandLightShopStoreId(string $brandLightShopStoreId){
        $this->brand_light_shop_store_id = $brandLightShopStoreId;
    }

    public function getIsWmly() : string{
        return $this->is_wmly;
    }

    public function setIsWmly(string $isWmly){
        $this->is_wmly = $isWmly;
    }

    public function getOmniPackage() : string{
        return $this->omni_package;
    }

    public function setOmniPackage(string $omniPackage){
        $this->omni_package = $omniPackage;
    }

    public function getNczExtAttr() : string{
        return $this->ncz_ext_attr;
    }

    public function setNczExtAttr(string $nczExtAttr){
        $this->ncz_ext_attr = $nczExtAttr;
    }

    public function getInvoiceDetailPay() : string{
        return $this->invoice_detail_pay;
    }

    public function setInvoiceDetailPay(string $invoiceDetailPay){
        $this->invoice_detail_pay = $invoiceDetailPay;
    }

    public function getInvoiceDetailMidRefund() : string{
        return $this->invoice_detail_mid_refund;
    }

    public function setInvoiceDetailMidRefund(string $invoiceDetailMidRefund){
        $this->invoice_detail_mid_refund = $invoiceDetailMidRefund;
    }

    public function getInvoiceDetailAfterRefund() : string{
        return $this->invoice_detail_after_refund;
    }

    public function setInvoiceDetailAfterRefund(string $invoiceDetailAfterRefund){
        $this->invoice_detail_after_refund = $invoiceDetailAfterRefund;
    }

    public function getExpandCardBasicPrice() : string{
        return $this->expand_card_basic_price;
    }

    public function setExpandCardBasicPrice(string $expandCardBasicPrice){
        $this->expand_card_basic_price = $expandCardBasicPrice;
    }

    public function getExpandCardExpandPrice() : string{
        return $this->expand_card_expand_price;
    }

    public function setExpandCardExpandPrice(string $expandCardExpandPrice){
        $this->expand_card_expand_price = $expandCardExpandPrice;
    }

    public function getExpandCardBasicPriceUsed() : string{
        return $this->expand_card_basic_price_used;
    }

    public function setExpandCardBasicPriceUsed(string $expandCardBasicPriceUsed){
        $this->expand_card_basic_price_used = $expandCardBasicPriceUsed;
    }

    public function getExpandCardExpandPriceUsed() : string{
        return $this->expand_card_expand_price_used;
    }

    public function setExpandCardExpandPriceUsed(string $expandCardExpandPriceUsed){
        $this->expand_card_expand_price_used = $expandCardExpandPriceUsed;
    }

    public function getDeliveryCps() : string{
        return $this->delivery_cps;
    }

    public function setDeliveryCps(string $deliveryCps){
        $this->delivery_cps = $deliveryCps;
    }

    public function getAsdpBizType() : string{
        return $this->asdp_biz_type;
    }

    public function setAsdpBizType(string $asdpBizType){
        $this->asdp_biz_type = $asdpBizType;
    }

    public function getIsOpenmall() : bool{
        return $this->is_openmall;
    }

    public function setIsOpenmall(bool $isOpenmall){
        $this->is_openmall = $isOpenmall;
    }

    public function getVLogisticsCreate() : bool{
        return $this->v_logistics_create;
    }

    public function setVLogisticsCreate(bool $vLogisticsCreate){
        $this->v_logistics_create = $vLogisticsCreate;
    }

    public function getQRPay() : bool{
        return $this->q_r_pay;
    }

    public function setQRPay(bool $qRPay){
        $this->q_r_pay = $qRPay;
    }

    public function getOrderFollowId() : string{
        return $this->order_follow_id;
    }

    public function setOrderFollowId(string $orderFollowId){
        $this->order_follow_id = $orderFollowId;
    }

    public function getNoShipping() : bool{
        return $this->no_shipping;
    }

    public function setNoShipping(bool $noShipping){
        $this->no_shipping = $noShipping;
    }

    public function getAsdpAds() : string{
        return $this->asdp_ads;
    }

    public function setAsdpAds(string $asdpAds){
        $this->asdp_ads = $asdpAds;
    }

    public function getObTag() : string{
        return $this->ob_tag;
    }

    public function setObTag(string $obTag){
        $this->ob_tag = $obTag;
    }

    public function getAid() : string{
        return $this->aid;
    }

    public function setAid(string $aid){
        $this->aid = $aid;
    }

    public function getGeneralNewPresell() : bool{
        return $this->general_new_presell;
    }

    public function setGeneralNewPresell(bool $generalNewPresell){
        $this->general_new_presell = $generalNewPresell;
    }

    public function getDrugRegister() : string{
        return $this->drug_register;
    }

    public function setDrugRegister(string $drugRegister){
        $this->drug_register = $drugRegister;
    }

    public function getStepPayDetails() : array{
        return $this->step_pay_details;
    }

    public function setStepPayDetails(array $stepPayDetails){
        $this->step_pay_details = $stepPayDetails;
    }

    public function getAgreeRefundChecks() : array{
        return $this->agree_refund_checks;
    }

    public function setAgreeRefundChecks(array $agreeRefundChecks){
        $this->agree_refund_checks = $agreeRefundChecks;
    }

    public function getAddressDetails() : array{
        return $this->address_details;
    }

    public function setAddressDetails(array $addressDetails){
        $this->address_details = $addressDetails;
    }

    public function getStageAddressType() : string{
        return $this->stage_address_type;
    }

    public function setStageAddressType(string $stageAddressType){
        $this->stage_address_type = $stageAddressType;
    }

    public function getOgId() : string{
        return $this->og_id;
    }

    public function setOgId(string $ogId){
        $this->og_id = $ogId;
    }

    public function getPromiseSignTime() : string{
        return $this->promise_sign_time;
    }

    public function setPromiseSignTime(string $promiseSignTime){
        $this->promise_sign_time = $promiseSignTime;
    }

    public function getTmallCouponFee() : int{
        return $this->tmall_coupon_fee;
    }

    public function setTmallCouponFee(int $tmallCouponFee){
        $this->tmall_coupon_fee = $tmallCouponFee;
    }

    public function getDeliveryPlan() : array{
        return $this->delivery_plan;
    }

    public function setDeliveryPlan(array $deliveryPlan){
        $this->delivery_plan = $deliveryPlan;
    }

    public function getOmnichannelParam() : string{
        return $this->omnichannel_param;
    }

    public function setOmnichannelParam(string $omnichannelParam){
        $this->omnichannel_param = $omnichannelParam;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getOuid() : string{
        return $this->ouid;
    }

    public function setOuid(string $ouid){
        $this->ouid = $ouid;
    }

    public function getIsCycleBuy() : bool{
        return $this->is_cycle_buy;
    }

    public function setIsCycleBuy(bool $isCycleBuy){
        $this->is_cycle_buy = $isCycleBuy;
    }

    public function getScenarioGroup() : string{
        return $this->scenario_group;
    }

    public function setScenarioGroup(string $scenarioGroup){
        $this->scenario_group = $scenarioGroup;
    }

    public function getPlayType() : string{
        return $this->play_type;
    }

    public function setPlayType(string $playType){
        $this->play_type = $playType;
    }

    public function getIsForceDc() : bool{
        return $this->is_force_dc;
    }

    public function setIsForceDc(bool $isForceDc){
        $this->is_force_dc = $isForceDc;
    }

    public function getCombineLogisticsDetails() : array{
        return $this->combine_logistics_details;
    }

    public function setCombineLogisticsDetails(array $combineLogisticsDetails){
        $this->combine_logistics_details = $combineLogisticsDetails;
    }

    public function getIdentifyInfo() : TaobaoTradeFullinfoGetIdentifyInfo{
        return $this->identify_info;
    }

    public function setIdentifyInfo(TaobaoTradeFullinfoGetIdentifyInfo $identifyInfo){
        $this->identify_info = $identifyInfo;
    }

    public function getLogisticsConsignInfo() : array{
        return $this->logistics_consign_info;
    }

    public function setLogisticsConsignInfo(array $logisticsConsignInfo){
        $this->logistics_consign_info = $logisticsConsignInfo;
    }

    public function getLogisticsModifyInfo() : array{
        return $this->logistics_modify_info;
    }

    public function setLogisticsModifyInfo(array $logisticsModifyInfo){
        $this->logistics_modify_info = $logisticsModifyInfo;
    }

    public function getPriorityConsignTime() : string{
        return $this->priority_consign_time;
    }

    public function setPriorityConsignTime(string $priorityConsignTime){
        $this->priority_consign_time = $priorityConsignTime;
    }

    public function getLogisticsAgreement() : TaobaoTradeFullinfoGetLogisticsAgreement{
        return $this->logistics_agreement;
    }

    public function setLogisticsAgreement(TaobaoTradeFullinfoGetLogisticsAgreement $logisticsAgreement){
        $this->logistics_agreement = $logisticsAgreement;
    }

    public function getRealNameAuthStatus() : string{
        return $this->real_name_auth_status;
    }

    public function setRealNameAuthStatus(string $realNameAuthStatus){
        $this->real_name_auth_status = $realNameAuthStatus;
    }

    public function getThirdPartyCustomsDeclaration() : string{
        return $this->third_party_customs_declaration;
    }

    public function setThirdPartyCustomsDeclaration(string $thirdPartyCustomsDeclaration){
        $this->third_party_customs_declaration = $thirdPartyCustomsDeclaration;
    }

    public function getReceiptType() : string{
        return $this->receipt_type;
    }

    public function setReceiptType(string $receiptType){
        $this->receipt_type = $receiptType;
    }

    public function getReceiptRelIds() : array{
        return $this->receipt_rel_ids;
    }

    public function setReceiptRelIds(array $receiptRelIds){
        $this->receipt_rel_ids = $receiptRelIds;
    }

    public function getSellerFlagTag() : string{
        return $this->seller_flag_tag;
    }

    public function setSellerFlagTag(string $sellerFlagTag){
        $this->seller_flag_tag = $sellerFlagTag;
    }

    public function getSellerOpenUid() : string{
        return $this->seller_open_uid;
    }

    public function setSellerOpenUid(string $sellerOpenUid){
        $this->seller_open_uid = $sellerOpenUid;
    }

    public function getEducationReceiverMobile() : string{
        return $this->education_receiver_mobile;
    }

    public function setEducationReceiverMobile(string $educationReceiverMobile){
        $this->education_receiver_mobile = $educationReceiverMobile;
    }

    public function getIsGfjy() : bool{
        return $this->is_gfjy;
    }

    public function setIsGfjy(bool $isGfjy){
        $this->is_gfjy = $isGfjy;
    }


}

