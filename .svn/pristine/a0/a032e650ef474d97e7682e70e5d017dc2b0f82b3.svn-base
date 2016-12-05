<?php
//将文件保存到自己的服务器
/**
* 保存文件
*/
include_once './jssdk.php';
$accessToken = JSSDK::$token;
// $accessToken = 'bac';
$media_id=$_GET['media_id'];
// $media_id='abc';
saveResource($media_id,$accessToken);



/**
 * 将数据保存到自己的服务器上
 * @param  [type] $media_id    [description]
 * @param  [type] $accessToken [description]
 * @return [type]              [description]
 */
function saveResource($media_id,$accessToken)
{
	// 要存在你服务器的位置
	$targetName = '../upload/'.date('YmdHis').'.jpg';
	$ch = curl_init("http://file.api.weixin.qq.com/cgi-bin/media/get?access_token={$accessToken}&media_id={$media_id}");
	echo "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token={$accessToken}&media_id={$media_id}";
	$fp = fopen($targetName, 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
}
