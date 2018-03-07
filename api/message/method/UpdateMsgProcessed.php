<?php

/**
 * Class UpdateMsgProcessed
 *
 * aliexpress.message.redefining.versiontwo.updatemsgread (V2.0内信/订单留言更新已读)
 * @link   http://127.0.0.1:4321/message?method=UpdateMsgProcessed
 *
 */
class UpdateMsgProcessed extends BaseAbstract
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
        $req = new AliexpressMessageRedefiningVersiontwoUpdatemsgreadRequest;
        $param1 = $this->getParam1($request);

        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}