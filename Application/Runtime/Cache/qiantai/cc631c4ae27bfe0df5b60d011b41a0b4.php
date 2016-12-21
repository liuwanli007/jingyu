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
    <script type="text/javascript">
        $(document).ready(function(){
            $(".zan").children("a").click(function(){
                var Oa=$(this);
                var id=Oa.parent().attr('id');//获取id属性
                var vl=Oa.find("span").text();
                    vl=parseInt(vl)+1;
                if(Oa.attr('id')=='good'){
                    $.post('/shixun/index.php/Dz/addgood',{id:id},function(data){
                            //alert('感谢您的支持！');//模拟异步数据加1
                            Oa.find("span").text(vl);//页面元素加1
                    },'json'); }
                else{
                    $.post('/shixun/index.php/Dz/addbad',{id:id},function(data){
                            //alert('感谢您的支持！');//模拟异步数据加1
                            Oa.find("span").text(vl);//页面元素加1
                    },'json');
                }
            });
             
        });
    </script>

<body>
<!--生活圈-->
    <div data-role="page" id="page6">
        <!--侧边栏-->
        <div data-role="panel" id="myPane5" data-display="overlay" style="width:200px;background-image: url('/shixun/Public/qiantai/images/2.png');background-size: 100% 150px;background-repeat: no-repeat" >
            <div >
                <a href="#page13" rel="external" style="">
                    <image src="<?php echo ($vo["head"]); ?>" style="height: 60px;width:60px;border-radius: 50%"></image>
                </a><br>
                <div style="margin-top:10px;color:white"><?php echo ($vo["nickname"]); ?></div>
            </div>
            <p></p>
            <ul data-role="listview" style="margin-top:40px">
                <li data-icon="false"><a href="#page12" rel="external">个人资料</a></li>
                <li data-icon="false"><a href="#page11" rel="external">关注</a></li>
                <li data-icon="false"><a href="#page10" rel="external">粉丝</a></li>
                <li data-icon="false"><a href="#page9" rel="external">收藏</a></li>
            </ul >
            <div data-role="navbar" style="margin-top:190px;widht:100%" >
                <ul class="ul1">
                    <li><a href="#" class="ui-nodisc-icon ui-alt-icon" data-icon="user"  style="text-shadow:none;color:red;">退出登录</a></li>
                    <li><a href="#page2" class="ui-nodisc-icon ui-alt-icon" data-icon="back"   style="text-shadow:none;color:black">返回</a></li>
                </ul>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
            <a href="#myPane5" class="ui-nodisc-icon" data-icon="img1" data-iconpos="notext" style=";margin-top:6px"></a>
            <div data-role="controlgroup" data-type="horizontal" style="text-align:center">
                <a href="<?php echo U('qiantai/dz/index');?>" rel="external"  data-role="button" >奇葩圈</a>
                <a href="#page6" data-role="button" rel="external" class="ui-btn-active">生活圈</a>
            </div>
            <a href="#" class="ui-nodisc-icon" data-icon="gear" data-iconpos="notext" style="background-image: url(/shixun/Public/qiantai/images/2.png);margin-top:6px"></a>
            <div data-role="navbar" class="navbar" >
                <ul class="ul2">
                    <li><a href="<?php echo U('qiantai/dz/index6');?>" rel="external" class="ui-btn-active">大家玩</a></li>
                    <li><a href="<?php echo U('qiantai/dz/index7');?>" rel="external" >关注</a></li>
                    <li><a href="<?php echo U('qiantai/dz/index8');?>" rel="external">我的动态</a></li>
                </ul>
            </div>
        </div>
        <div data-role="content" style="background-color:gainsboro">
            <?php if(is_array($text)): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c">
                        <a href="#"><img src="<?php echo ($vo["head"]); ?>" alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black"><?php echo ($vo["nickname"]); ?></a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align:left;margin: 5%">
                    &nbsp;&nbsp;<?php echo ($vo["content"]); ?>
                </div>
                <div style="margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:60%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["good"]); ?></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div data-role="footer" data-position="fixed" data-theme="b">
            <div data-role="navbar" >
                <ul class="ul1">
                    <!--<li><a href="#" class="ui-nodisc-icon " data-icon="grid"  style="text-shadow:none;">相册</a></li>-->
                    <li><a href="#page19" class="ui-nodisc-icon" data-icon="edit"   style="text-shadow:none;">写动态</a></li>
                </ul>
            </div>


        </div>
    </div>
    </body>
</html>