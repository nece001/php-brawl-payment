<?php

namespace Nece\Brawl\Payment;

class NotifyEvent
{

    private $id;
    private $create_time;
    private $resource_type;
    private $event_type;
    private $summary;
    private $resource;


    /**
     * 获取通知ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置通知ID
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * 获取通知创建时间
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * 设置通知创建时间
     *
     * @return  self
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;

        return $this;
    }

    /**
     * 获取通知数据类型
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * 设置通知数据类型
     *
     * @return  self
     */
    public function setResourceType($resource_type)
    {
        $this->resource_type = $resource_type;

        return $this;
    }

    /**
     * 获取通知类型
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * 设置通知类型
     *
     * @return  self
     */
    public function setEventType($event_type)
    {
        $this->event_type = $event_type;

        return $this;
    }

    /**
     * 获取回调摘要
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * 设置回调摘要
     *
     * @return  self
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * 获取通知数据
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * 设置通知数据
     *
     * @return  self
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }
}
