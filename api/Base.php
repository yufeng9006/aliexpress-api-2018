<?php

require_once('taobao_sdk/TopSdk.php');


abstract class BaseAbstract
{

    const RESULT_TYPE = 'json';

    public $appKey='24757764';

    public $secret='83507f51edfacc767d8d66fe214bf9c9';

    public $sessionKey='50002700e45kyExnqA82nxihtgUTHBBEq6OyTdIhSk1DsvHF1E7f2LL9U1d482961Ct';

    public $result = [
        'result_success'    => '101',
        'result_desc'       => '缺少参数',
        'result_data'              => []
    ];

    /**
     * Top Client
     * @var TopClient
     */
    public $c;

    public function __construct($appKey='', $secret='')
    {

        if(($appKey === '' && $this->appKey===null) || ($secret === '' && $this->secret===null )) {
            $message = '缺少参数 : appKey->'.$appKey.' , secret->'.$secret.PHP_EOL;
            return array_merge($this->result, ['message'=>$message]);
        }

        if($this->appKey === null) $this->appKey = $appKey;
        if($this->secret === null) $this->secret = $appKey;

    }

    /**
     * 处理数据，完成后发送请求数据
     * @return mixed
     */
    abstract public function respond();

    /**
     * 加载 top client
     * @return TopClient
     */
    public function loadC()
    {
        $c = new TopClient;
        $c->format = 'json';
        $c->appkey = $this->appKey;
        $c->secretKey = $this->secret;
        $this->c = $c;
        return $this->c;
    }

    /**
     *  定义返回数据格式
     * @param Obj $jsonObj
     * @param $status
     * @param string $message
     * @return string
     */
    public function getResultJson($jsonObj, $status=1, $message='')
    {
        if(empty($jsonObj) === false){
            $this->result['result_data'] = json_encode($jsonObj, JSON_UNESCAPED_UNICODE);
        }

        $this->result['result_success'] = $status?'true':'false';
        $this->result['result_desc'] = ($message !== '') ? $message : ($status?'请求成功!': $this->result['result_desc']);

        if($message !== ''){
            $this->result['result_desc'] = $message;

        }
        return json_encode($this->result, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $request
     * @return TpOpenSingleOrderQuery
     */
    public function getParam1($request=[])
    {
        $param1 = new TpOpenSingleOrderQuery;
        $request['format'] = self::RESULT_TYPE;

        foreach($request as $k=>$v) {
            //  对象是否含有某属性，如果含有那么就赋值
            if(property_exists($param1, $k) === true){
                $param1->$k = $v;
            }
        }
        return $param1;
    }

    public function getOrderListRequest($request=[])
    {
        $param1 = new OrderListRequest;
        $request['format'] = self::RESULT_TYPE;

        foreach($request as $k=>$v) {
            //  对象是否含有某属性，如果含有那么就赋值
            if(property_exists($param1, $k) === true){
                $param1->$k = $v;
            }
        }
        return $param1;
    }

    /**
     * @return RelationQueryDto
     */
    public function getRelationQueryDto($request=[])
    {
        $param1 = new RelationQueryDto;
        $request['format'] = self::RESULT_TYPE;

        foreach($request as $k=>$v) {
            //  对象是否含有某属性，如果含有那么就赋值
            if(property_exists($param1, $k) === true){
                $param1->$k = $v;
            }
        }
        return $param1;
    }

    public function getDto($request=[])
    {

        $param1 = new CreateDto();
        $request['format'] = self::RESULT_TYPE;

        foreach($request as $k=>$v) {
            //  对象是否含有某属性，如果含有那么就赋值
            if(property_exists($param1, $k) === true){
                $param1->$k = $v;
            }
        }
        return $param1;
    }

    public function getEvaluationFeedbackDto($request=[])
    {
        $param1 = new EvaluationFeedbackDto();
        $request['format'] = self::RESULT_TYPE;

        foreach($request as $k=>$v) {
            //  对象是否含有某属性，如果含有那么就赋值
            if(property_exists($param1, $k) === true){
                $param1->$k = $v;
            }
        }
        return $param1;
    }

    public function getSellerEvaluationOpenQueryDto($request=[])
    {
        $param1 = new SellerEvaluationOpenQueryDto();
        $request['format'] = self::RESULT_TYPE;

        foreach($request as $k=>$v) {
            //  对象是否含有某属性，如果含有那么就赋值
            if(property_exists($param1, $k) === true){
                $param1->$k = $v;
            }
        }
        return $param1;
    }

}

