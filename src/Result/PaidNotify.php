<?php

namespace Nece\Brawl\Payment\Result;

use Nece\Brawl\ResultAbstract;

/**
 * 支付消息结果（回调）
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-19
 */
class PaidNotify extends ResultAbstract
{

    /**
     * 设置应用ID
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 直连商户申请的公众号或移动应用appid。
     *
     * @return void
     */
    public function setAppId($value)
    {
        $this->params['appid'] = $value;
    }

    /**
     * 设置商户号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 商户的商户号，由微信支付生成并下发。
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
     * @param string $value 商户系统内部订单号
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
     * @param string $value 微信支付系统生成的订单号
     *
     * @return void
     */
    public function setTransactionId($value)
    {
        $this->params['transaction_id'] = $value;
    }

    /**
     * 设置交易类型
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 交易类型，枚举值
     *
     * @return void
     */
    public function setTradeType($value)
    {
        $this->params['trade_type'] = $value;
    }

    /**
     * 设置交易状态
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 交易状态，枚举值：
     *
     * @return void
     */
    public function setTradeState($value)
    {
        $this->params['trade_state'] = $value;
    }

    /**
     * 设置交易状态描述
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 交易状态描述
     *
     * @return void
     */
    public function setTradeStateDesc($value)
    {
        $this->params['trade_state_desc'] = $value;
    }

    /**
     * 设置付款银行
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 银行类型，采用字符串类型的银行标识。银行标识请参考《银行类型对照表》
     *
     * @return void
     */
    public function setBankType($value)
    {
        $this->params['bank_type'] = $value;
    }

    /**
     * 设置附加数据
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 附加数据，在查询API和支付通知中原样返回，可作为自定义参数使用，实际情况下只有支付完成状态才会返回该字段。
     *
     * @return void
     */
    public function setAttach($value)
    {
        $this->params['attach'] = $value;
    }

    /**
     * 设置支付完成时间
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $value 支付完成时间，遵循rfc3339标准格式，格式为yyyy-MM-DDTHH:mm:ss+TIMEZONE
     *
     * @return void
     */
    public function setSuccessTime($value)
    {
        $this->params['success_time'] = $value;
    }

    /**
     * 设置支付者
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $openid 用户标识
     *
     * @return void
     */
    public function setPayer($openid)
    {
        $this->params['payer']['openid'] = $openid;
    }

    /**
     * 设置订单金额
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param integer $total 订单总金额，单位为分。
     * @param integer $payer_total 用户支付金额，单位为分。
     * @param string $currency 货币类型
     * @param string $payer_currency 用户支付币种
     *
     * @return void
     */
    public function setAmount(int $total, int $payer_total, $currency, $payer_currency)
    {
        $this->params['amount'] = array(
            'total' => $total,
            'payer_total' => $payer_total,
            'currency' => $currency,
            'payer_currency' => $payer_currency,
        );
    }

    /**
     * 设置场景信息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string  $device_id 商户端设备号
     * 
     * @return void
     */
    public function setSceneInfo($device_id)
    {
        $this->params['scene_info']['device_id'] = $device_id;
    }

    /**
     * 设置优惠功能
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $coupon_id 券ID
     * @param integer $amount 优惠券面额
     * @param array $goods_detail 单品列表
     * @param string $name 优惠名称
     * @param string $scope 优惠范围
     * @param string $type 优惠类型
     * @param string $stock_id 活动ID
     * @param integer $wechatpay_contribute 微信出资
     * @param integer $merchant_contribute 商户出资
     * @param integer $other_contribute 其他出资
     * @param string $currency 优惠币种
     *
     * @return void
     */
    public function addPromotionDetail($coupon_id, int $amount, array $goods_detail = array(), $name = '', $scope = '', $type = '', $stock_id = '', int $wechatpay_contribute = 0, int $merchant_contribute = 0, int $other_contribute = 0, $currency = '')
    {
        $this->params['promotion_detail'][] = array(
            'coupon_id' => $coupon_id,
            'amount' => $amount,
            'name' => $name,
            'scope' => $scope,
            'type' => $type,
            'stock_id' => $stock_id,
            'wechatpay_contribute' => $wechatpay_contribute,
            'merchant_contribute' => $merchant_contribute,
            'other_contribute' => $other_contribute,
            'currency' => $currency,
            'goods_detail' => $goods_detail
        );
    }

    /**
     * 构建商品信息
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-22
     *
     * @param string $goods_id 商品编码[1,32]
     * @param integer $quantity 用户购买的数量
     * @param integer $unit_price 商品单价，单位为分
     * @param integer $discount_amount 商品优惠金额
     * @param string $goods_remark 商品备注信息
     *
     * @return void
     */
    public function buildGoodsDetail($goods_id, int $quantity, int $unit_price, int $discount_amount, $goods_remark = '')
    {
        return array(
            'goods_id' => $goods_id,
            'quantity' => $quantity,
            'unit_price' => $unit_price,
            'discount_amount' => $discount_amount,
            'goods_remark' => $goods_remark,
        );
    }

    /**
     * 转数组
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
