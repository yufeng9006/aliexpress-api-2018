<?php

/**
 * Class FindaeProductById
 *
 * aliexpress.postproduct.redefining.findaeproductbyid (获取单个产品信息)
 * @link   http://127.0.0.1:4321/product?method=FindaeProductById
 *
 */
class FindaeProductById extends BaseAbstract
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
        $req = new AliexpressPostproductRedefiningFindaeproductbyidRequest;
        $req->setProductId($request['productId']);
        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}