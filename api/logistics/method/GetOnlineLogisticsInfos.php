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

        $req = new AliexpressLogisticsRedefiningGetprintinfosRequest;
        if(isset($request['print_detail'])) {
            $req->setPrintDetail("print_detail");
        }
        $warehouse_order_query_d_t_os = new AeopWarehouseOrderQueryPdfRequest;
        if(isset($request['id'])){
            $warehouse_order_query_d_t_os->id=$request['extend_data'];
        }
        if(isset($request['international_logistics_id'])){
            $warehouse_order_query_d_t_os->international_logistics_id=$request['extend_data'];
        }
        $req->setWarehouseOrderQueryDTOs(json_encode($warehouse_order_query_d_t_os));

        $resp = $c->execute($req, $this->sessionKey);
        echo $this->getResultJson($resp);exit;

    }







}