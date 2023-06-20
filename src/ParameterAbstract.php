<?php

namespace Nece\Brawl\Payment;

/**
 * 参数基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-20
 */
abstract class ParameterAbstract
{
    protected $params = array();
    
    /**
     * 返回参数数组
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-20
     *
     * @return array
     */
    abstract public function toArray();

    /**
     * 获取参数值
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-20
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function getParamValue($key, $default = null)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }

        return $default;
    }

    /**
     * 过期时间
     * PHP的“date("Y-m-dTH:i:s+08:00")”方法出来的字符串中“T”前面多了“CS”，要替换成空
     *
     * @author gjw
     * @created 2023-05-24 14:27:07
     *
     * @param int $$expires 支付超时时长（秒）
     * 
     * @return string
     */
    protected function makeExpireTime($expires = 3600)
    {
        return str_replace("CS", "", date("Y-m-dTH:i:s+08:00", time() + $expires));
    }
}
