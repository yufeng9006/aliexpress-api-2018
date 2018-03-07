<?php

include('api/Base.php');

define('WEB_PATH', __DIR__);

define('API_PATH', WEB_PATH.'/api');


$pathInfo = trim($_SERVER['PATH_INFO'], '/');
list($app, $method) = explode('/', $pathInfo);

$result = json_encode(['code'=>'400', 'message'=>'接口请求地址不存在'], JSON_UNESCAPED_UNICODE);

if($app === '' || $method === '') {
    echo $result.PHP_EOL;exit;
}

include(API_PATH.'/'.$app.'/method/'.$method.'.php');
$apiObj = new $method();
$result = $apiObj->respond($_REQUEST);
echo json_encode($result);exit;

