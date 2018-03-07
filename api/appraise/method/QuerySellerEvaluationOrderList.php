<?php

/**
 * Class QuerySellerEvaluationOrderList
 *
 * aliexpress.appraise.redefining.querysellerevaluationorderlist (查询待卖家评价的订单信息)
 * @link   http://127.0.0.1:4321/appraise?method=QuerySellerEvaluationOrderList
 *
 */
class QuerySellerEvaluationOrderList extends BaseAbstract
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
        $req = new AliexpressAppraiseRedefiningQuerysellerevaluationorderlistRequest;
        $query_d_t_o = $this->getSellerEvaluationOpenQueryDto($request);
        $req->setQueryDTO(json_encode($query_d_t_o));
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}