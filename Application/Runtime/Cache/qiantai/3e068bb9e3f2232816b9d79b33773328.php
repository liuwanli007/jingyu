<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>奇葩狗</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="/shixun/Public/qiantai/jQuery.js"></script>
    <script src="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
        .upimg
        {
            position: relative;
        }
        .upin
        {
            opacity:0;
            filter:alpha(opacity=0);
            height: 100px;
            width: 100px;
            position: absolute;
            top: 0;
            left: 0;
   
        }

    </style>
</head>
<body>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div data-role="page">
    <div data-role="header" style="background-image: url(/shixun/Public/qiantai/images/2.png);height:54px" data-position="fixed">
         <a href="<?php echo U('qiantai/dz/index');?>" rel="external" class="ui-nodisc-icon " data-icon="carat-l" style="background-image:url(/shixun/Public/qiantai/images/2.png);border:0px;margin-top: 15px;"></a>
            <h4 style="color:white;margin-top: 5px">个人资料</h4>
    </div>
    <div data-role="content" style="text-align: center">
   
        <div style="text-align: center" class="upimg">
            <input type="file" name="UpdateImg" class="upin">
            <img src="<?php echo ($vo["head"]); ?>" style="height: 80px;width: 80px;margin-bottom: 40px;">
            
        </div>
        <form action="<?php echo U('qiantai/dz/updata');?>"  method="post" name="lg-form"  enctype="multipart/form-data" data-ajax="false" >
            <div data-role="fieldcontain">
                <div>
                    <label for="Name">昵称</label>
                    <input name="nickname" type="text" placeholder="<?php echo ($vo["nickname"]); ?>">
                </div>
                <div>
                </div>
                <div>
                    <label for="addinfo">签名</label>
                    <textarea name="signature" id="info" placeholder="<?php echo ($vo["signature"]); ?>"></textarea>
                </div>
                <div>
                    <label for="email">邮箱</label>
                    <input name="email" type="text" placeholder="<?php echo ($vo["email"]); ?>">
                </div>
                
            </div>
            <input type="submit" value="保存" data-inline="true">
        </form>
    </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>