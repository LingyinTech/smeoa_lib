<?php
class WechatAction extends Action {
    protected $config = array('app_type' => 'public');

    public function index(){        
        /* 加载微信SDK */
        import ( "@.ORG.Util.ThinkWechat" );
        $weixin = new ThinkWechat ();
        
        /* 获取请求信息 */
        $data = $weixin->request ();

        /* 获取回复信息 */
        list ( $content, $type ) = $this->reply ( $data );
        
        // 接收到的信息入不同的库
        $this->weichatlog ( $data );

        /* 响应当前请求 */
        $weixin->response ( $content, $type );
    }
    
     /**
     * 定制响应信息
     * @param array $data 接收的数据
     * @return array; 响应的数据
     */
    private function reply($data) {
        S ('S_WECHATID', $data ['FromUserName']);   
        // 消息类型
        switch ($data ['MsgType']) {
            case 'text': // 类型是文本的
                switch ($data ['Content']) {
                    case '订单流程系统':
                    case '我是冠军':
                        $reply = array(array(array('帝峰班服新版下单系统','小伙伴，恭喜你斩获一单！请记住：真正的销售，起于完款，结束于转介绍！天下永远没有卖不出去的产品，只有卖不出去产品的销售员！只为成功找方法，不为失败找借口，永远向冠军看齐，永远向最优秀的自己发起挑战！加油，你就是下一个冠军！','http://we.difeng99.com/Data/Files/20140904170901_38059.jpg',C("SITE_URL").U('wechat/oauth',array('wechatid'=>$data ['FromUserName'])))),'news');
                        //$reply = array ( "欢迎使用新版订单流程系统。<a href='".C("SITE_URL").U('wechat/oauth',array('wechatid'=>$data ['FromUserName']))."'>点击立即进行绑定</a>", 'news' );
                        break;
                    case '解绑':
                        $reply = $this->getUnOauth ( $data ['FromUserName'] );
                        //$reply = array ( "欢迎使用新版订单流程系统。<a href='".C("SITE_URL").U('wechat/oauth',array('wechatid'=>$data ['FromUserName']))."'>点击立即进行绑定</a>", 'news' );
                        break;
                    case '派单':
                        $reply = $this->getDesign($data['FromUserName']);
                        break;
                    case '订单查询':
                    case '查询订单':
                        $reply = array(array(array('订单查询','实时获取订单状态','http://we.difeng99.com/Data/Files/20140904170901_38059.jpg',C("SITE_URL").U('wechat/query',array('wechatid'=>$data ['FromUserName'])))),'news');
                        break;
                    case '潜在大使':
                        $reply = array(array(array('潜在大使','填写潜在校园大使','http://we.difeng99.com/Data/Files/20140904170901_38059.jpg',C("SITE_URL").U('wechat/oauth',array('wechatid'=>$data ['FromUserName'],'op'=>'add_school')))),'news');
                        break;
					case '测试':
						$url = urlencode('http://we.difeng99.com');
						$replyurl = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx25d428fa013a0a01&redirect_uri={$url}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
						$reply = array(array(array('测试','这是测试','http://we.difeng99.com/Data/Files/20140904170901_38059.jpg',$replyurl)),'news');
						break;
                    default :
                        $reply = array ( '虽然不知道你在说什么，但是好厉害的样子', 'text'  );
                }
                
                break;
            default :
                $reply = array ( '啦啦啦，我是卖报的小行家',    'text' );   
                break;
        }
        return $reply;
    }
        
     /**
     * 信息入库
     * @param array $data 接收的数据
     */
    private function weichatlog($data) {
        if ($data ['MsgType'] == 'event') {
            M ( 'wechat_event' )->data ( $data )->add ();
        } else {
            M ( 'wechat_info' )->data ( $data )->add ();
        }
    }
    
    /**
     * 解除绑定帐号
     * @param string $openid 用户openid
     * @return array; 响应的数据
     */
    private function getUnOauth($openid = ''){
        $model = M('User');
        //$user = $model->where("openid = '{$openid}' AND westatus = 1")->find();
        $user = M('UserWechat')->where(array('wechatid'=>$openid))->find();
        if ($openid && $user) {
            $model -> startTrans();
            $we = $model->where("openid = '{$openid}'")->save(array('westatus'=>0));
            $result = M('UserWechat')->where(array('wechatid'=>$openid))->delete();
            if (FALSE !== $result) {
                $model->commit();
                $re = array ( "解除绑定成功", 'text' );
            }else {
                $model->rollback();
                $re = array ( "解除绑定失败，请重新发送：解绑", 'text' );
            }
        }
        else {
            $re = array ( "您还没有绑定帐号。<a href='".C("SITE_URL").U('wechat/oauth',array('wechatid'=>$openid))."'>点击立即进行绑定</a>", 'text' );
        }
        return $re;
    }
    
