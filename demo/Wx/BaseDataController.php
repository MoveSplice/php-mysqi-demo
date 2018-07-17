<?php

namespace App\Http\Controllers\Wx;

use Illuminate\Http\Request;
use App\Model\Wx\NativeOrder;
use App\Http\Controllers\Controller;

class BaseDataController extends Controller
{
    //api参数
    protected $values = array();
    protected $nativeOrder;

    public function __construct(){
        $this->values['appid'] = config('wx.appid');//设置公众账号ID
        $this->values['mch_id'] = config('wx.mch_id');//设置商户号
        //$this->values['key'] = config('wx.key');//设置api密钥
        //$this->values['appsecret'] = config('wx.appsecret');//设置公众账号ID密钥
        $this->nativeOrder = new NativeOrder();
    }

    public function setAppid($appid){
        $this->values['appId'] = $appid;
        return;
    }

    //设置子商户号
    public function setSubMchId($sub_mch_id){
        $this->values['sub_mch_id'] = $sub_mch_id;
        return;
    }

    //生成随机字符串
    public function setNonceStr($length = 32)
    {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str ="";
        for ( $i = 0; $i < $length; $i++ )  {
            $str .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        $this->values['nonce_str'] = $str;
        return;
    }

    //设置签名
    public function setSign()
    {
        $sign = $this->makeSign();
        $this->values['sign'] = $sign;
        return;
    }
    //生成签名
    public function makeSign()
    {
        //签名步骤一：按字典序排序参数
        ksort($this->values);
        $string = $this->toUrlParams();
        //签名步骤二：在string后加入KEY
        $string = $string . "&key=".config('wx.key');
        //签名步骤三：MD5加密
        $string = md5($string);
        //签名步骤四：所有字符转为大写
        $result = strtoupper($string);
        return $result;
    }
    //格式化参数格式化成url参数
    public function toUrlParams()
    {
        $buff = "";
        foreach ($this->values as $k => $v)
        {
            if($k != "sign" && $v != "" && !is_array($v)){
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    public function toUrlCodeParams($urlObj)
    {
        $buff = "";
        foreach ($urlObj as $k => $v)
        {
            if($k != "sign"){
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    //设置商品描述
    public function setBody($describe){
        $this->values['body'] = $describe;
        return;
    }

    //设置商品订单号
    public function setOutTradeNo($no = null){
        if ($no){
            $this->values['out_trade_no'] = $no;
        }else{
            $this->values['out_trade_no'] = config('wx.mch_id').date("YmdHis");
        }
        return;
    }

    //设置商品订单号
    public function setOutTradeNoV($order){
        $this->values['out_trade_no'] = $order;
        return;
    }

    //设置订单总金额
    public function setTotalFee($value){
        $this->values['total_fee'] = $value;
        return;
    }

    //获取终端ip
    public function setSpbillCreateIp(){
        $this->values['spbill_create_ip'] = $_SERVER['REMOTE_ADDR'];
        return;
    }

    //异步接收微信支付结果通知的回调地址，通知url必须为外网可访问的url，不能携带参数。
    public function setNotifyUrl($url){
        $this->values['notify_url'] = $url;
        return;
    }

    //设置交易类型
    public function setTradeType($type){
        $this->values['trade_type'] = $type;
        return;
    }

    //设置商品id
    public function setProductId($product_id){
        $this->values['product_id'] = $product_id;
        return;
    }

    //设置微信订单号
    public function setTransactionId($transaction_id){
        $this->values['transaction_id'] = $transaction_id;
        return;
    }

    //设置openId
    public function setOpenid($openid){
        $this->values['openid'] = $openid;
        return;
    }

    //设置场景信息
    public function setSceneInfo($scene_info){
        $this->values['scene_info'] = $scene_info;
        return;
    }

    public function setTimeStamp($time){
        $this->values['timeStamp'] = $time;
        return;
    }

    public function setJsNonceStr($length = 32){
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str ="";
        for ( $i = 0; $i < $length; $i++ )  {
            $str .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        $this->values['nonceStr'] = $str;
        return;
    }

    public function setPackage($package){
        $this->values['package'] = $package;
        return;
    }

    public function setSignType($signType){
        $this->values['signType'] = $signType;
        return;
    }

    public function setPaySign($paySign){
        $this->values['paySign'] = $paySign;
        return;
    }
}
