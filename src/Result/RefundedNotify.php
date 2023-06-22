<?php

namespace Nece\Brawl\Payment\Result;

use Nece\Brawl\ResultAbstract;

/**
 * 退款通知消息（回调）
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-19
 */
class RefundedNotify extends ResultAbstract
{
    /**
     * 设置直连商户号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 直连商户的商户号，由微信支付生成并下发。
     *
     * @return void
     */
    public function setMchId($value)
    {
        $this->params['mchid'] = $value;
    }

    /**
     * 设置商户订单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 返回的商户订单号
     *
     * @return void
     */
    public function setOutTradeNo($value)
    {
        $this->params['out_trade_no'] = $value;
    }

    /**
     * 设置微信支付订单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 微信支付订单号
     *
     * @return void
     */
    public function setTransactionId($value)
    {
        $this->params['transaction_id'] = $value;
    }

    /**
     * 设置商户退款单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 商户退款单号
     *
     * @return void
     */
    public function setOutRefundNo($value)
    {
        $this->params['out_refund_no'] = $value;
    }

    /**
     * 设置微信支付退款单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 微信支付退款单号
     *
     * @return void
     */
    public function setRefundId($value)
    {
        $this->params['refund_id'] = $value;
    }

    /**
     * 设置退款状态
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 退款状态，枚举值
     *
     * @return void
     */
    public function setRefundStatus($value)
    {
        $this->params['refund_status'] = $value;
    }

    /**
     * 设置退款成功时间
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 退款成功时间 当退款状态为退款成功时返回此参数。
     *
     * @return void
     */
    public function setSuccessTime($value)
    {
        $this->params['success_time'] = $value;
    }

    /**
     * 设置退款入账账户
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 取当前退款单的退款入账方。
     *
     * @return void
     */
    public function setUserReceivedAccount($value)
    {
        $this->params['user_received_account'] = $value;
    }

    /**
     * 设置金额信息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param integer $total 订单总金额，单位为分
     * @param integer $refund 退款金额，币种的最小单位
     * @param integer $payer_total 用户实际支付金额，单位为分
     * @param integer $payer_refund 退款给用户的金额，不包含所有优惠券金额
     *
     * @return void
     */
    public function setAmount(int $total, int $refund, int $payer_total, int $payer_refund)
    {
        $this->params['amount'] = array(
            'total' => $total,
            'refund' => $refund,
            'payer_total' => $payer_total,
            'payer_refund' => $payer_refund,
        );
    }

    /**
     * 转为数组
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @return array
     */
    public function toArray()
    {
        return $this->params;
    }
}
