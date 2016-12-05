<?php
require_once "./public/base/jssdk.php";
$jssdk = new JSSDK("wxfc27d997894a4067", "9cc2da349c732e46069d3cc71f72787a");
$signPackage = $jssdk->getSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./public/css/style.css">
  <title>ibunao</title>
</head>
<body>
    <h3 id="menu-image">图像接口</h3>
    <span class="desc">拍照或从手机相册中选图接口</span>
    <button class="btn btn_primary" id="chooseImage">chooseImage</button>
    <span class="desc">预览图片接口</span>
    <button class="btn btn_primary" id="previewImage">previewImage</button>
    <span class="desc">上传图片接口</span>
    <button class="btn btn_primary" id="uploadImage">uploadImage</button>
    <span class="desc">下载图片接口</span>
    <button class="btn btn_primary" id="downloadImage">downloadImage</button>

    <h3 id="menu-voice">音频接口</h3>
    <span class="desc">开始录音接口</span>
    <button class="btn btn_primary" id="startRecord">startRecord</button>
    <span class="desc">停止录音接口</span>
    <button class="btn btn_primary" id="stopRecord">stopRecord</button>
    <span class="desc">播放语音接口</span>
    <button class="btn btn_primary" id="playVoice">playVoice</button>
    <span class="desc">暂停播放接口</span>
    <button class="btn btn_primary" id="pauseVoice">pauseVoice</button>
    <span class="desc">停止播放接口</span>
    <button class="btn btn_primary" id="stopVoice">stopVoice</button>
    <span class="desc">上传语音接口</span>
    <button class="btn btn_primary" id="uploadVoice">uploadVoice</button>
    <span class="desc">下载语音接口</span>
    <button class="btn btn_primary" id="downloadVoice">downloadVoice</button>

    <h3 id="menu-smart">智能接口</h3>
    <span class="desc">识别音频并返回识别结果接口</span>
    <button class="btn btn_primary" id="translateVoice">translateVoice</button>

    <h3 id="menu-device">设备信息接口</h3>
    <span class="desc">获取网络状态接口</span>
    <button class="btn btn_primary" id="getNetworkType">getNetworkType</button>

    <h3 id="menu-location">地理位置接口</h3>
    <span class="desc">使用微信内置地图查看位置接口</span>
    <button class="btn btn_primary" id="openLocation">openLocation</button>
    <span class="desc">获取地理位置接口</span>
    <button class="btn btn_primary" id="getLocation">getLocation</button>

    <h3 id="menu-webview">界面操作接口</h3>
    <span class="desc">隐藏右上角菜单接口</span>
    <button class="btn btn_primary" id="hideOptionMenu">hideOptionMenu</button>
    <span class="desc">显示右上角菜单接口</span>
    <button class="btn btn_primary" id="showOptionMenu">showOptionMenu</button>
    <span class="desc">关闭当前网页窗口接口</span>
    <button class="btn btn_primary" id="closeWindow">closeWindow</button>
    <span class="desc">批量隐藏功能按钮接口</span>
    <button class="btn btn_primary" id="hideMenuItems">hideMenuItems</button>
    <span class="desc">批量显示功能按钮接口</span>
    <button class="btn btn_primary" id="showMenuItems">showMenuItems</button>
    <span class="desc">隐藏所有非基础按钮接口</span>
    <button class="btn btn_primary" id="hideAllNonBaseMenuItem">hideAllNonBaseMenuItem</button>
    <span class="desc">显示所有功能按钮接口</span>
    <button class="btn btn_primary" id="showAllNonBaseMenuItem">showAllNonBaseMenuItem</button>

    <h3 id="menu-scan">微信扫一扫</h3>
    <span class="desc">调起微信扫一扫接口</span>
    <button class="btn btn_primary" id="scanQRCode0">scanQRCode(微信处理结果)</button>
    <button class="btn btn_primary" id="scanQRCode1">scanQRCode(直接返回结果)</button>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
     'checkJsApi',//判断当前客户端是否支持指定js接口
/*     'onMenuShareTimeline',//分享朋友圈接口
     'onMenuShareAppMessage',//分享到朋友接口
     'onMenuShareQQ',//分享到qq接口
     'onMenuShareWeibo',//分享到微博接口
     'onMenuShareQZone',//分享到qq空间接口
     */
     'hideMenuItems',//批量隐藏功能按键接口
     'showMenuItems',//批量显示功能按钮接口
     'hideAllNonBaseMenuItem',//隐藏所有非基础按钮接口
     'showAllNonBaseMenuItem',//显示
     'translateVoice',//识别音频并返回识别结果接口
     'startRecord',//开始录音接口
     'stopRecord',//停止录音接口
     // 'onVoiceRecordEnd',这个好像没有
     'playVoice',
     'onVoicePlayEnd',
     'pauseVoice',
     'stopVoice',
     'uploadVoice',
     'downloadVoice',
     'chooseImage',
     'previewImage',
     'uploadImage',
     'downloadImage',
     'getNetworkType',
     'openLocation',
     'getLocation',
     'hideOptionMenu',
     'showOptionMenu',
     'closeWindow',
     'scanQRCode',
     'chooseWXPay',
     'openProductSpecificView',
     'addCard',
     'chooseCard',
     'openCard'
    ]
  });
  // wx.ready(function () {
  //   // 在这里调用 API
  // });
</script>
<script src="./public/js/wxtest.js">js文件中使用接口</script>
</html>
