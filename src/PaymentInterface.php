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

    /**
     * 解析退款返回结果
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $content 消息体
     *
     * @return \Nece\Brawl\Payment\ResultAbstract
     */
    public function parseRefundResult(string $content);

    /**
     * 是否支付成功回调通知
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param array $event 事件内容数组
     *
     * @return boolean
     */
    public function paidNotifySuccess(array $event);

    /**
     * 是否退款成功回调通知
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param array $event 事件内容数组
     *
     * @return void
     */
    public function refundedNotifySuccess(array $event);

    /**
     * 解析支付成功回调消息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $content 消息体
     *
     * @return \Nece\Brawl\Payment\Result\PaidNotify
     */
    public function parsePaidNotifyResult(string $content);

    /**
     * 解析退款回调消息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $content 消息体
     *
     * @return \Nece\Brawl\Payment\Result\RefundedNotify
     */
    public function parseRefundedNotifyResult(string $content);
}
