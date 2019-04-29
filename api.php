<?php

//对接文件API【开发者：地狱/江筱雨】
//QQ:2031464675
//本文件引用亿乐官方提供API所作

$params =  array(
	'token' => $_POST['id'], //账户
	'key' => $_POST['key'],
	'url' => $_POST['url'],
	'gid' => $_POST['gid'],//商品ID
	'num' => $_POST['num'],//下单数量
	'value1'=> $_POST['value1'],
	'value2'=> $_POST['value2'],
	'value3'=> $_POST['value3'],
	'value4'=> $_POST['value4']
);
$msg = processorder($params);
echo $msg;

function getSign($param, $key) {
    $signPars = "";
    ksort($param);
    foreach ($param as $k => $v) {
        if ("sign" != $k && "" != $v) {
            $signPars .= $k . "=" . $v . "&";
        }
    }
    $signPars = trim($signPars, '&');
    $signPars .= $key;
    $sign = md5($signPars);
    return $sign;
}

function yilepost($url,$data){ // 模拟提交数据函数
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
    $tmpInfo = curl_exec($curl); // 执行操作
    if (curl_errno($curl)) {
        echo 'Errno'.curl_error($curl);//捕抓异常
    }
    curl_close($curl); // 关闭CURL会话
    return $tmpInfo; // 返回数据，json格式
}

function processorder($info){
	if(!empty($info)){
      $timestamp = time();
		$params =  array(
		'api_token' => $info['token'], //账户
		'timestamp' => $timestamp,//密码
		'gid' => $info['gid'],//商品ID
		'num' => $info['num'],//下单数量
		'value1'=> $info['value1'],
		'value2'=> $info['value2'],
		'value3'=> $info['value3'],
		'value4'=> $info['value4']
	);
	$sign = getSign($params, $info['key']);
	$params1 =  array(
		'api_token' => $info['token'], //账户
		'timestamp' => $timestamp,//密码
		'sign' => $sign,
		'gid' => $info['gid'],//商品ID
		'num' => $info['num'],//下单数量
		'value1'=> $info['value1'],
		'value2'=> $info['value2'],
		'value3'=> $info['value3'],
		'value4'=> $info['value4']
	);
	$url = 'http://'.$info['url'].'.api.94sq.cn/api/order';
	$yilep = yilepost($url, $params1);
	return $yilep;
	}else{
		return '下单资料错误！！！';
	}
}
