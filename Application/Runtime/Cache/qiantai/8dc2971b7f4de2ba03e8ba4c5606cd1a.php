<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="/shixun/Public/qiantai/jQuery.js"></script>
    <script src="/shixun/Public/qiantai/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
        body{
            font-family: 'Oleo Script', cursive;
        }
        .lg-container{
            width:70%;
            margin:auto auto;
            padding:20px 40px;
            border:1px solid #f4f4f4;
            background:rgba(255,255,255,.5);
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;

            -webkit-box-shadow: 0 0 2px #aaa;
            -moz-box-shadow: 0 0 2px #aaa;
            box-shadow: 0 0 2px #aaa;
        }
        .lg-container h1{
            font-size:40px;
            text-align:center;
        }
        #lg-form > div {
            margin:10px 5px;
            padding:5px 0;
        }
        #lg-form label{
            display: none;
            font-size: 20px;
            line-height: 25px;
        }
        #lg-form input[type="text"],
        #lg-form input[type="password"]{
            border:1px solid rgba(51,51,51,.5);
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
            padding: 5px;
            font-size: 16px;
            line-height: 20px;
            width: 100%;
            font-family: 'Oleo Script', cursive;
            text-align:center;
        }
        #lg-form div:nth-child(3) {
            text-align:center;
        }
        #lg-form button{
            font-family: 'Oleo Script', cursive;
            font-size: 18px;
            border:1px solid #000;
            padding:5px 10px;
            border:1px solid rgba(51,51,51,.5);
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;

            -webkit-box-shadow: 2px 1px 1px #aaa;
            -moz-box-shadow: 2px 1px 1px #aaa;
            box-shadow: 2px 1px 1px #aaa;
            cursor:pointer;
        }
        #lg-form button:active{
            -webkit-box-shadow: 0px 0px 1px #aaa;
            -moz-box-shadow: 0px 0px 1px #aaa;
            box-shadow: 0px 0px 1px #aaa;
        }
        #lg-form button:hover{
            background:#f4f4f4;
        }
        #message{width:100%;text-align:center}
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<script type="text/javascript">
    $(document).ready(function () {
        $("#username").blur(function () {
            var obj=document.getElementById("username");
            if(obj.value=="")
            {document.getElementById("div1").style.display="block";
                return 0;}
            document.getElementById("div1").style.display="none";
        });
        $("#password").blur(function () {
            var obj=document.getElementById("password");
            if(obj.value=="")
            {document.getElementById("div2").style.display="block";
                return 0;}
            document.getElementById("div2").style.display="none";
        });
        $("#pw").blur(function () {
            var obj=document.getElementById("pw");
            var obj1=document.getElementById("password");
            if(obj.value!= obj1.value)
            {document.getElementById("div3").style.display="block";
                return 0;}
            document.getElementById("div3").style.display="none";
        });
        $("#email").blur(function () {
            var obj=document.getElementById("email");
            if(obj.value=="")
            {document.getElementById("div4").style.display="block";
                return 0;}
            if((obj.value.indexOf("@")+obj.value.indexOf("com"))<1)//找不到@和com
            {document.getElementById("div4").style.display="block";
                return 0;}
            document.getElementById("div4").style.display="none";
        })
    })
</script>
<body>
<div data-role="page" style="background-image: url(/shixun/Public/qiantai/images/2.png);background-repeat: no-repeat;background-size:100% 100%">
    <a  rel="external" href="<?php echo U('qiantai/dz/index');?>" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon ui-btn-icon-notext" style="background-image: url(/shixun/Public/qiantai/images/2.png);border:0px">白色</a>
    <div data-role="content" style="text-align: center;">
        <div class="lg-container">

            <h1>奇葩</h1>
            <form id="lg-form" name="lg-form" method="post">

                <div>
                    <label for="username">用户名:</label>
                    <input type="text" name="username" id="username" placeholder="用户名"/>
                    <div id="div1" style="display:none;">
                        <span>请输入用户名</span>
                    </div>

                </div>

                <div>
                    <label for="password">密码:</label>
                    <input type="password" name="password" id="password" placeholder="密码" />
                    <div id="div2" style="display:none;">
                        <span  >请输入正确的密码</span>
                    </div>
                </div>

                <div>
                    <input type="password" name="password" id="pw" placeholder="重复密码" />
                    <div id="div3" style="display:none;">
                        <span  >两次输入密码不一致，请重新输入</span>
                    </div>
                </div>

                <div>
                    <input type="text" name="email" id="email" placeholder="邮箱" />
                    <div id="div4" style="display:none;">
                        <span  >邮箱格式不正确请重新输入</span>
                    </div>
                </div>

                <div data-role="controlgroup" data-type="horizontal" style="text-align: center">
                    <input id="sub" type="submit" value="注册">
                    <a href="<?php echo U('qiantai/dz/index');?>" data-role="button">返回</a>
                </div>

            </form>
        </div>
    </div>

</div>

</body>
</html>