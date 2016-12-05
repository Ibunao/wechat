<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxfc27d997894a4067", "9cc2da349c732e46069d3cc71f72787a");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ibunao</title>
</head>
<body>
  
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
<script src="js/wxibunao.js"> </script>
</html>
