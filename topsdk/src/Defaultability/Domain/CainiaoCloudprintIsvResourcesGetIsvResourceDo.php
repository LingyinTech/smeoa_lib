<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class CainiaoCloudprintIsvResourcesGetIsvResourceDo {

    /**
        资源内容（当资源类型为TEMPLATE时，为空）
     **/
    public $resource_content;

    /**
        资源id
     **/
    public $resource_id;

    /**
        资源名称
     **/
    public $resource_name;

    /**
        资源类型
     **/
    public $resource_type;

    /**
        资源url（当资源类型为打印项时，为空）
     **/
    public $resource_url;


    public function getResourceContent() : string{
        return $this->resource_content;
    }

    public function setResourceContent(string $resourceContent){
        $this->resource_content = $resourceContent;
    }

    public function getResourceId() : int{
        return $this->resource_id;
    }

    public function setResourceId(int $resourceId){
        $this->resource_id = $resourceId;
    }

    public function getResourceName() : string{
        return $this->resource_name;
    }

    public function setResourceName(string $resourceName){
        $this->resource_name = $resourceName;
    }

    public function getResourceType() : string{
        return $this->resource_type;
    }

    public function setResourceType(string $resourceType){
        $this->resource_type = $resourceType;
    }

    public function getResourceUrl() : string{
        return $this->resource_url;
    }

    public function setResourceUrl(string $resourceUrl){
        $this->resource_url = $resourceUrl;
    }


}

