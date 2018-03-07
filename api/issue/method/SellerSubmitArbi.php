<?php

/**
 * Class SellerSubmitArbi
 *
 * aliexpress.issue.redefining.sellersubmitarbi (卖家提交纠纷仲裁)
 * @link   http://127.0.0.1:4321/issue?method=SellerSubmitArbi
 *
 */
class SellerSubmitArbi extends BaseAbstract
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
        $req = new AliexpressIssueRedefiningSellersubmitarbiRequest;;
        $param1 = $this->getParam1($request);

        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}