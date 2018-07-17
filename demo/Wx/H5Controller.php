<?php

namespace App\Http\Controllers\Wx;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Wx\BaseApiController;

class H5Controller extends BaseApiController
{

    public function __construct(){
        parent::__construct();
    }

    public function createOrder(Request $request){
        //创建数据
        $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
        //$this->setSubMchId($sub_mch_id);//设置子商户号
        $this->setNonceStr();//设置随机字符串
        $this->setBody('iphone 6');//设置商品描述
        $this->setOutTradeNo();//设置商户订单号
        $this->setTotalFee(10);//设置订单总金额，单位为分
        $this->setSpbillCreateIp();//设置终端ip?
        $this->setNotifyUrl('http://aaa.74bee.com/wx/notify');//异步回调通知地址?
        $this->setTradeType('MWEB');//设置交易类型
        $this->setProductId(4);//设置商品ID
        $this->setSceneInfo('{"h5_info": {"type":"Wap","wap_url": "http://aaa.74bee.com","wap_name": "永旗电子马"}}');//设置场景
        $this->setSign();//生成签名


        $this->nativeOrder->storeOrder($this->values);
        //请求接口并处理返回数据
        $xml = $this->toXml();

        $response = $this->postXmlCurl($xml, $url, false, 6);
        $result = $this->init($response);

        //下单失败
        if ($result['return_code'] != 'SUCCESS'){
            return ajaxReturn(501,$result['return_msg']);
        }
        //具体报错
        if ($result['result_code'] != 'SUCCESS'){
            return ajaxReturn(502,$result['err_code_des']);
        }

        return ajaxReturn(200,'下单成功',$result);
    }
}
