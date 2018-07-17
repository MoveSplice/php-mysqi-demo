<?php

namespace App\Http\Controllers\Wx;

use Illuminate\Http\Request;
use App\Http\Controllers\Wx\BaseApiController;


class JsapiController extends BaseApiController
{
    public function __construct(){
        parent::__construct();
    }

    public function createOrder(Request $request){
        $body = $request->body;
        $total_fee = $request->total_fee;
        $product_id = $request->product_id;
        //创建数据
        $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
        //$this->setSubMchId($sub_mch_id);//设置子商户号
        $this->setNonceStr();//设置随机字符串
        $this->setBody($body);//设置商品描述
        $this->setOutTradeNo();//设置商户订单号
        $this->setTotalFee($total_fee);//设置订单总金额，单位为分
        $this->setSpbillCreateIp();//设置终端ip?
        $this->setNotifyUrl('http://aaa.74bee.com/wx/notify');//异步回调通知地址?
        $this->setTradeType('JSAPI');//设置交易类型
        $this->setProductId($product_id);//设置商品ID
        $this->setOpenid($this->GetOpenid());//设置用户标识.怎么获取微信用户的openid？
        $this->setSign();//生成签名


        $this->nativeOrder->storeOrder($this->values);
        //请求接口并处理返回数据
        $xml = $this->toXml();

        $response = $this->postXmlCurl($xml, $url, false, 6);
        $result = $this->init($response);

        $jsApiParameters = $this->GetJsApiParameters($result);//设置确认支付的参数
        //dd($jsApiParameters);
        $editAddress = $this->GetEditAddressParameters();//获取共享收货地址js函数参数

        return view('wx.jsapi_pay',compact('jsApiParameters','editAddress'));
    }
}
