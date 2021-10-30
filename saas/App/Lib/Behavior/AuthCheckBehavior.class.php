<?php

/*---------------------------------------------------------------------------
                              _oo8oo_
                             o8888888o
                             88" . "88
                             (| -_- |)
                             0\  =  /0
                           ___/'==='\___
                         .' \\|     |// '.
                        / \\|||  :  |||// \
                       / _||||| -:- |||||_ \
                      |   | \\\  -  /// |   |
                      | \_|  ''\---/''  |_/ |
                      \  .-\__  '-'  __/-.  /
                    ___'. .'  /--.--\  '. .'___
                 ."" '<  '.___\_<|>_/___.'  >' "".
                | | :  `- \`.:`\ _ /`:.`/ -`  : | |
                \  \ `-.   \_ __\ /__ _/   .-` /  /
            =====`-.____`.___ \_____/ ___.`____.-`=====
                              `=---=`
           ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                                                        佛祖保佑         永不宕机/永无bug
   
 Copyright (c) 2014 http://www.xiehuanjin.cn All rights reserved.                                             

  @Author:  xie.hj<xie.hj@thinkalways.net>                                 
 -------------------------------------------------------------------------*/

class AuthCheckBehavior extends Behavior
{
    protected $config;

    public function run(&$params)
    {

        //个人数据
        $this->config = &$params;
        $app_type = $params['app_type'];

        $checkAuth = true;
        switch ($app_type) {
            case 'public' :
                $auth = array('admin' => false, 'write' => false, 'read' => true);
                $params['auth'] = $auth;
                return true;
                break;
            case 'asst' :
            case 'personal' :
                $auth = array('admin' => true, 'write' => true, 'read' => true);
                $params['auth'] = $auth;
                return true;
                break;

            case 'common' :
            case 'flow' :
                $action_auth = C('AUTH');
                if (!empty($params['action_auth'])) {
                    $action_auth = array_merge(C('AUTH'), $params['action_auth']);
                }
                $auth = $this->get_auth();
                break;
            case 'url':
                $action_auth = C('AUTH');
                if (!empty($params['action_auth'])) {
                    $action_auth = array_merge($action_auth, $params['action_auth']);
                }
                $auth = array('admin' => true, 'write' => true, 'read' => true);
                $params['auth'] = $auth;
                empty($params['url']) && $params['url'] = ['index', 'firm'];
                $checkAuth = $this->checkUrlAuth(null,$params['url']);
                break;
            case 'master' :
                $action_auth = C('AUTH');
                if (!empty($params['action_auth'])) {
                    $action_auth = array_merge($action_auth, $params['action_auth']);
                }
                $auth = $this->get_auth();
                if ($auth['admin']) {
                    return true;
                }
                break;

            case 'folder' :
                $action_auth = C('AUTH');
                if (!empty($params['action_auth'])) {
                    $action_auth = array_merge($action_auth, $params['action_auth']);
                }
                if (!empty($params['sub_action_auth'])) {
                    $action_auth = array_merge($action_auth, $params['sub_action_auth']);
                }

                $fid = $_REQUEST['fid'];
                $id = $_REQUEST['id'];
                $sub_action_auth = $params['sub_action_auth'];
                if (array_key_exists(ACTION_NAME, $sub_action_auth)) {
                    $id = $_REQUEST[$params['pid']];
                    if (empty($id)) {
                        $where['id'] = $_REQUEST['id'];
                        $id = M($params['sub_model'])->where($where)->getfield($params['pid']);
                    }
                };

                if (isset($fid)) {
                    $folder_id = $fid;
                    $auth = D("SystemFolder")->get_folder_auth($folder_id);
                    break;
                }
                if (isset($id)) {
                    if (is_array($id)) {
                        $where["id"] = array("in", array_filter($id));
                    } else {
                        $where["id"] = array('in', array_filter(explode(',', $id)));
                    }
                    $model = D(MODULE_NAME);

                    $folder_id = $model->where($where)->getField('folder');
                    $auth = D("SystemFolder")->get_folder_auth($folder_id);

                    break;
                }
                $auth = $this->get_auth();
                break;
            default :
                $action_auth = C('AUTH');
                $auth = $this->get_auth();
                break;
        }

        if (!$checkAuth || !$auth[$action_auth[ACTION_NAME]]) {
            $auth_id = session(C('USER_AUTH_KEY'));
            if (!isset($auth_id)) {
                //跳转到认证网关
                redirect(U(C('USER_AUTH_GATEWAY')));
            }
            $e['message'] = "没有权限";
            include C('TMPL_NO_HAVE_AUTH');
            die;
        }

        $this->config['auth'] = $auth;

        return true;
    }

    public function checkUrlAuth($controllerName = null,$filterUrl = [])
    {
        if (!in_array(ACTION_NAME, $filterUrl)) {
            return true;
        }
        $actionName = ACTION_NAME;

        if (empty($controllerName)) {
            $controllerName = strtolower(MODULE_NAME);
        }

        $allAccessList = $accessList = D('Node')->access_list(true);
        $accessList = array_filter($accessList, function ($v) use ($actionName,$controllerName) {
            return strpos($v['url'], "{$controllerName}/{$actionName}") !== false;
        });

        $url = $_SERVER['REQUEST_URI'];
        foreach ($accessList as $item) {
            if ("{$controllerName}/{$actionName}" == trim($item['url'],'#')) {
                return true;
            }
            if ($url == U($item['url'])) {
                return true;
            }
        }

        foreach ($allAccessList as $item) {
            if (strpos($item['url'], "{$controllerName}/") === false) {
                continue;
            }

            if (!empty($item['url']) && strpos($item['url'],'##') === false) {
                $canAccessUrl = U($item['url']);
                header("Location: {$canAccessUrl}");
                exit(0);
            }
        }

        return false;
    }

    function get_auth()
    {

        $access_list = D("Node")->access_list();
        $access_list = array_filter($access_list, array($this, 'filter_module'));
        $access_list = rotate($access_list);


        $module_list = $access_list['url'];
        $module_list = array_map(array($this, "get_module"), $module_list);
        $module_list = str_replace("_", "", $module_list);


        $access_list_admin = array_filter(array_combine($module_list, $access_list['admin']));
        $access_list_write = array_filter(array_combine($module_list, $access_list['write']));
        $access_list_read = array_filter(array_combine($module_list, $access_list['read']));

        $module_name = strtolower(MODULE_NAME);
        $auth['admin'] = array_key_exists($module_name, $access_list_admin) || array_key_exists("##" . $module_name, $access_list_admin);

        $auth['write'] = array_key_exists($module_name, $access_list_write) || array_key_exists("##" . $module_name, $access_list_write);

        $auth['read'] = array_key_exists($module_name, $access_list_read) || array_key_exists("##" . $module_name, $access_list_read);

        if ($auth['admin'] == true) {
            $auth['write'] = true;
        }
        if ($auth['write'] == true) {
            $auth['read'] = true;
        }
        return $auth;
    }

    function get_module($str)
    {
        $arr_str = explode("/", $str);
        return $arr_str[0];
    }

    function filter_module($str)
    {
        if (strpos($str['url'], '##') !== false) {
            return true;
        }
        if (empty($str['admin']) && empty($str['write']) && empty($str['read'])) {
            return false;
        }
        if (strpos($str['url'], 'index')) {
            return true;
        }
        return false;
    }
}