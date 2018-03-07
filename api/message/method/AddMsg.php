<?php

/**
 * Class AddMsg
 *
 * aliexpress.message.redefining.versiontwo.addmsg (V2.0新增站内信/订单留言)
 * @link   http://127.0.0.1:4321/message?method=AddMsg
 *
 */
class AddMsg extends BaseAbstract
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

        $req = new AliexpressMessageRedefiningVersiontwoAddmsgRequest;
        $create_param = $this->getDto($request);
        $req->setCreateParam(json_encode($create_param));
        $resp = $c->execute($req, $this->sessionKey);

        echo $this->getResultJson($resp);exit;

    }







}