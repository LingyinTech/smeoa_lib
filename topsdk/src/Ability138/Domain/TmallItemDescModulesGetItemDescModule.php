<?php
namespace Topsdk\Topapi\Ability138\Domain;

class TmallItemDescModulesGetItemDescModule {

    /**
        一个List<String>的Json串，里面是模块引导提示，不超过3条（isv提交时可忽略不传）
     **/
    public $intros;

    /**
        淘宝图片空间的地址链接，示例模板，最多不超过三个（isv提交时可忽略不传）
     **/
    public $tpl_urls;

    /**
        模块id ,(注意:用户自定义模块不用填此项。)
     **/
    public $module_id;

    /**
        是否必填 （isv提交时可忽略不传）
     **/
    public $required;

    /**
        模块名称
     **/
    public $module_name;

    /**
        cat_mod:表示是运营设置的类目维度模块，usr_mod表示的是商家自定义模块。
     **/
    public $type;

    /**
        描述具体内容
     **/
    public $content;


    public function getIntros() : string{
        return $this->intros;
    }

    public function setIntros(string $intros){
        $this->intros = $intros;
    }

    public function getTplUrls() : string{
        return $this->tpl_urls;
    }

    public function setTplUrls(string $tplUrls){
        $this->tpl_urls = $tplUrls;
    }

    public function getModuleId() : int{
        return $this->module_id;
    }

    public function setModuleId(int $moduleId){
        $this->module_id = $moduleId;
    }

    public function getRequired() : bool{
        return $this->required;
    }

    public function setRequired(bool $required){
        $this->required = $required;
    }

    public function getModuleName() : string{
        return $this->module_name;
    }

    public function setModuleName(string $moduleName){
        $this->module_name = $moduleName;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }


}

