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
            color:gray;
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
                            // alert('感谢您的支持！');//模拟异步数据加1
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
    <div data-role="page" id="page1">
        <!--侧边栏-->
        <div data-role="panel" id="myPanel" data-display="overlay" style="width:200px;background-image: url('/shixun/Public/qiantai/images/2.png');background-size: 100% 150px;background-repeat: no-repeat" >
            <div >
                
                <a href="<?php echo U('qiantai/dz/index13');?>" rel="external" style="">
                    <image src= <?php echo ($vo["head"]); ?> style="height: 60px;width:60px;border-radius: 50%"></image>
                </a><br>
                <div style="margin-top:10px;color:white">
                   
                    <?php echo ($vo["nickname"]); ?><br/>
                  
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <p></p>
            <ul data-role="listview" style="margin-top:40px">
                <li data-icon="false"><a href="<?php echo U('qiantai/dz/PersonalData');?>" rel="external">个人资料</a></li>
                <li data-icon="false"><a href="#page11" rel="external">关注</a></li>
                <li data-icon="false"><a href="#page10" rel="external">粉丝</a></li>
                <li data-icon="false"><a href="#page9" rel="external">收藏</a></li>
            </ul >
                <div data-role="navbar" style="margin-top:150px;widht:100%" >
                    <ul class="ul1">
                        <li><a href="<?php echo U('qiantai/dz/back');?>" rel="external" class="ui-nodisc-icon ui-alt-icon" data-icon="user"  style="text-shadow:none;color:red;">退出登录</a></li>
                        <li><a href="#"   class="ui-nodisc-icon ui-alt-icon" data-icon="back"   style="text-shadow:none;color:black">返回</a></li>
                    </ul>
                </div>
        </div>
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
            <a href="#myPanel" class="ui-nodisc-icon" data-icon="img1" data-iconpos="notext" style="margin-top:6px"></a>
            <div data-role="controlgroup" data-type="horizontal" style="text-align:center">
                 <a href="#" data-role="button" class="ui-btn-active">奇葩圈</a>
                 <a href="<?php echo U('qiantai/dz/index6');?>" data-role="button">生活圈</a>
            </div>
            <a rel="external"  href="<?php echo U('qiantai/dz/set');?>" class="ui-nodisc-icon" data-icon="gear" data-iconpos="notext" style="background-image: url(/shixun/Public/qiantai/images/2.png);margin-top:6px"></a>
            <div data-role="navbar" class="navbar" >
                <ul class="ul2">
                    <li><a href="#page1" class="ui-btn-active">推荐</a></li>
                    <li><a href="<?php echo U('qiantai/dz/index2');?>">段子</a></li>
                    <li><a href="<?php echo U('qiantai/dz/index3');?>" >视频</a></li>
                    <li><a href="<?php echo U('qiantai/dz/index4');?>">图片</a></li>
                </ul>
            </div>
        </div>
        <div data-role="content" style="background-color:gainsboro;">

             <?php if(is_array($text)): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div  class="div1" style="background-color: white">
                    <div  class="row" style="background-color: white;text-align: left">
                        <div class="ui-block-c" id=<?php echo ($vo["userid"]); ?>>
                            <a class="others" data-ajax="false"                       href="<?php echo U('dz/others',array('uid'=>$vo['userid']));?>"><img  src=<?php echo ($vo["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
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
                    <div class="zan" id="<?php echo ($vo["id"]); ?>" style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                        <a  id="good" href="#"  class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["good"]); ?></span></a>
                        <a id="bad" href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["bad"]); ?></span></a>
                        <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                        <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
             <?php if(is_array($vid)): $i = 0; $__LIST__ = $vid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c" id=<?php echo ($vo["userid"]); ?>>
                        <a  href="<?php echo U('dz/others',array('uid'=>$vo['userid']));?>"><img src=<?php echo ($vo["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black"><?php echo ($vo["nickname"]); ?></a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin:5%">
                    <p><?php echo ($vo["content"]); ?></p><video width="100%" height="100%   " src="<?php echo ($vo["video"]); ?>" controls="controls" ></video>
                </div>
                <div class="zan" id="<?php echo ($vo["id"]); ?>" style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a id="good" href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["good"]); ?></span></a>
                    <a id="bad" href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["bad"]); ?></span></a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
           
            <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c" id=<?php echo ($vo["userid"]); ?>>
                         <a   href="<?php echo U('dz/others',array('uid'=>$vo['userid']));?>"><img src=<?php echo ($vo["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
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
                <div class="zan" id="<?php echo ($vo["id"]); ?>" style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a id="good" href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["good"]); ?></a>
                    <a id="bad" href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["bad"]); ?></a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        <div data-role="footer" data-position="fixed" data-theme="b">
            <div data-role="navbar" >
                <ul class="ul1">
                    <li><a href="#" class="ui-nodisc-icon " data-icon="home"  style="text-shadow:none;color:yellow;">首页</a></li>
                    <li><a rel="external"  href="<?php echo U('qiantai/dz/contribute');?>" class="ui-nodisc-icon" data-icon="plus"   style="text-shadow:none;color:white">投稿</a></li>
                    <li><a href="#page15" class="ui-nodisc-icon" data-icon="mail"   style="text-shadow:none;color:white">消息 </a></li>

                </ul>
            </div>
        </div>
