<?php

namespace Nece\Brawl\Payment;

/**
 * 通知返回响应
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-21
 */
class NotifyResponse
{
    private $content_type;
    private $content;

    /**
     * 设置响应内容类型
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value
     *
     * @return void
     */
    public function setContentType($value)
    {
        $this->content_type = $value;
    }

    /**
     * 获取响应内容类型
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * 设置响应内容
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value
     *
     * @return void
     */
    public function setContent($value)
    {
        $this->content = $value;
    }

    /**
     * 获取响应内容
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
