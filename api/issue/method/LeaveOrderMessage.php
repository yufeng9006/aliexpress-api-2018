<?php

/**
 * Class LeaveOrderMessage
 *
 * aliexpress.issue.redefining.leaveordermessage (纠纷中卖家新增订单留言)
 * @link   http://127.0.0.1:4321/issue?method=LeaveOrderMessage
 *
 */
class LeaveOrderMessage extends BaseAbstract
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
        $req = new AliexpressIssueRedefiningLeaveordermessageRequest;;
        $param1 = $this->getParam1($request);

        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req);
        echo $this->getResultJson($resp);exit;

    }







}