<?php

namespace App\Http\Controllers\Wx;

use Illuminate\Http\Request;
use App\Model\Wx\NativeOrder;
use App\Http\Controllers\Wx\BaseApiController;

class QueryOrderController extends BaseApiController
{
    protected $nativeOrder;

    public function __construct(){
        parent::__construct();
        $this->nativeOrder = new NativeOrder();
    }

    //查询订单
    public function query(Request $request){
        $url = 'https://api.mch.weixin.qq.com/pay/orderquery';
        $this->setNonceStr();//设置随机字符串
        $this->setOutTradeNo('150763443120180615115227');
        $this->setSign();//生成签名
        $xml = $this->toXml();
        $response = $this->postXmlCurl($xml, $url, false, 6);
        $this->init($response);

        //根据订单号改变状态
        if ($this->values['return_code'] == 'SUCCESS' && $this->values['result_code'] == 'SUCCESS' && $this->values['trade_state'] == 'SUCCESS'){
            //判断金额
            $order = $this->nativeOrder->where('out_trade_no',$this->values['out_trade_no'])->first();

            if ($order->total_fee != $this->values['total_fee']){
                return ajaxReturn(501,'订单金额错误');
            }
            $this->nativeOrder->where('out_trade_no',$this->values['out_trade_no'])->update(['pay_status'=>NativeOrder::ORDER_STATUS_KEY['已支付']]);
        }

        return ajaxReturn(200,'查询成功',$this->values);
    }
}