</div>
   

    
    <!--评论界面-->
    <div data-role="page" id="page5">
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
            <a href="#page1" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 20px;"></a>
            <div data-role="controlgroup" data-type="horizontal" style="text-align:center;color:white;font-family:微软雅黑">
               <p>评论</p>
            </div>
        </div>
        <div data-role="content" style="background-color: gainsboro">

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
            <h6 style="height: 1px">新鲜评论：</h6>
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
                <div class="row" style="text-align:left;margin: 5%">
                    &nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦
                </div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a  href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                </div>
            </div>

        </div>
        <div data-role="footer" data-position="fixed" data-theme="b">
            <div data-role="fieldcontain"  style="width: 250px;height:40px;float: left">
                <input type="text" name="text" id="text" value="" />
            </div>
            <a href="#" data-role="button" style="float: right;margin-top: 22px;margin-right:10px">提交</a>
        </div>
    </div>
    
   
    <div data-role="page" id="page8">
        <!--侧边栏-->
        <div data-role="panel" id="myPane8" data-display="overlay" style="width:200px;background-image: url('/shixun/Public/qiantai/images/2.png');background-size: 100% 150px;background-repeat: no-repeat" >
            <div >
                <a href="#page13" rel="external" style="">
                    <image src="/shixun/Public/qiantai/images/1.png" style="height: 60px;width:60px;border-radius: 50%"></image>
                </a><br>
                <div style="margin-top:10px;color:white">我有络腮胡</div>
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
            </div>
        </div>

        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
            <a href="#myPane8" class="ui-nodisc-icon" data-icon="img1" data-iconpos="notext" style=";margin-top:6px"></a>
            <div data-role="controlgroup" data-type="horizontal" style="text-align:center">
                <a href="#page1" data-role="button" >奇葩圈</a>
                <a href="#page6" data-role="button" class="ui-btn-active">生活圈</a>
            </div>
            <a href="#" class="ui-nodisc-icon" data-icon="gear" data-iconpos="notext" style="background-image: url(/shixun/Public/qiantai/images/2.png);margin-top:6px"></a>
            <div data-role="navbar" class="navbar" >
                <ul class="ul2">
                    <li><a href="#page6" >大家玩</a></li>
                    <li><a href="#page7" >关注</a></li>
                    <li><a href="#page8" class="ui-btn-active">我的动态</a></li>
                </ul>
            </div>
        </div>
        <div data-role="content" style="background-color:gainsboro">

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
                <div style="margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:60%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
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
                <div class="row" style="text-align:left;margin: 5%">
                    &nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦
                </div>
                <div style="margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:60%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
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
                <div class="row" style="text-align:left;margin: 5%">
                    &nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦
                </div>
                <div style="margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a  href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:60%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" >111</a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div>

        </div>
        <div data-role="footer" data-position="fixed" data-theme="b">
            <div data-role="navbar" >
                <ul class="ul1">
                    <!--<li><a href="#" class="ui-nodisc-icon " data-icon="grid"  style="text-shadow:none;">相册</a></li>-->
                    <li><a href="#" class="ui-nodisc-icon" data-icon="edit"   style="text-shadow:none;">写动态</a></li>
                </ul>
            </div>


        </div>
    </div>
    <div data-role="page" id="page19">
        <div data-role="header">
            <a href="#" data-role="button">取消</a>
            <h1>发段子</h1>
            <a href="#" data-role="button">发表</a>
        </div>

        <div data-role="fieldcontain">
            <label for="textarea">文本输入域</label>
            <textarea height="100px" name="textarea" id="textarea"></textarea>
        </div>
    </div>
    <!--个人收藏-->
    <div data-role="page" id="page9">
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png);height:54px" data-position="fixed">
            <a href="#page1" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
                <h4 style="color:white;margin-top: 5px">收藏</h4>
        </div>
        <div data-role="content" style="background-color: gainsboro;">
            <div class="div1">
                <a href="#" style="float:left;"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="50px" height="50px" style="border-radius:50%"> </a>
                <a href="#" class="a1" style="color:black;">小明</a>
                <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦</div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom: 5px;position:relative">
                    <a href="#" class="ui-btn ui-icon-img2 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;background-color:white;border:0px" ></a><span class="ui-li-count" style="position:absolute;top:25px;right:230px;border:0px;color:grey">111</span>
                    <a href="#" class="ui-btn ui-icon-img3 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:20px;background-color:white;border:0px"></a><span class="ui-li-count" style="position:absolute;top:25px;right:175px;border:0px;color:grey">111</span>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:80px;background-color:white;border:0px"></a>
                    <a href="#" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:30px;background-color:white;border:0px"></a>
                </div>
            </div>
            <div class="div1">
                <a href="#" style="float:left;"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="50px" height="50px" style="border-radius:50%"> </a>
                <a href="#" class="a1" style="color:black;">小明</a>
                <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦</div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom: 5px;position:relative">
                    <a href="#" class="ui-btn ui-icon-img2 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;background-color:white;border:0px" ></a><span class="ui-li-count" style="position:absolute;top:25px;right:230px;border:0px;color:grey">111</span>
                    <a href="#" class="ui-btn ui-icon-img3 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:20px;background-color:white;border:0px"></a><span class="ui-li-count" style="position:absolute;top:25px;right:175px;border:0px;color:grey">111</span>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:80px;background-color:white;border:0px"></a>
                    <a href="#" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:30px;background-color:white;border:0px"></a>
                </div>
            </div>
            <div class="div1">
                <a href="#" style="float:left;"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="50px" height="50px" style="border-radius:50%"> </a>
                <a href="#" class="a1" style="color:black;">小明</a>
                <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦叽里呱啦</div>
                <div style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom: 5px;position:relative">
                    <a href="#" class="ui-btn ui-icon-img2 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;background-color:white;border:0px" ></a><span class="ui-li-count" style="position:absolute;top:25px;right:230px;border:0px;color:grey">111</span>
                    <a href="#" class="ui-btn ui-icon-img3 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:20px;background-color:white;border:0px"></a><span class="ui-li-count" style="position:absolute;top:25px;right:175px;border:0px;color:grey">111</span>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:80px;background-color:white;border:0px"></a>
                    <a href="#" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:30px;background-color:white;border:0px"></a>
                </div>
            </div>

        </div>

    </div>
    <!--粉丝-->
    <div data-role="page" id="page10">
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png);height:54px" data-position="fixed">
            <a href="#page1" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
            <h4 style="color:white;margin-top: 5px">粉丝</h4>
        </div>
        <div data-role="content">
            <ul data-role="listview">
                <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
            </ul>
        </div>
    </div>
    <!--关注-->
    <div data-role="page" id="page11">
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png);height:54px" data-position="fixed">
            <a href="#page1" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
            <h4 style="color:white;margin-top: 5px">关注</h4>
        </div>
        <div data-role="content">
            <ul data-role="listview">
                <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
                            <li data-icon="false"><a href="#"><img src="/shixun/Public/qiantai/images/1.png" style=" -moz-border-radius: 60px; -webkit-border-radius: 60px;
                border-radius: 60px;"><h1>我有络腮胡</h1><p>生活是一种态度</p></a></li>
            </ul>
        </div>
    </div>
    <!--个人信息-->
    
    <!--他人信息-->
    
    <!--消息-->
        <!--消息首页-->
        <div data-role="page" id="page15">
        <!--侧边栏-->
        <div data-role="panel" id="myPane15" data-display="overlay" data-theme="b">
            <p>
                <a href="#page13" rel="external">
                    <image src="/shixun/Public/qiantai/images/1.png" style="height: 60px;width:60px;border-radius: 50px"></image>
                </a>
                <span>我有络腮胡</span>
            </p>
            <p></p>
            <ul data-role="listview">
                <li data-icon="false"><a href="#page12" rel="external">个人资料</a></li>
                <li data-icon="false"><a href="#page11" rel="external">关注</a></li>
                <li data-icon="false"><a href="#page10" rel="external">粉丝</a></li>
                <li data-icon="false"><a href="#page9" rel="external">收藏</a></li>
                <li data-icon="false"><a href="#">退出登陆</a></li>
            </ul>
        </div>
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
            <a href="#myPanel" class="ui-nodisc-icon" data-icon="img1" data-iconpos="notext"></a>
            <div data-role="controlgroup" data-type="horizontal" style="text-align:center">
                <a href="#" data-role="button" class="ui-btn-active">奇葩圈</a>
                <a href="#page6" data-role="button">生活圈</a>
            </div>
            <a href="#" class="ui-nodisc-icon" data-icon="gear" data-iconpos="notext" style="background-image: url(/shixun/Public/qiantai/images/2.png)"></a>

        </div>
        <div data-role="listview" data-inset="true">
            <li>
                <a href="#page18">评论<span class="ui-li-count">20</span> </a>
            </li>
            <li>
                <a href="#page17">赞<span class="ui-li-count">20</span> </a>
            </li>
            <li>
                <a href="#page16">给我留言<span class="ui-li-count">20</span> </a>
            </li>
        </div>

        <div data-role="footer" data-position="fixed" data-theme="b">
            <div data-role="navbar" >
                <ul class="ul1">
                    <li><a href="#page1" class="ui-nodisc-icon " data-icon="home"  style="text-shadow:none;color:white">首页</a></li>
                    <li><a  rel="external"  href="投稿.html"  class="ui-nodisc-icon" data-icon="plus"   style="text-shadow:none;color:white">投稿</a></li>
                    <li><a href="#page15" class="ui-nodisc-icon" data-icon="mail"   style="text-shadow:none;color:yellow;">消息 </a></li>

                </ul>
            </div>


        </div>
    </div>
        <!--消息给我留言-->
        <div data-role="page" id="page16">
            <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
                <a href="#page15" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 20px;"></a>
                <div data-role="controlgroup" data-type="horizontal" style="text-align:center;color:white;font-family:微软雅黑">
                    <p>留言</p>
                </div>
            </div>

            <div class="div1">
                <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                <a href="#page14" class="a1" style="color:black;" >小明</a>
                <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;这个好好笑</div>
            </div>
            <div class="div1">
                <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                <a href="#page14" class="a1" style="color:black;" >小明</a>
                <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;这个好好笑</div>
            </div>
            <div class="div1">
                <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                <a href="#page14" class="a1" style="color:black;" >小明</a>
                <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>


                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;这个好好笑</div>
            </div>

        </div>
        <!--点赞-->
        <div data-role="page" id="page17">
            <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
                <a href="#page15" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 20px;"></a>
                <div data-role="controlgroup" data-type="horizontal" style="text-align:center;color:white;font-family:微软雅黑">
                    <p>赞</p>
                </div>
            </div>

            <div class="div1">
                <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                <a href="#page14" class="a1" style="color:black;" >小明</a>
                <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;赞了你</div>
                <div>
                    <ul data-role="listview">
                        <li> <a href="#"> <img src="/shixun/Public/qiantai/images/12.jpg" height="100%">
                            <h2>Google Chrome</h2> <p>Google Chrome is a free,open-source</p> </a>
                        </li></ul>
                </div>
            </div>

            <div class="div1">
                    <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                    <a href="#page14" class="a1" style="color:black;" >小明</a>
                    <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                    <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;赞了你</div>
                    <div>
                        <ul data-role="listview">
                            <li> <a href="#"> <img src="/shixun/Public/qiantai/images/12.jpg" height="100%">
                                <h2>Google Chrome</h2> <p>Google Chrome is a free,open-source</p> </a>
                            </li></ul>
                    </div>
                </div>

            <div class="div1">
                        <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                        <a href="#page14" class="a1" style="color:black;" >小明</a>
                        <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                        <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;赞了你</div>
                        <div>
                            <ul data-role="listview">
                                <li> <a href="#"> <img src="/shixun/Public/qiantai/images/12.jpg" height="100%">
                                    <h2>Google Chrome</h2> <p>Google Chrome is a free,open-source</p> </a>
                                </li></ul>
                        </div>
                    </div>
        </div>
        <!--评论-->
        <div data-role="page" id="page18">
                <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png)" data-position="fixed">
                    <a href="#page15" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(images/2.png);border:0px;margin-top: 20px;"></a>
                    <div data-role="controlgroup" data-type="horizontal" style="text-align:center;color:white;font-family:微软雅黑">
                        <p>评论</p>
                    </div>
                </div>

                <div class="div1">
                <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                <a href="#page14" class="a1" style="color:black;" >小明</a>
                <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;评论了你</div>
                <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;这个好好笑</div>
                <div>
                    <ul data-role="listview">
                        <li> <a href="#"> <img src="/shixun/Public/qiantai/images/11.png">
                            <h2>Google Chrome</h2> <p>Google Chrome is a free,open-source</p> </a>
                        </li></ul>
                </div>
            </div>
                <div class="div1">
                    <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                    <a href="#page14" class="a1" style="color:black;" >小明</a>
                    <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                    <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;评论了你</div>
                    <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;这个好好笑</div>
                    <div>
                        <ul data-role="listview">
                            <li> <a href="#"> <img src="/shixun/Public/qiantai/images/11.png">
                                <h2>Google Chrome</h2> <p>Google Chrome is a free,open-source</p> </a>
                            </li></ul>
                    </div>
                </div>
                <div class="div1">
                        <a href="#page14" style="float:left; margin-top:10px;margin-left:20px"> <img src="/shixun/Public/qiantai/images/1.png" alt="头像" width="30px" height="30px" style="border-radius:50%"> </a>
                        <a href="#page14" class="a1" style="color:black;" >小明</a>
                        <time  datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>

                        <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;评论了你</div>
                        <div style="margin-top:10px;margin-left: 5px;font-family:微软雅黑;font-size:15px">&nbsp;&nbsp;这个好好笑</div>
                        <div>
                            <ul data-role="listview">
                                <li> <a href="#"> <img src="/shixun/Public/qiantai/images/11.png">
                                    <h2>Google Chrome</h2> <p>Google Chrome is a free,open-source</p> </a>
                                </li></ul>
                        </div>
                    </div>
        </div>
</body>
</html>