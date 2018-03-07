<?php

/**
 * Class SaveSellerFeedback
 *
 * aliexpress.appraise.redefining.savesellerfeedback (卖家对未评价的订单进行评价)
 * @link   http://127.0.0.1:4321/appraise?method=SaveSellerFeedback
 *
 */
class SaveSellerFeedback extends BaseAbstract
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
        $req = new AliexpressAppraiseRedefiningSavesellerfeedbackRequest;
        $param1 = $this->getEvaluationFeedbackDto($request);
        $req->setParam1(json_encode($param1));
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}