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
     * @return void
     */
    public function prepay();

    /**
     * 退款
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-19
     *
     * @return void
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
    public function notifyDecode($content, array $headers, $verify = false);
}