    public function getDesign($openid = ''){
        
        $model = M('User');
        $user = $model->where("openid = '{$openid}' AND westatus = 1")->find();
        if ($openid && $user) {
            $re = array(array(array('设计部派单','只有设计部长可以操作！','http://we.difeng99.com/Data/Files/20140904170901_38059.jpg',
                C("SITE_URL").U('Webreserve/design',array('wechatid'=>$data ['FromUserName'])))),'news');
        }else {
            $re = array ( "您还没有绑定帐号。<a href='".C("SITE_URL").U('wechat/oauth',array('wechatid'=>$openid))."'>点击立即进行绑定</a>", 'text' );
        }
        return $re;
    }
    
    /**
     * 跳出页面-绑定帐号
     */
    public function oauth(){
        if (IS_POST) {
            if (empty($_POST['emp_no'])) {
                $this -> error('帐号必须！');
            } elseif (empty($_POST['password'])) {
                $this -> error('密码必须！');
            }
            //生成认证条件
            $map = array();
            // 支持使用绑定帐号登录
            $map['emp_no'] = $_POST['emp_no'];
            $map["is_del"] = array('eq', 0);
            $model = D("User");
            $authInfo = $model -> where($map) -> find();

            //使用用户名、密码和状态的方式进行认证
            if (false === $authInfo) {
                $this -> error('帐号或密码错误！');
            } else {
                if ($authInfo['password'] != md5($_POST['password'])) {
                    $this -> error('帐号或密码错误！');
                }
                session(C('USER_AUTH_KEY'), $authInfo['id']);
                session('emp_no', $authInfo['emp_no']);
                session('email', $authInfo['email']);
                session('user_name', $authInfo['name']);
                session('user_pic', $authInfo['pic']);
                session('dept_id', $authInfo['dept_id']);
				session('area',$authInfo['area']);
                
                if ($authInfo['emp_no'] == 'admin') {
                    session(C('ADMIN_AUTH_KEY'), true);
                }
                
                //更新绑定表
                $user_wechat = M('user_wechat');
                $count = $user_wechat->where(array('openid'=>I ('post.openid')))->find();
                if(!$count){
                    $user_wechat->add(array(
                        'userid'    =>  $authInfo['id'],
                        'wechatid'  =>  I ('post.wechatid'),
                        'openid'  =>  I ('post.openid'),
                        'addtime'   =>  time(),
                        'uptime'=> time()
                    ));
                }else{
                     $user_wechat->where(array('openid'=>I ('post.openid')))->save(array(
                        'userid'    =>  $authInfo['id'],
                        'wechatid'  =>  I ('post.wechatid'),
                        'uptime'=> time()
                    ));
                }

                //保存登录信息
                $User = M('User');
                $ip = get_client_ip();
                $data = array();
                $data['id'] = $authInfo['id'];
                $data['last_login_time'] = time();
                $data['login_count'] = array('exp', 'login_count+1');
                $data['last_login_ip'] = $ip;
                $data['openid']=I ('post.openid');
                $data['westatus']=1;
                $result=$User -> save($data);
                if ($result){
                    // 这里微信响应一条（恭喜您验证成功！您可以使用自定义菜单或直接回复信息查询想要了解的内容）信息；
                    $this->send ( "恭喜您成功绑定帝衫国全国下单系统!", I ('post.openid'), 'text' );
                                            
                    
                   //$this->success('绑定成功',U('Webreserve/add'));
                   if($op == 'add_school'){
                        redirect(U('Webreserve/add_school'));
                   }else{
                        redirect(U('Webreserve/add'));
                   }
                } else {
                    $this->message ( '绑定失败' );
                }
            }
        } else {
                $wechatid = I('request.wechatid');
                $op = I('request.op');
                if($wechatid){
                    S ('S_WECHATID', $wechatid);
                    $model = M('User_wechat');
                    $wxuser = $model->where(array('wechatid'=>$wechatid))->find();
                    if(isset($wxuser['userid'])){//已获取到openid
                        $authInfo = M("User") -> find($wxuser['userid']);
                        if (isset($authInfo['id'])) {
                            session(C('USER_AUTH_KEY'), $authInfo['id']);
                            session('emp_no', $authInfo['emp_no']);
                            session('email', $authInfo['email']);
                            session('user_name', $authInfo['name']);
                            session('user_pic', $authInfo['pic']);
                            session('dept_id', $authInfo['dept_id']);
                            session('area',$authInfo['area']);
                            
                            if($op == 'add_school'){
                                redirect(U('Webreserve/add_school'));
                            }else{
                                redirect(U('Webreserve/add'));
                            }
                        }else{
                            $this->assign('wechatid',$wechatid);
                            $this->assign('openid',$wechatid);//预留这个字段，给以后扩展
                            $this->assign('op',$op);
                            $this->meta_title = "帐号绑定";
                            $this->display ();
                        }
                    }else{
                        $this->assign('wechatid',$wechatid);
                        $this->assign('openid',$wechatid);//预留这个字段，给以后扩展
                        $this->assign('op',$op);
                        $this->meta_title = "帐号绑定";
                        $this->display ();
                    }
                }else{
                   $this->message ( '非法请求' );
                }
        }
    }
    
