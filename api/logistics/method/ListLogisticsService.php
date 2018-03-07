<?php

/**
 * Class ListLogisticsService
 *
 * aliexpress.logistics.redefining.listlogisticsservice (列出平台所支持的物流服务列表)
 * @link   http://127.0.0.1:4321/logistics?method=ListLogisticsService
 *
 */
class ListLogisticsService extends BaseAbstract
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
        $req = new AliexpressLogisticsRedefiningListlogisticsserviceRequest;
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}