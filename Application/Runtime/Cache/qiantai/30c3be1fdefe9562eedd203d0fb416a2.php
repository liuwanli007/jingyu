<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" name="viewport">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta content="telphone=no" name="format-detection">
  <link media="all" href="http://www.w3cplus.com/mcommon/reset.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="/shixun/Public/qiantai/jquery.min.js"></script>
    <script src="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>

  <style type="text/css">
  .demo1{ height: 100px; width: 100px; margin: 0;position:absolute;left:40px;bottom:250px}
  .demo2{ height: 100px; width: 100px; margin: 0;position:absolute;left:130px;bottom:100px}
  .demo3{ height: 100px; width: 100px; margin: 0;position:absolute;right:40px;bottom:250px}
 .left-in{
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes left-in {
  0% {
    -webkit-transform: translate3d(2000px, 0, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
  }
}
@keyframes left-in {
  0% {
    transform: translate3d(2000px, 0, 0);
  }

  100% {
    transform: translate3d(0, 0, 0);
  }
}
.left-in {
  -webkit-animation-name: left-in;
  animation-name: left-in;
}
    /**/
  .right-in{
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  @-webkit-keyframes right-in {
    0% {
      -webkit-transform: translate3d(-800px, 0, 0);
    }

    100% {
      -webkit-transform: translate3d(0, 0, 0);
    }
  }
  @keyframes right-in {
    0% {
      transform: translate3d(-800px, 0, 0);
    }

    100% {
      transform: translate3d(0, 0, 0);
    }
  }
  .right-in {
    -webkit-animation-name: right-in;
    animation-name: right-in;
  }
 #button {position: fixed;
   right: 20px;
   bottom: 10px; 
   width:100%;
   height:30px}


  </style>
    <script type="text/javascript">
        $(document).ready(function(){

                alert('adfasdfsdaf');
        });
    </script>
</head>
<body>
    <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png);height:54px" data-position="fixed">
        <a rel="external" href="<?php echo U('qiantai/dz/index');?>" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
        <h4 style="color:white;margin-top: 5px">投稿</h4>
    </div>
   <div class="demo1 left-in">
     <img src="/shixun/Public/qiantai/images/14.png" width="100%" >
     <p align="center">发段子</p>
   </div>
   <div class="demo2 left-in">
     <img src="/shixun/Public/qiantai/images/15.png" width="100%">
     <p align="center">发照片</p>
   </div>
   <div class="demo3 right-in">
     <img src="/shixun/Public/qiantai/images/13.png" width="100%" height="100px">
     <p align="center">发视频</p>
   </div>

    </div>

            <a  rel="external" href="<?php echo U('qiantai/dz/index');?>" data-role="button" STYLE="margin-top:460px " data-corners="false"> 返回</a>


</body>   
</html>