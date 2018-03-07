<?php

/**
 * Class GetOnlineLogisticsInfos
 *
 * aliexpress.logistics.redefining.getprintinfo (获取线上发货标签)
 * @link   http://127.0.0.1:4321/logistics?method=GetOnlineLogisticsInfos
 *
 */
class GetOnlineLogisticsInfo extends BaseAbstract
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
        $req = new AliexpressLogisticsRedefiningGetprintinfoRequest;
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}