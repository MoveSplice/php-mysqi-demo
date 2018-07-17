<?php

namespace App\Http\Controllers\Wx;

use Illuminate\Http\Request;
use App\Model\Wx\NativeOrder;
use App\Http\Controllers\Wx\BaseApiController;


class NotifyController extends BaseApiController
{
    protected $nativeOrder;

    public function __construct(){
        parent::__construct();
        $this->nativeOrder = new NativeOrder();
    }

    //微信支付通知接口
    public function notify(){
        //初始化数据并做日志管理
        $xml = file_get_contents('php://input');
        file_put_contents('notify/'.md5(uniqid()).'.txt',$xml);//日志记录
        $this->init($xml);
        file_put_contents('notify/'.time().'.txt',$this->values);

        //回调请求失败
        if ($this->values['return_code'] != 'SUCCESS'){
            return $this->notifyError();
        }

        //业务逻辑处理错误
        if ($this->values['result_code'] != 'SUCCESS'){
            //TODO:使用日志记录错误或数据库
            return $this->notifyError();
        }

        //判断金额
        $order = $this->nativeOrder->where('out_trade_no',$this->values['out_trade_no'])->first();
        if ($order->total_fee != $this->values['total_fee']){
            return $this->notifyError();
        }

        //根据订单号改变状态
        $order->update(['pay_status'=>NativeOrder::ORDER_STATUS_KEY['已支付']]);
        return $this->notifySuccess();
    }
}
