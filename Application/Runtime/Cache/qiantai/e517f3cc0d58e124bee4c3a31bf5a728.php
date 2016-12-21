<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>课程设计</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/??sm.min.css,sm-extend.min.css">
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/??sm.min.js,sm-extend.min.js' charset='utf-8'></script>
    <style>
        .ul1 li{
            border:1px solid grey;
            border-top:none;
            border-left:none;
            border-right:none;
            list-style-type:none;
            line-height:50px
        }
    </style>


</head>
<body>
     <div class="page" >
        <header class="bar bar-nav" style="background-color:lightblue" >
            <a class="icon icon-left pull-left open-panel" href="<?php echo U('qiantai/dz/index');?>"></a>
            <h2 class="title">设置</h2>
        </header>

        
        <div class="content">
            <div class="content-block-title">基本设置</div>
            <div class="list-block">
                <ul>
                    <li class="item-content">
                        <div class="item-inner">
                            <div class="item-title">字体大小</div>
                            <div class="item-after">大&nbsp;&nbsp;&nbsp;中&nbsp;&nbsp;&nbsp;小</div>
                        </div>
                    </li>
                     <li class="item-content">
                        <div class="item-inner">
                            <div class="item-title">夜间模式</div>
                            <div class="item-after">
                                <label class="label-switch">
                                <input type="checkbox">
                                <div class="checkbox"></div>
                                </label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-block-title">网络</div>
            <div class="list-block">
                <ul>
                    <li class="item-content">
                        <div class="item-inner">
                            <div class="item-title">仅Wi-Fi下联网</div>
                            <div class="item-after">
                                <label class="label-switch">
                                <input type="checkbox">
                                <div class="checkbox"></div>
                                </label>
                            </div>
                        </div>
                    </li>
                   
                </ul>
            </div>
            
            <div class="content-block-title"></div>
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">关于我们</div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">意见反馈</div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>