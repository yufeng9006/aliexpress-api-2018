<?php

/**
 * Class QueryMsgRelationList
 *
 * aliexpress.message.redefining.versiontwo.querymsgrelationlist (V2.0站内信/订单留言获取关系列表)
 * @link   http://127.0.0.1:4321/message?method=QueryMsgRelationList
 *
 */
class QueryMsgRelationList extends BaseAbstract
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

        $req = new AliexpressMessageRedefiningVersiontwoQuerymsgrelationlistRequest;
        $query = $this->getRelationQueryDto($request);
        $req->setQuery(json_encode($query));
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}