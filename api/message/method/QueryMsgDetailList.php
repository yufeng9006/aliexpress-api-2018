<?php

/**
 * Class QueryMsgDetailList
 *
 * aliexpress.message.redefining.versiontwo.querymsgdetaillist (V2.0站内信/订单留言查询详情列表)
 * @link   http://127.0.0.1:4321/message?method=QueryMsgDetailList
 *
 */
class QueryMsgDetailList extends BaseAbstract
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
        $req = new AliexpressMessageRedefiningVersiontwoQuerymsgdetaillistRequest;
        $param1 = $this->getParam1($request);

        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}