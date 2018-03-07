<?php

/**
 * Class FindLoanListQuery
 *
 * aliexpress.trade.redefining.findloanlistquery (查询订单放款信息)
 * @link   http://127.0.0.1:4321/order/FindLoanListQuery
 *
 */
class FindLoanListQuery extends BaseAbstract
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
        $req = new AliexpressTradeRedefiningFindloanlistqueryRequest;
        $param1 = $this->getFundloanRequest($request);

        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req, $this->sessionKey);

        echo $this->getResultJson($resp);exit;

    }







}