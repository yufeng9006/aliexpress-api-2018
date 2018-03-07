<?php

/**
 * Class GetlogisticsSellerAddresses
 *
 * aliexpress.logistics.redefining.getlogisticsselleraddresses (获取卖家地址)
 * @link   http://127.0.0.1:4321/logistics?method=GetlogisticsSellerAddresses
 *
 */
class GetlogisticsSellerAddresses extends BaseAbstract
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
        $req = new AliexpressLogisticsRedefiningGetlogisticsselleraddressesRequest;
        $req->setSellerAddressQuery("sender,pickup,refund");
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}