<?php

namespace Nece\Brawl\Payment;

/**
 * 支付发起参数
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-19
 */
class PrepayParamter
{
    public $app_id;
    public $open_id;

    public $total;
    public $trade_no;
    public $notify_url;

    public $attach = '';
    public $description = '';
    public $currency = 'CNY';
    public $time_expire = 3600;
}
