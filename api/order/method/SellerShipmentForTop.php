<?php

/**
 * Class SellerShipmentForTop
 *
 * aliexpress.trade.redefining.SellerShipmentForTop (交易订单详情查询)
 * @link   http://127.0.0.1:4321/order?method=SellerShipmentForTop
 *
 */
class SellerShipmentForTop extends BaseAbstract
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
        $req = new AliexpressTradeRedefiningFindorderbyidRequest;

        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;


    }







}