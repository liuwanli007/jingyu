<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>奇葩狗</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="/shixun/Public/qiantai/jQuery.js"></script>
    <script src="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><style type="text/css">
        .ui-icon-img1{
            background-image: url(<?php echo ($vo["head"]); ?>);
            background-size:29px 29px;

        }
        .ui-icon-img2:after{
            background-image: url(/shixun/Public/qiantai/images/8.png);
            background-size:15px 15px;
            border: 0;

        }
        .ui-icon-img3:after{
            background-image: url(/shixun/Public/qiantai/images/9.png);
            background-size:15px 15px;
            border: 0;
        }
        .ui-icon-img4:after{
            background-image: url(/shixun/Public/qiantai/images/10.png);
            background-size:15px 15px;
            border: 0;
        }
        .ui-icon-img5:after{
            background-image: url(/shixun/Public/qiantai/images/11.png);
            background-size:15px 15px;
            border: 0;
        }
        .ul1 li a{

            border: 0px;
            font-family:华文楷体;

        }
        .ul2 li a{
            border: 0px;
        }
        .div1{
            background-color: white;
            margin-top: 2%
        }
        time{
           font-fmaily:微软雅黑;
           font-size:6px;
            color:grey;
            margin-top: 5%;
        }
        .a1 {
            font-size:14px;
            font-family:华文楷体;
            text-decoration:none;
        }
        /*侧边栏*/
        .ui-icon-circle{
            background-image:url(/shixun/Public/qiantai/images/1.png);
        }
        #myPanel a{
            text-decoration:none;
        }
        #myPanel li{
            list-style: none;
        }
        /*他人信息*/
        .guanzhulan p{
            display: inline;
            font-family: "Segoe UI Semibold";
        }
        .tiezi{
            margin-bottom:10px;
            height:auto;
            background-color:white;
        }
        .tiezi div p{
            font-family: "Segoe UI Semibold";
            margin:4px;
        }
        .ui-icon-thumbs:after{background-image:url(/shixun/Public/qiantai/images/2.png)}
        .ui-block-a{
            width: 30%;
        }
        .ui-block-b{
            width: 70%;
        }
        .ui-block-c{
            width:15%;
        }
        .ui-block-d{
            width:85%;
        }
        .ui-block-e{
            width:20%;
            background-color: white;
        }

    </style>
</head>

<body>
<div data-role="page" id="page1">
        <volist name="list" id="vo">
        <div data-role="header" style="background-image: url(/shixun/Public/qiantai/images/2.png)">
            <a href="<?php echo U('qiantai/dz/index');?>"  rel="external" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
            <div style="margin-top:60px;text-align: center;margin-bottom: 10px" >
                <a href="#page13" rel="external" style="">
                    <image src=<?php echo ($vo["head"]); ?> style="height: 60px;width:60px;border-radius: 50%"></image>
                </a><br>
                <div style="margin-top:10px;color:white"><?php echo ($vo["nickname"]); ?></div>
                <div style="margin-top:10px;color:white"><?php echo ($vo["signature"]); ?> </div>
            </div>

            <div data-role="navbar">
                <ul>
                    <li><a href="#page1" class="ui-btn-active">我的帖子</a></li>
                    <li><a href="#page2">我的评论</a></li>
                </ul>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div data-role="content" style="background-color: gainsboro;">
            
              <?php if(is_array($text)): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                    <div  class="row" style="background-color: white;text-align: left">
                        <div class="ui-block-c">
                            <a href="#"><img  src=<?php echo ($vo["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                        </div>
                        <div class="ui-block-d">
                            <a href="#" class="a1" style="color:black"><?php echo ($vo["nickname"]); ?></a>
                            <br>
                            <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                        </div>
                    </div>
                    <div class="row" style="text-align: left;margin:5%">
                        &nbsp;&nbsp;<?php echo ($vo["content"]); ?>  
                    </div>
                    <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                        <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["good"]); ?></a>
                        <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["bad"]); ?></a>
                        <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                        <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
             <?php if(is_array($vid)): $i = 0; $__LIST__ = $vid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c">
                        <a href="#"><img src=<?php echo ($vo["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black"><?php echo ($vo["nickname"]); ?></a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin:5%">
                    <p>这是一个标题</p><video width="100%" height="100%   " src="<?php echo ($vo["video"]); ?>" controls="controls" ></video>
                </div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["good"]); ?></a>
                    <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["bad"]); ?></a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
           
            <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c">
                        <a href="#"><img src=<?php echo ($vo["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black"><?php echo ($vo["nickname"]); ?></a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin: 5%">
                    <p><?php echo ($vo["content"]); ?></p><img src=<?php echo ($vo["img"]); ?> width="100%" height="100%">
                </div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["good"]); ?></a>
                    <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["bad"]); ?></a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div data-role="page" id="page2">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div data-role="header" style="background-image: url(/shixun/Public/qiantai/images/2.png)">
            <a href="<?php echo U('qiantai/dz/index');?>"  rel="external" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
            <div style="margin-top:60px;text-align: center;margin-bottom: 10px" >
                <a href="#page13" rel="external" style="">
                    <image src=<?php echo ($vo["head"]); ?> style="height: 60px;width:60px;border-radius: 50%"></image>
                </a><br>
                <div style="margin-top:10px;color:white"><?php echo ($vo["nickname"]); ?></div>
                <div style="margin-top:10px;color:white"><?php echo ($vo["signature"]); ?> </div>
            </div>

            <div data-role="navbar">
                <ul>
                    <li><a href="#page1" >我的帖子</a></li>
                    <li><a href="#page2" class="ui-btn-active">我的评论</a></li>
                </ul>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div data-role="content" style="background-color: gainsboro;">
            <div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c">
                        <a href="#"><img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black">小刘</a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align:left;margin: 5%">
                    &nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦
                </div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div>
            <div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c">
                        <a href="#"><img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black">小刘</a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin: 5%">
                    <p>这是一个标题</p><video width="100%" height="100%   " src="/shixun/Public/qiantai/images/1.ogg" controls="controls" ></video>
                </div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div>
            <div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c">
                        <a href="#"><img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black">小刘</a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin: 5%">
                    <p>这是一个标题</p><img src="/shixun/Public/qiantai/images/7.png" width="100%" height="100%">
                </div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div>

        </div>
    </div>
    </body>
</html>