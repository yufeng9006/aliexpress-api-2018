<?php

/**
 * Class FindOrderListQuery
 *
 * aliexpress.trade.redefining.findorderlistquery (交易订单列表查询)
 * @link   http://127.0.0.1:4321/order/FindOrderListQuery
 *
 */
class FindOrderListQuery extends BaseAbstract
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
        $req = new AliexpressTradeRedefiningFindorderlistqueryRequest;
        $param1 = $this->getOrderListRequest($request);

        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req, $this->sessionKey);

        echo $this->getResultJson($resp);exit;

    }







}