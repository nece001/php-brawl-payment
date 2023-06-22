<?php

namespace Nece\Brawl\Payment\Result;

use Nece\Brawl\ResultAbstract;

class Refund extends ResultAbstract
{
    private $from = array();

    /**
     * 设置退款单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 退款单号
     *
     * @return void
     */
    public function setRefundId($value)
    {
        $this->params['refund_id'] = $value;
    }

    /**
     * 设置商户退款单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 商户系统内部唯一的退款单号
     *
     * @return void
     */
    public function setOutRefundNo($value)
    {
        $this->params['out_refund_no'] = $value;
    }

    /**
     * 设置支付交易订单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 支付交易订单号
     *
     * @return void
     */
    public function setTansactionId($value)
    {
        $this->params['transaction_id'] = $value;
    }

    /**
     * 设置商户订单号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 原支付交易对应的商户订单号
     *
     * @return void
     */
    public function setOutTradeNo($value)
    {
        $this->params['out_trade_no'] = $value;
    }

    /**
     * 设置退款渠道
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 退款渠道
     *
     * @return void
     */
    public function setChannel($value)
    {
        $this->params['channel'] = $value;
    }

    /**
     * 设置退款入账账户
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 当前退款单的退款入账方账户
     *
     * @return void
     */
    public function setUserReceivedAccount($value)
    {
        $this->params['user_received_account'] = $value;
    }

    /**
     * 设置退款成功时间
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 退款成功时间，当退款状态为退款成功时有返回。
     *
     * @return void
     */
    public function setSuccessTime($value)
    {
        $this->params['success_time'] = $value;
    }

    /**
     * 设置退款受理时间
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 退款受理时间
     *
     * @return void
     */
    public function setCreateTime($value)
    {
        $this->params['create_time'] = $value;
    }

    /**
     * 设置退款状态
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 退款状态
     *
     * @return void
     */
    public function setStatus($value)
    {
        $this->params['status'] = $value;
    }

    /**
     * 设置资金账户
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $value 资金账户
     *
     * @return void
     */
    public function setFundsAccount($value)
    {
        $this->params['funds_account'] = $value;
    }

    /**
     * 设置金额信息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param integer $total 订单总金额，单位为分
     * @param integer $refund 退款标价金额，单位为分，可以做部分退款
     * @param integer $payer_total 现金支付金额，单位为分，只能为整数
     * @param integer $payer_refund退款给用户的金额，不包含所有优惠券金额
     * @param integer $settlement_refund 应结退款金额 去掉非充值代金券退款金额后的退款金额，单位为分
     * @param integer $settlement_total 应结订单金额=订单金额-免充值代金券金额，应结订单金额<=订单金额，单位为分
     * @param integer $discount_refund 优惠退款金额 优惠退款金额<=退款金额，退款金额-代金券或立减优惠退款金额为现金，说明详见代金券或立减优惠，单位为分
     * @param string $currency 退款币种
     * @param integer $refund_fee 手续费退款金额，单位为分。
     * @param array $from 退款出资账户及金额
     *
     * @return void
     */
    public function setAmount(int $total, int $refund, int $payer_total, int $payer_refund, int $settlement_refund, int $settlement_total, int $discount_refund, $currency = 'CNY', int $refund_fee = 0, array $from = array())
    {
        $this->params['amount'] = array(
            'total' => $total,
            'refund' => $refund,
            'payer_total' => $payer_total,
            'payer_refund' => $payer_refund,
            'settlement_refund' => $settlement_refund,
            'settlement_total' => $settlement_total,
            'discount_refund' => $discount_refund,
            'refund_fee' => $refund_fee,
            'from' => $from
        );
    }

    /**
     * 设置退款出资账户及金额
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $account
     * @param integer $amount
     *
     * @return array
     */
    public function buildFrom($account, int $amount)
    {
        return array(
            'account' => $account,
            'amount' => $amount,
        );
    }

    /**
     * 设置优惠退款信息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $promotion_id 券或者立减优惠id
     * @param string $scope 优惠范围
     * @param string $type 优惠类型
     * @param integer $amount 优惠券面额 用户享受优惠的金额（优惠券面额=微信出资金额+商家出资金额+其他出资方金额 ），单位为分
     * @param integer $refund_amount 优惠退款金额 优惠退款金额<=退款金额，退款金额-代金券或立减优惠退款金额为用户支付的现金，说明详见代金券或立减优惠，单位为分
     * @param array $goods_detail
     * 
     * @return void
     */
    public function addPromotionDetail($promotion_id, $scope, $type, int $amount, int $refund_amount, array $goods_detail)
    {
        $this->params['promotion_detail'][] = array(
            'promotion_id' => $promotion_id,
            'scope' => $scope,
            'type' => $type,
            'amount' => $amount,
            'refund_amount' => $refund_amount,
            'goods_detail' => $goods_detail
        );
    }

    /**
     * 设置商品列表
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @param string $merchant_goods_id 商户侧商品编码
     * @param integer $unit_price 商品单价
     * @param integer $refund_amount 商品退款金额
     * @param integer $refund_quantity 商品退货数量
     * @param string $goods_name 商品名称
     * @param string $wechatpay_goods_id 微信支付商品编码
     *
     * @return void
     */
    public function buildGoodsDetail($merchant_goods_id, int $unit_price, int $refund_amount, int $refund_quantity, $goods_name = '',  $wechatpay_goods_id = '')
    {
        return array(
            'merchant_goods_id' => $merchant_goods_id,
            'unit_price' => $unit_price,
            'refund_amount' => $refund_amount,
            'refund_quantity' => $refund_quantity,
            'goods_name' => $goods_name,
            'wechatpay_goods_id' => $wechatpay_goods_id,
        );
    }

    /**
     * 转数组
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-21
     *
     * @return array
     */
    public function toArray()
    {
        return $this->params;
    }
}
