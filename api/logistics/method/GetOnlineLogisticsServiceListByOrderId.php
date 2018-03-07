<?php

/**
 * Class GetOnlineLogisticsServiceListByOrderId
 *
 * aliexpress.logistics.redefining.getonlinelogisticsservicelistbyorderid (根据交易订单获取线上发货物流服务列表)
 * @link   http://127.0.0.1:4321/logistics?method=GetOnlineLogisticsServiceListByOrderId
 *
 */
class GetOnlineLogisticsServiceListByOrderId extends BaseAbstract
{

    public function __construct()
    {
        parent::__construct();

    }

    /**
     * 发送 请求数据
     *
     * @param array $request
     * @return mixed|void
     */
    public function respond($request=[])
    {
        $c = $this->loadC();
        $req = new AliexpressLogisticsRedefiningGetonlinelogisticsservicelistbyorderidRequest;
        $req->setGoodsWidth($request['goods_width']);
        $req->setGoodsHeight($request['goods_height']);
        $req->setGoodsWeight($request['goods_weight']);
        $req->setGoodsLength($request['goods_length']);
        $req->setOrderId($request['order_id']);
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}