<?php

namespace Nece\Brawl\Payment;

/**
 * 支付接口
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-19
 */
interface PaymentInterface
{
    /**
     * 预支付
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-19
     *
     * @return array
     */
    public function prepay(ParameterAbstract $params);

    /**
     * 退款
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-19
     *
     * @return \Nece\brawl\ResultAbstract
     */
    public function refund(ParameterAbstract $params);

    /**
     * 通知解析
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-20
     *
     * @param string $content
     * @param array $headers
     * @param boolean $verify
     *
     * @return void
     */
    public function notifyDecode($content, array $headers, $verify = true);

    /**
     * 返回通知应答数据
     *
     * @author gjw
     * @created 2023-05-24 17:36:47
     *
     * @return \Nece\Brawl\Payment\NotifyResponse
     */
    public function notifyResponse();
}
