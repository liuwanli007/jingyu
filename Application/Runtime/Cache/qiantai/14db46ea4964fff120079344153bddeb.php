<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>奇葩狗</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="/shixun/Public/qiantai/jQuery.js"></script>
    <script src="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><style type="text/css">
        .ui-icon-img1{
            background-image: url(<?php echo ($vo1["head"]); ?>);
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

        function changeText(obj){
            var id=$(this).attr('id');
            alert(uid);
            if(obj.text=='关注他')
            {
                $.post('/shixun/index.php/Dz/guanzhu',{id:id},function(){
                    },'json');
                obj.text='已关注';
            }else{
                    $.post('/shixun/index.php/Dz/quguan',{id:id},function(){
                    },'json');
                    obj.text='关注他';
            }
        }
    </script>
<body>

    <div data-role="page" id="page14">
        <div data-role="header"  style="background-image: url(/shixun/Public/qiantai/images/2.png);height:54px" data-position="fixed">
            <a href="<?php echo U('qiantai/dz/index');?>" rel="external" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
            <h4 style="color:white;margin-top: 5px"><?php echo ($vo1["nickname"]); ?></h4>
        </div>
        <div style="width: 100%;height:100px;background-color: #22aadd;margin-top:-4px">
            <div style="width:25%;height:100px;float: left">
                <div align="center" style="padding-top: 20%">
                    <a href="#"><img src="<?php echo ($vo1["head"]); ?>" width="50px" style="border-radius: 100px"></a>
                </div>
            </div>
            <div class="guanzhulan" style="width:75%;height:100px;float: left">
                <br>
                <p><?php echo ($vo1["signature"]); ?></p>
                <br>
                <br>
                <p>粉丝：202</p>
                <p>关注：22</p>
            </div>
        </div>
        <div data-role="navbar">
            <ul>
                <li><a>她的帖子</a></li>
                <li><a>给他留言</a></li>
                <li><a>她的评论</a></li>
                <li><a id="<?php echo ($vo1["userid"]); ?>" onclick="changeText(this)">关注他</a></li>
            </ul>
        </div>
        <div data-role="content" style="background-color:gainsboro;">

             <?php if(is_array($text)): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div  class="div1" style="background-color: white">
                    <div  class="row" style="background-color: white;text-align: left">
                        <div class="ui-block-c" id=<?php echo ($vo["userid"]); ?>>
                            <a class="others" data-ajax="false"                       href="#"><img  src=<?php echo ($vo1["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                        </div>
                        <div class="ui-block-d">
                            <a href="#" class="a1" style="color:black"><?php echo ($vo1["nickname"]); ?></a>
                            <br>
                            <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                        </div>
                    </div>
                    <div class="row" style="text-align: left;margin:5%">
                        &nbsp;&nbsp;<?php echo ($vo["content"]); ?>  
                    </div>
                    <div class="zan" id="<<?php echo ($vo["id"]); ?>>" style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                        <a  id="good" href="#"  class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["good"]); ?></span></a>
                        <a id="bad" href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["bad"]); ?></span></a>
                        <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                        <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
             <?php if(is_array($vid)): $i = 0; $__LIST__ = $vid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c" id=<?php echo ($vo["userid"]); ?>>
                        <a  href="#"><img src=<?php echo ($vo1["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black"><?php echo ($vo1["nickname"]); ?></a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin:5%">
                    <p><?php echo ($vo["content"]); ?></p><video width="100%" height="100%   " src="<?php echo ($vo["video"]); ?>" controls="controls" ></video>
                </div>
                <div class="zan" id="<<?php echo ($vo["id"]); ?>>" style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a id="good" href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["good"]); ?></span></a>
                    <a id="bad" href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><span><?php echo ($vo["bad"]); ?></span></a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
           
            <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div1" style="background-color: white">
                <div  class="row" style="background-color: white;text-align: left">
                    <div class="ui-block-c" id=<?php echo ($vo["userid"]); ?>>
                         <a   href="#s"><img src=<?php echo ($vo1["head"]); ?> alt="头像" width="30px" height="30px" style="border-radius:50%;margin-left:10%;margin-top:10%"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="#" class="a1" style="color:black"><?php echo ($vo1["nickname"]); ?></a>
                        <br>
                        <time datetime="2016-07-27T04:54:2907:00" >&nbsp;2016-7-12 15:30</time>
                    </div>
                </div>
                <div class="row" style="text-align: left;margin: 5%">
                    <p><?php echo ($vo["content"]); ?></p><img src=<?php echo ($vo["img"]); ?> width="100%" height="100%">
                </div>
                <div class="zan" id="<<?php echo ($vo["id"]); ?>>" style="margin-top:10px;margin-left: 5px;height:36px;padding-bottom:7px;">
                    <a id="good" href="#" class="ui-btn ui-icon-img2 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["good"]); ?></a>
                    <a id="bad" href="#" class="ui-btn ui-icon-img3 ui-btn-icon-left ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px;width:25px;font-size:3px;color:grey" ><?php echo ($vo["bad"]); ?></a>
                    <a href="#" class="ui-btn ui-icon-img4 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:7%;background-color:white;border:0px"></a>
                    <a href="#page5" class="ui-btn ui-icon-img5 ui-btn-icon-notext ui-nodisc-icon" style="display:inline-block;margin-left:1%;background-color:white;border:0px"></a>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</body><?php endforeach; endif; else: echo "" ;endif; ?>
</html>