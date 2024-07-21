<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemAddRequest {

    /**
        商品上传后的状态。可选值:onsale(出售中),instock(仓库中);默认值:onsale
     **/
    private $approveStatus;

    /**
        发布类型。可选值:fixed(一口价),auction(拍卖)。B商家不能发布拍卖商品，而且拍卖商品是没有SKU的。拍卖商品发布时需要附加拍卖商品信息：拍卖类型(paimai_info.mode，拍卖类型包括三种：增价拍[1]，荷兰拍[2]以及降价拍[3])，商品数量(num)，起拍价(price)，价格幅度(increament)，保证金(paimai_info.deposit)。另外拍卖商品支持自定义销售周期，通过paimai_info.valid_hour和paimai_info.valid_minute来指定。对于降价拍来说需要设置降价周期(paimai_info.interval)和拍卖保留价(paimai_info.reserve)。注意：通过taobao.item.get接口获取拍卖信息时，会返回除了valid_hour和valid_minute之外的所有拍卖信息。
     **/
    private $type;

    /**
        自动重发。可选值:true,false;默认值:false(不重发)
     **/
    private $autoRepost;

    /**
        叶子类目id
     **/
    private $cid;

    /**
        宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
     **/
    private $desc;

    /**
        有效期。可选值:7,14;单位:天;默认值:14
     **/
    private $validThru;

    /**
        平邮费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:5.07，表示:5元7分. 注:post_fee,express_fee,ems_fee需要一起填写
     **/
    private $postFee;

    /**
        快递费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:15.07，表示:15元7分
     **/
    private $expressFee;

    /**
        ems费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:25.07，表示:25元7分
     **/
    private $emsFee;

    /**
        是否有保修。可选值:true,false;默认值:false(不保修)
     **/
    private $hasWarranty;

    /**
        是否有发票。可选值:true,false (商城卖家此字段必须为true);默认值:false(无发票)
     **/
    private $hasInvoice;

    /**
        加价(降价)幅度。如果为0，代表系统代理幅度。对于增价拍和荷兰拍来说是加价幅度，对于降价拍来说是降价幅度。
     **/
    private $increment;

    /**
        商品属性列表。格式:pid:vid;pid:vid。属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。 如果该类目下面没有属性，可以不用填写。如果有属性，必选属性必填，其他非必选属性可以选择不填写.属性不能超过35对。所有属性加起来包括分割符不能超过549字节，单个属性没有限制。 如果有属性是可输入的话，则用字段input_str填入属性的值
     **/
    private $props;

    /**
        商品数量。取值范围:0-900000000的整数。且需要等于Sku所有数量的和。拍卖商品中增加拍只能为1，荷兰拍要在[2,500)范围内。
     **/
    private $num;

    /**
        运费承担方式。可选值:seller（卖家承担）,buyer(买家承担);默认值:seller。卖家承担不用设置邮费和postage_id.买家承担的时候，必填邮费和postage_id 如果用户设置了运费模板会优先使用运费模板，否则要同步设置邮费（post_fee,express_fee,ems_fee）
     **/
    private $freightPayer;

    /**
        商品所属的店铺类目列表。按逗号分隔。结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。
     **/
    private $sellerCids;

    /**
        橱窗推荐。可选值:true,false;默认值:false(不推荐)
     **/
    private $hasShowcase;

    /**
        定时上架时间。(时间格式：yyyy-MM-dd HH:mm:ss)
     **/
    private $listTime;

    /**
        新旧程度。可选值：new(新)，second(二手)。B商家不能发布二手商品。如果是二手商品，特定类目下属性里面必填新旧成色属性
     **/
    private $stuffStatus;

    /**
        宝贝标题。不能超过30字符，受违禁词控制。天猫图书管控类目最大允许120字符；
     **/
    private $title;

    /**
        商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内。拍卖商品对应的起拍价。
     **/
    private $price;

    /**
        支持会员打折。可选值:true,false;默认值:false(不打折)
     **/
    private $hasDiscount;

    /**
        商品外部编码，该字段的最大长度是64个字节
     **/
    private $outerId;

    /**
        宝贝所属的运费模板ID。取值范围：整数且必须是该卖家的运费模板的ID（可通过taobao.delivery.template.get获得当前会话用户的所有邮费模板）
     **/
    private $postageId;

    /**
        商品所属的产品ID(B商家发布商品需要用)
     **/
    private $productId;

    /**
        是否在淘宝上显示（如果传FALSE，则在淘宝主站无法显示该商品）
     **/
    private $isTaobao;

    /**
        是否在外店显示
     **/
    private $isEx;

    /**
        是否是3D
     **/
    private $is3D;

    /**
        商品的积分返点比例。如:5,表示:返点比例0.5%. 注意：返点比例必须是>0的整数，而且最大是90,即为9%.B商家在发布非虚拟商品时，返点必须是 5的倍数，即0.5%的倍数。其它是1的倍数，即0.1%的倍数。无名良品商家发布商品时，复用该字段记录积分宝返点比例，返点必须是对应类目的返点步长的整数倍，默认是5，即0.5%。注意此时该字段值依旧必须是>0的整数，最高值不超过500，即50%
     **/
    private $auctionPoint;

    /**
        属性值别名。如pid:vid:别名;pid1:vid1:别名1 ，其中：pid是属性id vid是属性值id。总长度不超过800个字符，如"123:333:你好"，引号内的是10个字符。
     **/
    private $propertyAlias;

    /**
        商品文字的字符集。繁体传入"zh_HK"，简体传入"zh_CN"，不传默认为简体
     **/
    private $lang;

    /**
        （推荐）商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
     **/
    private $picPath;

    /**
        商品主图片。类型:JPG,GIF;最大长度:3M。（推荐使用pic_path字段，先把图片上传到卖家图片空间）
     **/
    private $image;

    /**
        代充商品类型。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型： no_mark(不做类型标记) time_card(点卡软件代充) fee_card(话费软件代充)
     **/
    private $autoFill;

    /**
        是否承诺退换货服务!虚拟商品无须设置此项!
     **/
    private $sellPromise;

    /**
        此为货到付款运费模板的ID，对应的JAVA类型是long,如果COD卖家应用了货到付款运费模板，此值要进行设置。该字段已经废弃
     **/
    private $codPostageId;

    /**
        实物闪电发货
     **/
    private $isLightningConsignment;

    /**
        商品的重量(商超卖家专用字段)
     **/
    private $weight;

    /**
        宝贝形态:1代表电子券;0或其他代表实物
     **/
    private $shape;

    /**
        商品是否为新品。只有在当前类目开通新品,并且当前用户拥有该类目下发布新品权限时才能设置is_xinpin为true，否则设置true后会返回错误码:isv.invalid-permission:add-xinpin。同时只有一口价全新的宝贝才能设置为新品，否则会返回错误码：isv.invalid-parameter:xinpin。不设置该参数值或设置为false效果一致。
     **/
    private $isXinpin;

    /**
        商品是否支持拍下减库存:1支持;2取消支持(付款减库存);0(默认)不更改集市卖家默认拍下减库存;商城卖家默认付款减库存
     **/
    private $subStock;

    /**
        宝贝特征值，格式为：【key1:value1;key2:value2;key3:value3;】，key和value用【:】分隔，key&value之间用【;】分隔，只有在Top支持的特征值才能保存到宝贝上，目前支持的Key列表为：mysize_tp
     **/
    private $features;

    /**
        景区门票类宝贝发布时候，当卖家签订了支付宝代扣协议时候，需要选择支付方式：全额支付和订金支付。当scenic_ticket_pay_way为1时表示全额支付，为2时表示订金支付
     **/
    private $scenicTicketPayWay;

    /**
        景区门票在选择订金支付时候，需要交的预订费。传入的值是1到20之间的数值，小数点后最多可以保留两位（多余的部分将做四舍五入的处理）。这个数值表示的是预订费的比例，最终的预订费为 scenic_ticket_book_cost乘一口价除以100
     **/
    private $scenicTicketBookCost;

    /**
        全球购商品采购地（库存类型），有两种库存类型：现货和代购参数值为1时代表现货，值为2时代表代购。注意：使用时请与 全球购商品采购地（地区/国家）配合使用
     **/
    private $globalStockType;

    /**
        全球购商品采购地（地区/国家）,默认值只在全球购商品采购地（库存类型选择情况生效），地区国家值请填写法定的国家名称，类如（美国, 香港, 日本, 英国, 新西兰, 德国, 韩国, 荷兰, 法国, 意大利, 台湾, 澳门, 加拿大, 瑞士, 西班牙, 泰国, 新加坡, 马来西亚, 菲律宾），不要使用其他
     **/
    private $globalStockCountry;

    /**
        全球购商品发货地，发货地现在有两种类型：“国内”和“海外及港澳台”，参数值为1时代表“国内”，值为2时代表“海外及港澳台”，默认为国内。注意：卖家必须已经签署并启用“海外直邮”合约，才能选择发货地为“海外及港澳台”
     **/
    private $globalStockDeliveryPlace;

    /**
        全球购商品卖家包税承诺，当值为true时，代表卖家承诺包税。注意：请与“全球购商品发货地”配合使用，包税承诺必须满足：1、发货地为海外及港澳台 2、卖家已经签署并启用“包税合约”合约
     **/
    private $globalStockTaxFreePromise;

    /**
        商品的重量，用于按重量计费的运费模板。注意：单位为kg。只能传入数值类型（包含小数），不能带单位，单位默认为kg。
     **/
    private $itemWeight;

    /**
        表示商品的体积，如果需要使用按体积计费的运费模板，一定要设置这个值。该值的单位为立方米（m3），如果是其他单位，请转换成成立方米。该值支持两种格式的设置：格式1：bulk:3,单位为立方米(m3),表示直接设置为商品的体积。格式2：length:10;breadth:10;height:10，单位为米（m）。体积和长宽高都支持小数类型。在传入体积或长宽高时候，不能带单位。体积的单位默认为立方米（m3），长宽高的单位默认为米(m)该值支持两种格式的设置：格式1：bulk:3,单位为立方米(m3),表示直接设置为商品的体积。格式2：length:10;breadth:10;height:10，单位为米（m）
     **/
    private $itemSize;

    /**
        针对当前商品的自定义属性值，目前是针对销售属性值自定义的，所以调用方需要把自定义属性值对应的虚拟属性值ID（负整数，例如例子中的 -1和-2）像标准属性值值的id一样设置到SKU上，如果自定义属性值有属性值图片，也要设置到属性图片上
     **/
    private $inputCustomCpv;

    /**
        针对当前商品的标准属性值的补充说明，让买家更加了解商品信息减少交易纠纷
     **/
    private $cpvMemo;

    /**
        是否支持定制市场 true代表支持，false代表支持,如果为空代表与之前保持不变不会修改
     **/
    private $supportCustomMade;

    /**
        定制工具Id如果支持定制市场，这个值不填写，就用之前的定制工具Id，之前的定制工具Id没有值就默认为-1
     **/
    private $customMadeTypeId;

    /**
        该宝贝是否支持【7天无理由退货】，卖家选择的值只是一个因素，最终以类目和选择的属性条件来确定是否支持7天。填入字符0，表示不支持；未填写或填人字符1，表示支持7天无理由退货；
     **/
    private $newprepay;

    /**
        商品条形码
     **/
    private $barcode;

    /**
        商品卖点信息，最长150个字符。天猫商家和集市卖家都可用。
     **/
    private $sellPoint;

    /**
        商品资质信息
     **/
    private $qualification;

    /**
        汽车O2O绑定线下服务标记，如不为空，表示关联服务，否则，不关联服务。
     **/
    private $o2oBindService;

    /**
        忽略警告提示.
     **/
    private $ignorewarning;

    /**
        售后说明模板id
     **/
    private $afterSaleId;

    /**
        基础色数据，淘宝不使用
     **/
    private $changeProp;

    /**
        已废弃
     **/
    private $descModules;

    /**
        是否是线下商品。1：线上商品（默认值）；2：线上或线下商品；3：线下商品。
     **/
    private $isOffline;

    /**
        无线的宝贝描述
     **/
    private $wirelessDesc;

    /**
        天猫超市扩展字段，天猫超市专用。
     **/
    private $chaoshiExtendsInfo;

    /**
        手机类目spu 优化，信息确认字段
     **/
    private $spuConfirm;

    /**
        主图视频id
     **/
    private $videoId;

    /**
        主图视频互动信息id，必须填写主图视频id才能有互动信息id
     **/
    private $interactiveId;

    /**
        租赁扩展信息
     **/
    private $leaseExtendsInfo;

    /**
        仅淘小铺卖家需要。佣金比例(15.3对应的佣金比例为15.3%).只支持小数点后1位。多余的位数四舍五入(15.32会保存为15.3%
     **/
    private $brokerage;

    /**
        业务身份编码。淘小铺编码为"taobao-taoxiaopu"
     **/
    private $bizCode;

    /**
        此字段已经废弃，不再使用
     **/
    private $imageUrls;

    /**
        用户自行输入的类目属性ID串，结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
     **/
    private $inputPids;

    /**
        用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5,Nike乔丹鞋;乔丹系列;乔丹鞋系列;乔丹鞋系列;json5”，多个自定义属性用','分割，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过3999字节。此处不可以使用“其他”、“其它”和“其她”这三个词。
     **/
    private $inputStr;

    /**
        更新的sku的属性串，调用taobao.itemprops.get获取。格式:pid1:vid;pid2:vid,多个sku属性之间用逗号分隔。该字段内的属性需要在props字段同时包含。如果新增商品包含了sku，则此字段一定要传入,字段长度要控制在512个字节以内。
     **/
    private $skuProperties;

    /**
        Sku的数量串，结构如：num1,num2,num3 如：2,3
     **/
    private $skuQuantities;

    /**
        Sku的价格串，结构如：10.00,5.00,… 精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    private $skuPrices;

    /**
        Sku的外部id串，结构如：1234,1342,… sku_properties, sku_quantities, sku_prices, sku_outer_ids在输入数据时要一一对应，如果没有sku_outer_ids也要写上这个参数，入参是","(这个是两个sku的示列，逗号数应该是sku个数减1)；该参数最大长度是512个字节
     **/
    private $skuOuterIds;

    /**
        sku层面的条形码，多个SKU情况，与SKU价格库存格式类似，用逗号分隔
     **/
    private $skuBarcode;

    /**
        此参数暂时不起作用
     **/
    private $skuSpecIds;

    /**
        此参数暂时不起作用
     **/
    private $skuDeliveryTimes;

    /**
        家装建材类目，商品SKU的长度，正整数，单位为cm，部分类目必选。 数据和SKU一一对应，用,分隔，如：20,30,30
     **/
    private $skuHdLength;

    /**
        家装建材类目，商品SKU的高度，单位为cm，部分类目必选。 天猫和淘宝格式不同。天猫：可选值为："0-15", "15-25", "25-50", "50-60", "60-80", "80-120", "120-160", "160-200"。 数据和SKU一一对应，用,分隔，格式如：15-25,25-50,25-50。 淘宝：正整数，单位为cm,格式如：20,30,30
     **/
    private $skuHdHeight;

    /**
        家装建材类目，商品SKU的灯头数量，正整数，大于等于3，部分类目必选。天猫商家专用。 数据和SKU一一对应，用,分隔，如：3,5,7
     **/
    private $skuHdLampQuantity;

    /**
        所在地省份。如浙江
     **/
    private $locationState;

    /**
        所在地城市。如杭州 。
     **/
    private $locationCity;

    /**
        生产许可证号
     **/
    private $foodSecurityPrdLicenseNo;

    /**
        产品标准号
     **/
    private $foodSecurityDesignCode;

    /**
        厂名
     **/
    private $foodSecurityFactory;

    /**
        厂址
     **/
    private $foodSecurityFactorySite;

    /**
        厂家联系方式
     **/
    private $foodSecurityContact;

    /**
        配料表
     **/
    private $foodSecurityMix;

    /**
        储藏方法
     **/
    private $foodSecurityPlanStorage;

    /**
        保质期，默认有单位，传入数字
     **/
    private $foodSecurityPeriod;

    /**
        食品添加剂
     **/
    private $foodSecurityFoodAdditive;

    /**
        供货商
     **/
    private $foodSecuritySupplier;

    /**
        生产开始日期，格式必须为yyyy-MM-dd
     **/
    private $foodSecurityProductDateStart;

    /**
        生产结束日期,格式必须为yyyy-MM-dd
     **/
    private $foodSecurityProductDateEnd;

    /**
        进货开始日期，要在生产日期之后，格式必须为yyyy-MM-dd
     **/
    private $foodSecurityStockDateStart;

    /**
        进货结束日期，要在生产日期之后，格式必须为yyyy-MM-dd
     **/
    private $foodSecurityStockDateEnd;

    /**
        健字号，保健品/膳食营养补充剂 这个类目下特有的信息，此类目下无需填写生产许可证编号（QS），如果填写了生产许可证编号（QS）将被忽略不保存；保存宝贝时，标题前会自动加上健字号产品名称一起作为宝贝标题；
     **/
    private $foodSecurityHealthProductNo;

    /**
        本地生活电子交易凭证业务，目前此字段只涉及到的信息为有效期;如果有效期为起止日期类型，此值为2012-08-06,2012-08-16如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为15
     **/
    private $localityLifeExpirydate;

    /**
        网点ID
     **/
    private $localityLifeNetworkId;

    /**
        码商信息，格式为 码商id:nick
     **/
    private $localityLifeMerchant;

    /**
        核销打款 1代表核销打款 0代表非核销打款
     **/
    private $localityLifeVerification;

    /**
        退款比例，百分比%前的数字,1-100的正整数值
     **/
    private $localityLifeRefundRatio;

    /**
        电子凭证售中自动退款比例，百分比%前的数字，介于1-100之间的整数
     **/
    private $localityLifeOnsaleAutoRefundRatio;

    /**
        发布电子凭证宝贝时候表示是否使用邮寄 0: 代表不使用邮寄； 1：代表使用邮寄；如果不设置这个值，代表不使用邮寄
     **/
    private $localityLifeChooseLogis;

    /**
        退款码费承担方。发布电子凭证宝贝的时候会增加“退款码费承担方”配置项，可选填：(1)s（卖家承担） (2)b(买家承担)
     **/
    private $localityLifeRefundmafee;

    /**
        预约门店是否支持门店自提,1:是
     **/
    private $localityLifeObs;

    /**
        电子凭证业务属性，数据字典是: 1、is_card:1 (暂时不用) 2、consume_way:4 （1 串码 ，4 身份证）3、consume_midmnick ：(核销放行账号:用户id-用户名，支持多个，用逗号分隔,例如 1234-测试账号35,1345-测试账号56）4、market:eticket (电子凭证商品标记) 5、has_pos:1 (1 表示商品配置线下门店，在detail上进行展示 ，没有或者其他值只不展示)格式是: k1:v2;k2:v2;........ 如：has_pos:1;market:eticket;consume_midmnick:901409638-OPPO;consume_way:4
     **/
    private $localityLifeEticket;

    /**
        新版电子凭证字段
     **/
    private $localityLifeVersion;

    /**
        新版电子凭证包 id
     **/
    private $localityLifePackageid;

    /**
        拍卖商品选择的拍卖类型，拍卖类型包括三种：增价拍(1)，荷兰拍(2)和降价拍(3)。
     **/
    private $paimaiInfoMode;

    /**
        拍卖宝贝的保证金。对于增价拍和荷兰拍来说保证金有两种模式：淘宝默认模式（首次出价金额的10%），自定义固定保证金（固定冻结金额只能输入不超过30万的正整数），并且保证金只冻结1次。对于降价拍来说保证金只有淘宝默认的（竞拍价格的10% * 竞拍数量），并且每次出价都需要冻结保证金。对于拍卖宝贝来说，保证金是必须的，但是默认使用淘宝默认保证金模式，只有用户需要使用自定义固定保证金的时候才需要使用到这个参数，如果该参数不传或传入0则代表使用默认。
     **/
    private $paimaiInfoDeposit;

    /**
        降价拍宝贝的降价周期(分钟)。降价拍宝贝的价格每隔paimai_info.interval时间会下降一次increment。
     **/
    private $paimaiInfoInterval;

    /**
        降价拍宝贝的保留价。对于降价拍来说，paimai_info.reserve必须大于0，且小于price-increment，而且（price-paimai_info.reserve）/increment的计算结果必须为整数
     **/
    private $paimaiInfoReserve;

    /**
        自定义销售周期的小时数。拍卖宝贝可以自定义销售周期，这里指定销售周期的小时数。注意，该参数只作为输入参数，不能通过taobao.item.get接口获取。
     **/
    private $paimaiInfoValidHour;

    /**
        自定义销售周期的分钟数。拍卖宝贝可以自定义销售周期，这里是指定销售周期的分钟数。自定义销售周期的小时数。拍卖宝贝可以自定义销售周期，这里指定销售周期的小时数。注意，该参数只作为输入参数，不能通过taobao.item.get接口获取。
     **/
    private $paimaiInfoValidMinute;

    /**
        参考价。该商品订单首次支付价格为 订金 价格，用户可根据 参考价 估算全款。详见说明：http://bangpai.taobao.com/group/thread/15031186-303287205.htm
     **/
    private $msPaymentReferencePrice;

    /**
        尾款可抵扣金额。详见说明：http://bangpai.taobao.com/group/thread/15031186-303287205.htm
     **/
    private $msPaymentVoucherPrice;

    /**
        订金。在“线上付订金线下付尾款”模式中，有订金、尾款可抵扣金额和参考价，三者需要同时填写。该商品订单首次支付价格为 订金 价格，用户可根据 参考价 估算全款。该模式有别于“一口价”付款方式，针对一个商品，只能选择两种付款方式中的一种，其适用于家装、二手车等场景。详见说明：http://bangpai.taobao.com/group/thread/15031186-303287205.htm
     **/
    private $msPaymentPrice;

    /**
        设置是否使用发货时间，商品级别，sku级别
     **/
    private $deliveryTimeNeedDeliveryTime;

    /**
        发货时间类型：绝对发货时间或者相对发货时间
     **/
    private $deliveryTimeDeliveryTimeType;

    /**
        商品级别设置的发货时间。设置了商品级别的发货时间，相对发货时间，则填写相对发货时间的天数（大于3）；绝对发货时间，则填写yyyy-mm-dd格式，如2013-11-11
     **/
    private $deliveryTimeDeliveryTime;


    public function getApproveStatus() : string{
        return $this->approveStatus;
    }

    public function setApproveStatus(string $approveStatus){
        $this->approveStatus = $approveStatus;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getAutoRepost() : bool{
        return $this->autoRepost;
    }

    public function setAutoRepost(bool $autoRepost){
        $this->autoRepost = $autoRepost;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getValidThru() : int{
        return $this->validThru;
    }

    public function setValidThru(int $validThru){
        $this->validThru = $validThru;
    }

    public function getPostFee() : string{
        return $this->postFee;
    }

    public function setPostFee(string $postFee){
        $this->postFee = $postFee;
    }

    public function getExpressFee() : string{
        return $this->expressFee;
    }

    public function setExpressFee(string $expressFee){
        $this->expressFee = $expressFee;
    }

    public function getEmsFee() : string{
        return $this->emsFee;
    }

    public function setEmsFee(string $emsFee){
        $this->emsFee = $emsFee;
    }

    public function getHasWarranty() : bool{
        return $this->hasWarranty;
    }

    public function setHasWarranty(bool $hasWarranty){
        $this->hasWarranty = $hasWarranty;
    }

    public function getHasInvoice() : bool{
        return $this->hasInvoice;
    }

    public function setHasInvoice(bool $hasInvoice){
        $this->hasInvoice = $hasInvoice;
    }

    public function getIncrement() : string{
        return $this->increment;
    }

    public function setIncrement(string $increment){
        $this->increment = $increment;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getFreightPayer() : string{
        return $this->freightPayer;
    }

    public function setFreightPayer(string $freightPayer){
        $this->freightPayer = $freightPayer;
    }

    public function getSellerCids() : string{
        return $this->sellerCids;
    }

    public function setSellerCids(string $sellerCids){
        $this->sellerCids = $sellerCids;
    }

    public function getHasShowcase() : bool{
        return $this->hasShowcase;
    }

    public function setHasShowcase(bool $hasShowcase){
        $this->hasShowcase = $hasShowcase;
    }

    public function getListTime() : string{
        return $this->listTime;
    }

    public function setListTime(string $listTime){
        $this->listTime = $listTime;
    }

    public function getStuffStatus() : string{
        return $this->stuffStatus;
    }

    public function setStuffStatus(string $stuffStatus){
        $this->stuffStatus = $stuffStatus;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getHasDiscount() : bool{
        return $this->hasDiscount;
    }

    public function setHasDiscount(bool $hasDiscount){
        $this->hasDiscount = $hasDiscount;
    }

    public function getOuterId() : string{
        return $this->outerId;
    }

    public function setOuterId(string $outerId){
        $this->outerId = $outerId;
    }

    public function getPostageId() : int{
        return $this->postageId;
    }

    public function setPostageId(int $postageId){
        $this->postageId = $postageId;
    }

    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getIsTaobao() : bool{
        return $this->isTaobao;
    }

    public function setIsTaobao(bool $isTaobao){
        $this->isTaobao = $isTaobao;
    }

    public function getIsEx() : bool{
        return $this->isEx;
    }

    public function setIsEx(bool $isEx){
        $this->isEx = $isEx;
    }

    public function getIs3D() : bool{
        return $this->is3D;
    }

    public function setIs3D(bool $is3D){
        $this->is3D = $is3D;
    }

    public function getAuctionPoint() : int{
        return $this->auctionPoint;
    }

    public function setAuctionPoint(int $auctionPoint){
        $this->auctionPoint = $auctionPoint;
    }

    public function getPropertyAlias() : string{
        return $this->propertyAlias;
    }

    public function setPropertyAlias(string $propertyAlias){
        $this->propertyAlias = $propertyAlias;
    }

    public function getLang() : string{
        return $this->lang;
    }

    public function setLang(string $lang){
        $this->lang = $lang;
    }

    public function getPicPath() : string{
        return $this->picPath;
    }

    public function setPicPath(string $picPath){
        $this->picPath = $picPath;
    }

    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function getAutoFill() : string{
        return $this->autoFill;
    }

    public function setAutoFill(string $autoFill){
        $this->autoFill = $autoFill;
    }

    public function getSellPromise() : bool{
        return $this->sellPromise;
    }

    public function setSellPromise(bool $sellPromise){
        $this->sellPromise = $sellPromise;
    }

    public function getCodPostageId() : int{
        return $this->codPostageId;
    }

    public function setCodPostageId(int $codPostageId){
        $this->codPostageId = $codPostageId;
    }

    public function getIsLightningConsignment() : bool{
        return $this->isLightningConsignment;
    }

    public function setIsLightningConsignment(bool $isLightningConsignment){
        $this->isLightningConsignment = $isLightningConsignment;
    }

    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getShape() : string{
        return $this->shape;
    }

    public function setShape(string $shape){
        $this->shape = $shape;
    }

    public function getIsXinpin() : bool{
        return $this->isXinpin;
    }

    public function setIsXinpin(bool $isXinpin){
        $this->isXinpin = $isXinpin;
    }

    public function getSubStock() : int{
        return $this->subStock;
    }

    public function setSubStock(int $subStock){
        $this->subStock = $subStock;
    }

    public function getFeatures() : string{
        return $this->features;
    }

    public function setFeatures(string $features){
        $this->features = $features;
    }

    public function getScenicTicketPayWay() : int{
        return $this->scenicTicketPayWay;
    }

    public function setScenicTicketPayWay(int $scenicTicketPayWay){
        $this->scenicTicketPayWay = $scenicTicketPayWay;
    }

    public function getScenicTicketBookCost() : string{
        return $this->scenicTicketBookCost;
    }

    public function setScenicTicketBookCost(string $scenicTicketBookCost){
        $this->scenicTicketBookCost = $scenicTicketBookCost;
    }

    public function getGlobalStockType() : string{
        return $this->globalStockType;
    }

    public function setGlobalStockType(string $globalStockType){
        $this->globalStockType = $globalStockType;
    }

    public function getGlobalStockCountry() : string{
        return $this->globalStockCountry;
    }

    public function setGlobalStockCountry(string $globalStockCountry){
        $this->globalStockCountry = $globalStockCountry;
    }

    public function getGlobalStockDeliveryPlace() : string{
        return $this->globalStockDeliveryPlace;
    }

    public function setGlobalStockDeliveryPlace(string $globalStockDeliveryPlace){
        $this->globalStockDeliveryPlace = $globalStockDeliveryPlace;
    }

    public function getGlobalStockTaxFreePromise() : bool{
        return $this->globalStockTaxFreePromise;
    }

    public function setGlobalStockTaxFreePromise(bool $globalStockTaxFreePromise){
        $this->globalStockTaxFreePromise = $globalStockTaxFreePromise;
    }

    public function getItemWeight() : string{
        return $this->itemWeight;
    }

    public function setItemWeight(string $itemWeight){
        $this->itemWeight = $itemWeight;
    }

    public function getItemSize() : string{
        return $this->itemSize;
    }

    public function setItemSize(string $itemSize){
        $this->itemSize = $itemSize;
    }

    public function getInputCustomCpv() : string{
        return $this->inputCustomCpv;
    }

    public function setInputCustomCpv(string $inputCustomCpv){
        $this->inputCustomCpv = $inputCustomCpv;
    }

    public function getCpvMemo() : string{
        return $this->cpvMemo;
    }

    public function setCpvMemo(string $cpvMemo){
        $this->cpvMemo = $cpvMemo;
    }

    public function getSupportCustomMade() : bool{
        return $this->supportCustomMade;
    }

    public function setSupportCustomMade(bool $supportCustomMade){
        $this->supportCustomMade = $supportCustomMade;
    }

    public function getCustomMadeTypeId() : string{
        return $this->customMadeTypeId;
    }

    public function setCustomMadeTypeId(string $customMadeTypeId){
        $this->customMadeTypeId = $customMadeTypeId;
    }

    public function getNewprepay() : string{
        return $this->newprepay;
    }

    public function setNewprepay(string $newprepay){
        $this->newprepay = $newprepay;
    }

    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }

    public function getSellPoint() : string{
        return $this->sellPoint;
    }

    public function setSellPoint(string $sellPoint){
        $this->sellPoint = $sellPoint;
    }

    public function getQualification() : string{
        return $this->qualification;
    }

    public function setQualification(string $qualification){
        $this->qualification = $qualification;
    }

    public function getO2oBindService() : bool{
        return $this->o2oBindService;
    }

    public function setO2oBindService(bool $o2oBindService){
        $this->o2oBindService = $o2oBindService;
    }

    public function getIgnorewarning() : string{
        return $this->ignorewarning;
    }

    public function setIgnorewarning(string $ignorewarning){
        $this->ignorewarning = $ignorewarning;
    }

    public function getAfterSaleId() : int{
        return $this->afterSaleId;
    }

    public function setAfterSaleId(int $afterSaleId){
        $this->afterSaleId = $afterSaleId;
    }

    public function getChangeProp() : string{
        return $this->changeProp;
    }

    public function setChangeProp(string $changeProp){
        $this->changeProp = $changeProp;
    }

    public function getDescModules() : string{
        return $this->descModules;
    }

    public function setDescModules(string $descModules){
        $this->descModules = $descModules;
    }

    public function getIsOffline() : string{
        return $this->isOffline;
    }

    public function setIsOffline(string $isOffline){
        $this->isOffline = $isOffline;
    }

    public function getWirelessDesc() : string{
        return $this->wirelessDesc;
    }

    public function setWirelessDesc(string $wirelessDesc){
        $this->wirelessDesc = $wirelessDesc;
    }

    public function getChaoshiExtendsInfo() : string{
        return $this->chaoshiExtendsInfo;
    }

    public function setChaoshiExtendsInfo(string $chaoshiExtendsInfo){
        $this->chaoshiExtendsInfo = $chaoshiExtendsInfo;
    }

    public function getSpuConfirm() : bool{
        return $this->spuConfirm;
    }

    public function setSpuConfirm(bool $spuConfirm){
        $this->spuConfirm = $spuConfirm;
    }

    public function getVideoId() : int{
        return $this->videoId;
    }

    public function setVideoId(int $videoId){
        $this->videoId = $videoId;
    }

    public function getInteractiveId() : int{
        return $this->interactiveId;
    }

    public function setInteractiveId(int $interactiveId){
        $this->interactiveId = $interactiveId;
    }

    public function getLeaseExtendsInfo() : string{
        return $this->leaseExtendsInfo;
    }

    public function setLeaseExtendsInfo(string $leaseExtendsInfo){
        $this->leaseExtendsInfo = $leaseExtendsInfo;
    }

    public function getBrokerage() : string{
        return $this->brokerage;
    }

    public function setBrokerage(string $brokerage){
        $this->brokerage = $brokerage;
    }

    public function getBizCode() : string{
        return $this->bizCode;
    }

    public function setBizCode(string $bizCode){
        $this->bizCode = $bizCode;
    }

    public function getImageUrls() : array{
        return $this->imageUrls;
    }

    public function setImageUrls(array $imageUrls){
        $this->imageUrls = $imageUrls;
    }

    public function getInputPids() : array{
        return $this->inputPids;
    }

    public function setInputPids(array $inputPids){
        $this->inputPids = $inputPids;
    }

    public function getInputStr() : array{
        return $this->inputStr;
    }

    public function setInputStr(array $inputStr){
        $this->inputStr = $inputStr;
    }

    public function getSkuProperties() : string{
        return $this->skuProperties;
    }

    public function setSkuProperties(string $skuProperties){
        $this->skuProperties = $skuProperties;
    }

    public function getSkuQuantities() : string{
        return $this->skuQuantities;
    }

    public function setSkuQuantities(string $skuQuantities){
        $this->skuQuantities = $skuQuantities;
    }

    public function getSkuPrices() : string{
        return $this->skuPrices;
    }

    public function setSkuPrices(string $skuPrices){
        $this->skuPrices = $skuPrices;
    }

    public function getSkuOuterIds() : string{
        return $this->skuOuterIds;
    }

    public function setSkuOuterIds(string $skuOuterIds){
        $this->skuOuterIds = $skuOuterIds;
    }

    public function getSkuBarcode() : string{
        return $this->skuBarcode;
    }

    public function setSkuBarcode(string $skuBarcode){
        $this->skuBarcode = $skuBarcode;
    }

    public function getSkuSpecIds() : string{
        return $this->skuSpecIds;
    }

    public function setSkuSpecIds(string $skuSpecIds){
        $this->skuSpecIds = $skuSpecIds;
    }

    public function getSkuDeliveryTimes() : string{
        return $this->skuDeliveryTimes;
    }

    public function setSkuDeliveryTimes(string $skuDeliveryTimes){
        $this->skuDeliveryTimes = $skuDeliveryTimes;
    }

    public function getSkuHdLength() : string{
        return $this->skuHdLength;
    }

    public function setSkuHdLength(string $skuHdLength){
        $this->skuHdLength = $skuHdLength;
    }

    public function getSkuHdHeight() : string{
        return $this->skuHdHeight;
    }

    public function setSkuHdHeight(string $skuHdHeight){
        $this->skuHdHeight = $skuHdHeight;
    }

    public function getSkuHdLampQuantity() : string{
        return $this->skuHdLampQuantity;
    }

    public function setSkuHdLampQuantity(string $skuHdLampQuantity){
        $this->skuHdLampQuantity = $skuHdLampQuantity;
    }

    public function getLocationState() : string{
        return $this->locationState;
    }

    public function setLocationState(string $locationState){
        $this->locationState = $locationState;
    }

    public function getLocationCity() : string{
        return $this->locationCity;
    }

    public function setLocationCity(string $locationCity){
        $this->locationCity = $locationCity;
    }

    public function getFoodSecurityPrdLicenseNo() : string{
        return $this->foodSecurityPrdLicenseNo;
    }

    public function setFoodSecurityPrdLicenseNo(string $foodSecurityPrdLicenseNo){
        $this->foodSecurityPrdLicenseNo = $foodSecurityPrdLicenseNo;
    }

    public function getFoodSecurityDesignCode() : string{
        return $this->foodSecurityDesignCode;
    }

    public function setFoodSecurityDesignCode(string $foodSecurityDesignCode){
        $this->foodSecurityDesignCode = $foodSecurityDesignCode;
    }

    public function getFoodSecurityFactory() : string{
        return $this->foodSecurityFactory;
    }

    public function setFoodSecurityFactory(string $foodSecurityFactory){
        $this->foodSecurityFactory = $foodSecurityFactory;
    }

    public function getFoodSecurityFactorySite() : string{
        return $this->foodSecurityFactorySite;
    }

    public function setFoodSecurityFactorySite(string $foodSecurityFactorySite){
        $this->foodSecurityFactorySite = $foodSecurityFactorySite;
    }

    public function getFoodSecurityContact() : string{
        return $this->foodSecurityContact;
    }

    public function setFoodSecurityContact(string $foodSecurityContact){
        $this->foodSecurityContact = $foodSecurityContact;
    }

    public function getFoodSecurityMix() : string{
        return $this->foodSecurityMix;
    }

    public function setFoodSecurityMix(string $foodSecurityMix){
        $this->foodSecurityMix = $foodSecurityMix;
    }

    public function getFoodSecurityPlanStorage() : string{
        return $this->foodSecurityPlanStorage;
    }

    public function setFoodSecurityPlanStorage(string $foodSecurityPlanStorage){
        $this->foodSecurityPlanStorage = $foodSecurityPlanStorage;
    }

    public function getFoodSecurityPeriod() : string{
        return $this->foodSecurityPeriod;
    }

    public function setFoodSecurityPeriod(string $foodSecurityPeriod){
        $this->foodSecurityPeriod = $foodSecurityPeriod;
    }

    public function getFoodSecurityFoodAdditive() : string{
        return $this->foodSecurityFoodAdditive;
    }

    public function setFoodSecurityFoodAdditive(string $foodSecurityFoodAdditive){
        $this->foodSecurityFoodAdditive = $foodSecurityFoodAdditive;
    }

    public function getFoodSecuritySupplier() : string{
        return $this->foodSecuritySupplier;
    }

    public function setFoodSecuritySupplier(string $foodSecuritySupplier){
        $this->foodSecuritySupplier = $foodSecuritySupplier;
    }

    public function getFoodSecurityProductDateStart() : string{
        return $this->foodSecurityProductDateStart;
    }

    public function setFoodSecurityProductDateStart(string $foodSecurityProductDateStart){
        $this->foodSecurityProductDateStart = $foodSecurityProductDateStart;
    }

    public function getFoodSecurityProductDateEnd() : string{
        return $this->foodSecurityProductDateEnd;
    }

    public function setFoodSecurityProductDateEnd(string $foodSecurityProductDateEnd){
        $this->foodSecurityProductDateEnd = $foodSecurityProductDateEnd;
    }

    public function getFoodSecurityStockDateStart() : string{
        return $this->foodSecurityStockDateStart;
    }

    public function setFoodSecurityStockDateStart(string $foodSecurityStockDateStart){
        $this->foodSecurityStockDateStart = $foodSecurityStockDateStart;
    }

    public function getFoodSecurityStockDateEnd() : string{
        return $this->foodSecurityStockDateEnd;
    }

    public function setFoodSecurityStockDateEnd(string $foodSecurityStockDateEnd){
        $this->foodSecurityStockDateEnd = $foodSecurityStockDateEnd;
    }

    public function getFoodSecurityHealthProductNo() : string{
        return $this->foodSecurityHealthProductNo;
    }

    public function setFoodSecurityHealthProductNo(string $foodSecurityHealthProductNo){
        $this->foodSecurityHealthProductNo = $foodSecurityHealthProductNo;
    }

    public function getLocalityLifeExpirydate() : string{
        return $this->localityLifeExpirydate;
    }

    public function setLocalityLifeExpirydate(string $localityLifeExpirydate){
        $this->localityLifeExpirydate = $localityLifeExpirydate;
    }

    public function getLocalityLifeNetworkId() : string{
        return $this->localityLifeNetworkId;
    }

    public function setLocalityLifeNetworkId(string $localityLifeNetworkId){
        $this->localityLifeNetworkId = $localityLifeNetworkId;
    }

    public function getLocalityLifeMerchant() : string{
        return $this->localityLifeMerchant;
    }

    public function setLocalityLifeMerchant(string $localityLifeMerchant){
        $this->localityLifeMerchant = $localityLifeMerchant;
    }

    public function getLocalityLifeVerification() : string{
        return $this->localityLifeVerification;
    }

    public function setLocalityLifeVerification(string $localityLifeVerification){
        $this->localityLifeVerification = $localityLifeVerification;
    }

    public function getLocalityLifeRefundRatio() : int{
        return $this->localityLifeRefundRatio;
    }

    public function setLocalityLifeRefundRatio(int $localityLifeRefundRatio){
        $this->localityLifeRefundRatio = $localityLifeRefundRatio;
    }

    public function getLocalityLifeOnsaleAutoRefundRatio() : int{
        return $this->localityLifeOnsaleAutoRefundRatio;
    }

    public function setLocalityLifeOnsaleAutoRefundRatio(int $localityLifeOnsaleAutoRefundRatio){
        $this->localityLifeOnsaleAutoRefundRatio = $localityLifeOnsaleAutoRefundRatio;
    }

    public function getLocalityLifeChooseLogis() : string{
        return $this->localityLifeChooseLogis;
    }

    public function setLocalityLifeChooseLogis(string $localityLifeChooseLogis){
        $this->localityLifeChooseLogis = $localityLifeChooseLogis;
    }

    public function getLocalityLifeRefundmafee() : string{
        return $this->localityLifeRefundmafee;
    }

    public function setLocalityLifeRefundmafee(string $localityLifeRefundmafee){
        $this->localityLifeRefundmafee = $localityLifeRefundmafee;
    }

    public function getLocalityLifeObs() : string{
        return $this->localityLifeObs;
    }

    public function setLocalityLifeObs(string $localityLifeObs){
        $this->localityLifeObs = $localityLifeObs;
    }

    public function getLocalityLifeEticket() : string{
        return $this->localityLifeEticket;
    }

    public function setLocalityLifeEticket(string $localityLifeEticket){
        $this->localityLifeEticket = $localityLifeEticket;
    }

    public function getLocalityLifeVersion() : string{
        return $this->localityLifeVersion;
    }

    public function setLocalityLifeVersion(string $localityLifeVersion){
        $this->localityLifeVersion = $localityLifeVersion;
    }

    public function getLocalityLifePackageid() : string{
        return $this->localityLifePackageid;
    }

    public function setLocalityLifePackageid(string $localityLifePackageid){
        $this->localityLifePackageid = $localityLifePackageid;
    }

    public function getPaimaiInfoMode() : int{
        return $this->paimaiInfoMode;
    }

    public function setPaimaiInfoMode(int $paimaiInfoMode){
        $this->paimaiInfoMode = $paimaiInfoMode;
    }

    public function getPaimaiInfoDeposit() : int{
        return $this->paimaiInfoDeposit;
    }

    public function setPaimaiInfoDeposit(int $paimaiInfoDeposit){
        $this->paimaiInfoDeposit = $paimaiInfoDeposit;
    }

    public function getPaimaiInfoInterval() : int{
        return $this->paimaiInfoInterval;
    }

    public function setPaimaiInfoInterval(int $paimaiInfoInterval){
        $this->paimaiInfoInterval = $paimaiInfoInterval;
    }

    public function getPaimaiInfoReserve() : string{
        return $this->paimaiInfoReserve;
    }

    public function setPaimaiInfoReserve(string $paimaiInfoReserve){
        $this->paimaiInfoReserve = $paimaiInfoReserve;
    }

    public function getPaimaiInfoValidHour() : int{
        return $this->paimaiInfoValidHour;
    }

    public function setPaimaiInfoValidHour(int $paimaiInfoValidHour){
        $this->paimaiInfoValidHour = $paimaiInfoValidHour;
    }

    public function getPaimaiInfoValidMinute() : int{
        return $this->paimaiInfoValidMinute;
    }

    public function setPaimaiInfoValidMinute(int $paimaiInfoValidMinute){
        $this->paimaiInfoValidMinute = $paimaiInfoValidMinute;
    }

    public function getMsPaymentReferencePrice() : string{
        return $this->msPaymentReferencePrice;
    }

    public function setMsPaymentReferencePrice(string $msPaymentReferencePrice){
        $this->msPaymentReferencePrice = $msPaymentReferencePrice;
    }

    public function getMsPaymentVoucherPrice() : string{
        return $this->msPaymentVoucherPrice;
    }

    public function setMsPaymentVoucherPrice(string $msPaymentVoucherPrice){
        $this->msPaymentVoucherPrice = $msPaymentVoucherPrice;
    }

    public function getMsPaymentPrice() : string{
        return $this->msPaymentPrice;
    }

    public function setMsPaymentPrice(string $msPaymentPrice){
        $this->msPaymentPrice = $msPaymentPrice;
    }

    public function getDeliveryTimeNeedDeliveryTime() : string{
        return $this->deliveryTimeNeedDeliveryTime;
    }

    public function setDeliveryTimeNeedDeliveryTime(string $deliveryTimeNeedDeliveryTime){
        $this->deliveryTimeNeedDeliveryTime = $deliveryTimeNeedDeliveryTime;
    }

    public function getDeliveryTimeDeliveryTimeType() : string{
        return $this->deliveryTimeDeliveryTimeType;
    }

    public function setDeliveryTimeDeliveryTimeType(string $deliveryTimeDeliveryTimeType){
        $this->deliveryTimeDeliveryTimeType = $deliveryTimeDeliveryTimeType;
    }

    public function getDeliveryTimeDeliveryTime() : string{
        return $this->deliveryTimeDeliveryTime;
    }

    public function setDeliveryTimeDeliveryTime(string $deliveryTimeDeliveryTime){
        $this->deliveryTimeDeliveryTime = $deliveryTimeDeliveryTime;
    }


    public function getApiName() : string {
        return "taobao.item.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->approveStatus)) {
            $requestParam["approve_status"] = TopUtil::convertBasic($this->approveStatus);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        if (!TopUtil::checkEmpty($this->autoRepost)) {
            $requestParam["auto_repost"] = TopUtil::convertBasic($this->autoRepost);
        }

        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->desc)) {
            $requestParam["desc"] = TopUtil::convertBasic($this->desc);
        }

        if (!TopUtil::checkEmpty($this->validThru)) {
            $requestParam["valid_thru"] = TopUtil::convertBasic($this->validThru);
        }

        if (!TopUtil::checkEmpty($this->postFee)) {
            $requestParam["post_fee"] = TopUtil::convertBasic($this->postFee);
        }

        if (!TopUtil::checkEmpty($this->expressFee)) {
            $requestParam["express_fee"] = TopUtil::convertBasic($this->expressFee);
        }

        if (!TopUtil::checkEmpty($this->emsFee)) {
            $requestParam["ems_fee"] = TopUtil::convertBasic($this->emsFee);
        }

        if (!TopUtil::checkEmpty($this->hasWarranty)) {
            $requestParam["has_warranty"] = TopUtil::convertBasic($this->hasWarranty);
        }

        if (!TopUtil::checkEmpty($this->hasInvoice)) {
            $requestParam["has_invoice"] = TopUtil::convertBasic($this->hasInvoice);
        }

        if (!TopUtil::checkEmpty($this->increment)) {
            $requestParam["increment"] = TopUtil::convertBasic($this->increment);
        }

        if (!TopUtil::checkEmpty($this->props)) {
            $requestParam["props"] = TopUtil::convertBasic($this->props);
        }

        if (!TopUtil::checkEmpty($this->num)) {
            $requestParam["num"] = TopUtil::convertBasic($this->num);
        }

        if (!TopUtil::checkEmpty($this->freightPayer)) {
            $requestParam["freight_payer"] = TopUtil::convertBasic($this->freightPayer);
        }

        if (!TopUtil::checkEmpty($this->sellerCids)) {
            $requestParam["seller_cids"] = TopUtil::convertBasic($this->sellerCids);
        }

        if (!TopUtil::checkEmpty($this->hasShowcase)) {
            $requestParam["has_showcase"] = TopUtil::convertBasic($this->hasShowcase);
        }

        if (!TopUtil::checkEmpty($this->listTime)) {
            $requestParam["list_time"] = TopUtil::convertBasic($this->listTime);
        }

        if (!TopUtil::checkEmpty($this->stuffStatus)) {
            $requestParam["stuff_status"] = TopUtil::convertBasic($this->stuffStatus);
        }

        if (!TopUtil::checkEmpty($this->title)) {
            $requestParam["title"] = TopUtil::convertBasic($this->title);
        }

        if (!TopUtil::checkEmpty($this->price)) {
            $requestParam["price"] = TopUtil::convertBasic($this->price);
        }

        if (!TopUtil::checkEmpty($this->hasDiscount)) {
            $requestParam["has_discount"] = TopUtil::convertBasic($this->hasDiscount);
        }

        if (!TopUtil::checkEmpty($this->outerId)) {
            $requestParam["outer_id"] = TopUtil::convertBasic($this->outerId);
        }

        if (!TopUtil::checkEmpty($this->postageId)) {
            $requestParam["postage_id"] = TopUtil::convertBasic($this->postageId);
        }

        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->isTaobao)) {
            $requestParam["is_taobao"] = TopUtil::convertBasic($this->isTaobao);
        }

        if (!TopUtil::checkEmpty($this->isEx)) {
            $requestParam["is_ex"] = TopUtil::convertBasic($this->isEx);
        }

        if (!TopUtil::checkEmpty($this->is3D)) {
            $requestParam["is_3D"] = TopUtil::convertBasic($this->is3D);
        }

        if (!TopUtil::checkEmpty($this->auctionPoint)) {
            $requestParam["auction_point"] = TopUtil::convertBasic($this->auctionPoint);
        }

        if (!TopUtil::checkEmpty($this->propertyAlias)) {
            $requestParam["property_alias"] = TopUtil::convertBasic($this->propertyAlias);
        }

        if (!TopUtil::checkEmpty($this->lang)) {
            $requestParam["lang"] = TopUtil::convertBasic($this->lang);
        }

        if (!TopUtil::checkEmpty($this->picPath)) {
            $requestParam["pic_path"] = TopUtil::convertBasic($this->picPath);
        }

        if (!TopUtil::checkEmpty($this->autoFill)) {
            $requestParam["auto_fill"] = TopUtil::convertBasic($this->autoFill);
        }

        if (!TopUtil::checkEmpty($this->sellPromise)) {
            $requestParam["sell_promise"] = TopUtil::convertBasic($this->sellPromise);
        }

        if (!TopUtil::checkEmpty($this->codPostageId)) {
            $requestParam["cod_postage_id"] = TopUtil::convertBasic($this->codPostageId);
        }

        if (!TopUtil::checkEmpty($this->isLightningConsignment)) {
            $requestParam["is_lightning_consignment"] = TopUtil::convertBasic($this->isLightningConsignment);
        }

        if (!TopUtil::checkEmpty($this->weight)) {
            $requestParam["weight"] = TopUtil::convertBasic($this->weight);
        }

        if (!TopUtil::checkEmpty($this->shape)) {
            $requestParam["shape"] = TopUtil::convertBasic($this->shape);
        }

        if (!TopUtil::checkEmpty($this->isXinpin)) {
            $requestParam["is_xinpin"] = TopUtil::convertBasic($this->isXinpin);
        }

        if (!TopUtil::checkEmpty($this->subStock)) {
            $requestParam["sub_stock"] = TopUtil::convertBasic($this->subStock);
        }

        if (!TopUtil::checkEmpty($this->features)) {
            $requestParam["features"] = TopUtil::convertBasic($this->features);
        }

        if (!TopUtil::checkEmpty($this->scenicTicketPayWay)) {
            $requestParam["scenic_ticket_pay_way"] = TopUtil::convertBasic($this->scenicTicketPayWay);
        }

        if (!TopUtil::checkEmpty($this->scenicTicketBookCost)) {
            $requestParam["scenic_ticket_book_cost"] = TopUtil::convertBasic($this->scenicTicketBookCost);
        }

        if (!TopUtil::checkEmpty($this->globalStockType)) {
            $requestParam["global_stock_type"] = TopUtil::convertBasic($this->globalStockType);
        }

        if (!TopUtil::checkEmpty($this->globalStockCountry)) {
            $requestParam["global_stock_country"] = TopUtil::convertBasic($this->globalStockCountry);
        }

        if (!TopUtil::checkEmpty($this->globalStockDeliveryPlace)) {
            $requestParam["global_stock_delivery_place"] = TopUtil::convertBasic($this->globalStockDeliveryPlace);
        }

        if (!TopUtil::checkEmpty($this->globalStockTaxFreePromise)) {
            $requestParam["global_stock_tax_free_promise"] = TopUtil::convertBasic($this->globalStockTaxFreePromise);
        }

        if (!TopUtil::checkEmpty($this->itemWeight)) {
            $requestParam["item_weight"] = TopUtil::convertBasic($this->itemWeight);
        }

        if (!TopUtil::checkEmpty($this->itemSize)) {
            $requestParam["item_size"] = TopUtil::convertBasic($this->itemSize);
        }

        if (!TopUtil::checkEmpty($this->inputCustomCpv)) {
            $requestParam["input_custom_cpv"] = TopUtil::convertBasic($this->inputCustomCpv);
        }

        if (!TopUtil::checkEmpty($this->cpvMemo)) {
            $requestParam["cpv_memo"] = TopUtil::convertBasic($this->cpvMemo);
        }

        if (!TopUtil::checkEmpty($this->supportCustomMade)) {
            $requestParam["support_custom_made"] = TopUtil::convertBasic($this->supportCustomMade);
        }

        if (!TopUtil::checkEmpty($this->customMadeTypeId)) {
            $requestParam["custom_made_type_id"] = TopUtil::convertBasic($this->customMadeTypeId);
        }

        if (!TopUtil::checkEmpty($this->newprepay)) {
            $requestParam["newprepay"] = TopUtil::convertBasic($this->newprepay);
        }

        if (!TopUtil::checkEmpty($this->barcode)) {
            $requestParam["barcode"] = TopUtil::convertBasic($this->barcode);
        }

        if (!TopUtil::checkEmpty($this->sellPoint)) {
            $requestParam["sell_point"] = TopUtil::convertBasic($this->sellPoint);
        }

        if (!TopUtil::checkEmpty($this->qualification)) {
            $requestParam["qualification"] = TopUtil::convertBasic($this->qualification);
        }

        if (!TopUtil::checkEmpty($this->o2oBindService)) {
            $requestParam["o2o_bind_service"] = TopUtil::convertBasic($this->o2oBindService);
        }

        if (!TopUtil::checkEmpty($this->ignorewarning)) {
            $requestParam["ignorewarning"] = TopUtil::convertBasic($this->ignorewarning);
        }

        if (!TopUtil::checkEmpty($this->afterSaleId)) {
            $requestParam["after_sale_id"] = TopUtil::convertBasic($this->afterSaleId);
        }

        if (!TopUtil::checkEmpty($this->changeProp)) {
            $requestParam["change_prop"] = TopUtil::convertBasic($this->changeProp);
        }

        if (!TopUtil::checkEmpty($this->descModules)) {
            $requestParam["desc_modules"] = TopUtil::convertBasic($this->descModules);
        }

        if (!TopUtil::checkEmpty($this->isOffline)) {
            $requestParam["is_offline"] = TopUtil::convertBasic($this->isOffline);
        }

        if (!TopUtil::checkEmpty($this->wirelessDesc)) {
            $requestParam["wireless_desc"] = TopUtil::convertBasic($this->wirelessDesc);
        }

        if (!TopUtil::checkEmpty($this->chaoshiExtendsInfo)) {
            $requestParam["chaoshi_extends_info"] = TopUtil::convertBasic($this->chaoshiExtendsInfo);
        }

        if (!TopUtil::checkEmpty($this->spuConfirm)) {
            $requestParam["spu_confirm"] = TopUtil::convertBasic($this->spuConfirm);
        }

        if (!TopUtil::checkEmpty($this->videoId)) {
            $requestParam["video_id"] = TopUtil::convertBasic($this->videoId);
        }

        if (!TopUtil::checkEmpty($this->interactiveId)) {
            $requestParam["interactive_id"] = TopUtil::convertBasic($this->interactiveId);
        }

        if (!TopUtil::checkEmpty($this->leaseExtendsInfo)) {
            $requestParam["lease_extends_info"] = TopUtil::convertBasic($this->leaseExtendsInfo);
        }

        if (!TopUtil::checkEmpty($this->brokerage)) {
            $requestParam["brokerage"] = TopUtil::convertBasic($this->brokerage);
        }

        if (!TopUtil::checkEmpty($this->bizCode)) {
            $requestParam["biz_code"] = TopUtil::convertBasic($this->bizCode);
        }

        if (!TopUtil::checkEmpty($this->imageUrls)) {
            $requestParam["image_urls"] = TopUtil::convertBasicList($this->imageUrls);
        }

        if (!TopUtil::checkEmpty($this->inputPids)) {
            $requestParam["input_pids"] = TopUtil::convertBasicList($this->inputPids);
        }

        if (!TopUtil::checkEmpty($this->inputStr)) {
            $requestParam["input_str"] = TopUtil::convertBasicList($this->inputStr);
        }

        if (!TopUtil::checkEmpty($this->skuProperties)) {
            $requestParam["sku_properties"] = TopUtil::convertBasic($this->skuProperties);
        }

        if (!TopUtil::checkEmpty($this->skuQuantities)) {
            $requestParam["sku_quantities"] = TopUtil::convertBasic($this->skuQuantities);
        }

        if (!TopUtil::checkEmpty($this->skuPrices)) {
            $requestParam["sku_prices"] = TopUtil::convertBasic($this->skuPrices);
        }

        if (!TopUtil::checkEmpty($this->skuOuterIds)) {
            $requestParam["sku_outer_ids"] = TopUtil::convertBasic($this->skuOuterIds);
        }

        if (!TopUtil::checkEmpty($this->skuBarcode)) {
            $requestParam["sku_barcode"] = TopUtil::convertBasic($this->skuBarcode);
        }

        if (!TopUtil::checkEmpty($this->skuSpecIds)) {
            $requestParam["sku_spec_ids"] = TopUtil::convertBasic($this->skuSpecIds);
        }

        if (!TopUtil::checkEmpty($this->skuDeliveryTimes)) {
            $requestParam["sku_delivery_times"] = TopUtil::convertBasic($this->skuDeliveryTimes);
        }

        if (!TopUtil::checkEmpty($this->skuHdLength)) {
            $requestParam["sku_hd_length"] = TopUtil::convertBasic($this->skuHdLength);
        }

        if (!TopUtil::checkEmpty($this->skuHdHeight)) {
            $requestParam["sku_hd_height"] = TopUtil::convertBasic($this->skuHdHeight);
        }

        if (!TopUtil::checkEmpty($this->skuHdLampQuantity)) {
            $requestParam["sku_hd_lamp_quantity"] = TopUtil::convertBasic($this->skuHdLampQuantity);
        }

        if (!TopUtil::checkEmpty($this->locationState)) {
            $requestParam["location.state"] = TopUtil::convertBasic($this->locationState);
        }

        if (!TopUtil::checkEmpty($this->locationCity)) {
            $requestParam["location.city"] = TopUtil::convertBasic($this->locationCity);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityPrdLicenseNo)) {
            $requestParam["food_security.prd_license_no"] = TopUtil::convertBasic($this->foodSecurityPrdLicenseNo);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityDesignCode)) {
            $requestParam["food_security.design_code"] = TopUtil::convertBasic($this->foodSecurityDesignCode);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityFactory)) {
            $requestParam["food_security.factory"] = TopUtil::convertBasic($this->foodSecurityFactory);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityFactorySite)) {
            $requestParam["food_security.factory_site"] = TopUtil::convertBasic($this->foodSecurityFactorySite);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityContact)) {
            $requestParam["food_security.contact"] = TopUtil::convertBasic($this->foodSecurityContact);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityMix)) {
            $requestParam["food_security.mix"] = TopUtil::convertBasic($this->foodSecurityMix);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityPlanStorage)) {
            $requestParam["food_security.plan_storage"] = TopUtil::convertBasic($this->foodSecurityPlanStorage);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityPeriod)) {
            $requestParam["food_security.period"] = TopUtil::convertBasic($this->foodSecurityPeriod);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityFoodAdditive)) {
            $requestParam["food_security.food_additive"] = TopUtil::convertBasic($this->foodSecurityFoodAdditive);
        }

        if (!TopUtil::checkEmpty($this->foodSecuritySupplier)) {
            $requestParam["food_security.supplier"] = TopUtil::convertBasic($this->foodSecuritySupplier);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityProductDateStart)) {
            $requestParam["food_security.product_date_start"] = TopUtil::convertBasic($this->foodSecurityProductDateStart);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityProductDateEnd)) {
            $requestParam["food_security.product_date_end"] = TopUtil::convertBasic($this->foodSecurityProductDateEnd);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityStockDateStart)) {
            $requestParam["food_security.stock_date_start"] = TopUtil::convertBasic($this->foodSecurityStockDateStart);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityStockDateEnd)) {
            $requestParam["food_security.stock_date_end"] = TopUtil::convertBasic($this->foodSecurityStockDateEnd);
        }

        if (!TopUtil::checkEmpty($this->foodSecurityHealthProductNo)) {
            $requestParam["food_security.health_product_no"] = TopUtil::convertBasic($this->foodSecurityHealthProductNo);
        }

        if (!TopUtil::checkEmpty($this->localityLifeExpirydate)) {
            $requestParam["locality_life.expirydate"] = TopUtil::convertBasic($this->localityLifeExpirydate);
        }

        if (!TopUtil::checkEmpty($this->localityLifeNetworkId)) {
            $requestParam["locality_life.network_id"] = TopUtil::convertBasic($this->localityLifeNetworkId);
        }

        if (!TopUtil::checkEmpty($this->localityLifeMerchant)) {
            $requestParam["locality_life.merchant"] = TopUtil::convertBasic($this->localityLifeMerchant);
        }

        if (!TopUtil::checkEmpty($this->localityLifeVerification)) {
            $requestParam["locality_life.verification"] = TopUtil::convertBasic($this->localityLifeVerification);
        }

        if (!TopUtil::checkEmpty($this->localityLifeRefundRatio)) {
            $requestParam["locality_life.refund_ratio"] = TopUtil::convertBasic($this->localityLifeRefundRatio);
        }

        if (!TopUtil::checkEmpty($this->localityLifeOnsaleAutoRefundRatio)) {
            $requestParam["locality_life.onsale_auto_refund_ratio"] = TopUtil::convertBasic($this->localityLifeOnsaleAutoRefundRatio);
        }

        if (!TopUtil::checkEmpty($this->localityLifeChooseLogis)) {
            $requestParam["locality_life.choose_logis"] = TopUtil::convertBasic($this->localityLifeChooseLogis);
        }

        if (!TopUtil::checkEmpty($this->localityLifeRefundmafee)) {
            $requestParam["locality_life.refundmafee"] = TopUtil::convertBasic($this->localityLifeRefundmafee);
        }

        if (!TopUtil::checkEmpty($this->localityLifeObs)) {
            $requestParam["locality_life.obs"] = TopUtil::convertBasic($this->localityLifeObs);
        }

        if (!TopUtil::checkEmpty($this->localityLifeEticket)) {
            $requestParam["locality_life.eticket"] = TopUtil::convertBasic($this->localityLifeEticket);
        }

        if (!TopUtil::checkEmpty($this->localityLifeVersion)) {
            $requestParam["locality_life.version"] = TopUtil::convertBasic($this->localityLifeVersion);
        }

        if (!TopUtil::checkEmpty($this->localityLifePackageid)) {
            $requestParam["locality_life.packageid"] = TopUtil::convertBasic($this->localityLifePackageid);
        }

        if (!TopUtil::checkEmpty($this->paimaiInfoMode)) {
            $requestParam["paimai_info.mode"] = TopUtil::convertBasic($this->paimaiInfoMode);
        }

        if (!TopUtil::checkEmpty($this->paimaiInfoDeposit)) {
            $requestParam["paimai_info.deposit"] = TopUtil::convertBasic($this->paimaiInfoDeposit);
        }

        if (!TopUtil::checkEmpty($this->paimaiInfoInterval)) {
            $requestParam["paimai_info.interval"] = TopUtil::convertBasic($this->paimaiInfoInterval);
        }

        if (!TopUtil::checkEmpty($this->paimaiInfoReserve)) {
            $requestParam["paimai_info.reserve"] = TopUtil::convertBasic($this->paimaiInfoReserve);
        }

        if (!TopUtil::checkEmpty($this->paimaiInfoValidHour)) {
            $requestParam["paimai_info.valid_hour"] = TopUtil::convertBasic($this->paimaiInfoValidHour);
        }

        if (!TopUtil::checkEmpty($this->paimaiInfoValidMinute)) {
            $requestParam["paimai_info.valid_minute"] = TopUtil::convertBasic($this->paimaiInfoValidMinute);
        }

        if (!TopUtil::checkEmpty($this->msPaymentReferencePrice)) {
            $requestParam["ms_payment.reference_price"] = TopUtil::convertBasic($this->msPaymentReferencePrice);
        }

        if (!TopUtil::checkEmpty($this->msPaymentVoucherPrice)) {
            $requestParam["ms_payment.voucher_price"] = TopUtil::convertBasic($this->msPaymentVoucherPrice);
        }

        if (!TopUtil::checkEmpty($this->msPaymentPrice)) {
            $requestParam["ms_payment.price"] = TopUtil::convertBasic($this->msPaymentPrice);
        }

        if (!TopUtil::checkEmpty($this->deliveryTimeNeedDeliveryTime)) {
            $requestParam["delivery_time.need_delivery_time"] = TopUtil::convertBasic($this->deliveryTimeNeedDeliveryTime);
        }

        if (!TopUtil::checkEmpty($this->deliveryTimeDeliveryTimeType)) {
            $requestParam["delivery_time.delivery_time_type"] = TopUtil::convertBasic($this->deliveryTimeDeliveryTimeType);
        }

        if (!TopUtil::checkEmpty($this->deliveryTimeDeliveryTime)) {
            $requestParam["delivery_time.delivery_time"] = TopUtil::convertBasic($this->deliveryTimeDeliveryTime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->image)){
            $fileParam["image"] = TopUtil::convertBasic($this->image);
        }
        return $fileParam;
    }

}