    /**
     * 跳出页面-信息提示页面
     */
    public function message($msg = '') {
        $this->assign ( 'msg', $msg );
        $this->display ( 'message' );
        exit ();
    }
    
    /**
     * 获取微信用户基础资料
     * 
     * @param string $openid
     *          用户openid
     * @return array; 响应的数据
     */
    private function getuser($openid = '') {
        import ( "@.ORG.Util.ThinkWechat" );
        $weixin = new ThinkWechat ();
        // $openid = 'o0ehLt1pOAIEFZtPD4ghluvjamf0';
        $weuser = $weixin->user ( $openid );
        // dump($weuser);
        return $weuser;
    }

    public function test(){
        $this->send("test","oEeapuELelTEsHJer_7DBVIZHIFk");
    }
    
    /**
     * 主动发送消息
     * 
     * @param string $content
     *          内容
     * @param string $openid
     *          发送者用户名
     * @param string $type
     *          类型
     * @return array 返回的信息
     */
    private function send($content, $openid = '', $type = 'text') {
        import ( "@.ORG.Util.ThinkWechat" );
        $weixin = new ThinkWechat ();
        // $openid = 'o0ehLt1pOAIEFZtPD4ghluvjamf0';
        $restr = $weixin->sendMsg ($content, $openid, $type );
        return $restr;
    }

        
    /**
     * 生成COOKIE或从COOKIE获得用户ID
     */ 
    private function getCookieUserId($openid = NULL) {
        if (empty ( $openid ))  return - 3;
        $auth = cookie ( 'user_auth' ); // 读取COOKIE
        if ($auth) { // 存在cookie
            $auth = decrypt ( $auth ); // 解密cookie
            if (strpos ( $auth, '{@}' ) === FALSE) { // 如果是假冒的cookie
                $uid = - 2;
            } else { // 真实，然后分解cookie
                $autharr = explode ( '{@}', $auth );
                $uid = $autharr [1];
            }
        } else { // 不存在cookie，则创建cookie
            $model = M("User");
            $weuser = $model -> where ( "openid = '{$openid}' AND westatus = 1" )->find (); // 查到userid
            if (empty ( $weuser )) { // 查到没有绑定返回-1
                $uid = - 1;
                $auth = encrypt ( $openid . '{@}' . $uid . '{@}' . time () );
                cookie ( 'user_auth', $auth );
            } else { // 绑定了的创建COOKIE；
                $uid = $weuser ['id'];
                $auth = encrypt ( $openid . '{@}' . $uid . '{@}' . time () );
                cookie ( 'user_auth', $auth );
            }
        }
        return $uid; // 返回USERID
    }

    public function query(){
        if(IS_POST){
            $tel = $_POST['tel'];
            $orderMain = D('OrderMain')->where(array(
                'tel' => $tel,
            ))->order('create_time desc')->find();
            if(isset($orderMain['id'])){
                $id = $orderMain['id'];
            }else{
                exit('无符合条件订单');
            }
            $order = D('Order')->find($id);
            $flows = D('OrderFlow')->table(C('DB_PREFIX').'order_flow a,'.C('DB_PREFIX').'order_flow_type b')
            -> field('b.name,a.*')->where('a.orderid =  '.$id.' and a.typeid=b.id')->order('a.addtime asc,a.typeid asc') -> select();
            
            $orderprev = $orderfile = M('OrderFiles')->where(array('orderid'=>$id,'type'=>'orderprev'))->find();
            if(isset($orderprev['url'])&&!empty($orderprev['url'])){
                $this->assign('prevssid',$orderprev['url']);
                $files = array_filter(explode(';', $orderprev['url']));
                $where['sid'] = array('in', $files);
                $prev_list = M("File") -> where($where) -> select();
                $this->assign('prev_list',$prev_list);
            }else{
                $this->assign('prev_list','');
            }
            $this->assign('order',$order);
            $this->assign('orderMain',$orderMain);
            $this->assign('flows',$flows);
            $this->display('order_info');           
        }else{
            $this->display();
        }        
    }
}
