<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" href="/1_csh/admin/Public/Index_style/css/index.css" type="text/css" media="screen" />
    <style>
        body{margin: 6px 0 0 10px;}
        h2{text-align:center;font-family: 微软雅黑;margin:20px;color:gray}
        span.username{color:orangered;font-weight: bold;}
        div p{
            font-size:15px;
        }
        .help_info{
            margin-top:80px;
            width:600px;
            min-height:200px;
            border:1px cornflowerblue solid;
            border-radius:4px;
            background: #e0ecff;
            opacity: 0.7;
            padding-left:5px;
        }
        .help_info h3{
            text-align:center;
        }
    </style>
</head>
<body>
<div class="route_bg">
    <a href="javascript:void(0)">首页</a><i class="glyph-icon icon-chevron-right"></i>
    <a href="javascript:void(0)">欢迎</a>
</div>
    <h2>欢迎管理员【<span class="username"><?php echo ($data["username"]); ?></span>】进入后台管理系统！</h2>
    <div style="padding-left:10px;">
        <p>您上次登录时间为：<?php echo (date("Y-m-d H:i",$data["recent_login"])); ?></p>
        <p>您上次登录IP为：<?php echo ($data["login_ip"]); ?></p>
        <div class="help_info">
            <h3>温馨提示</h3>
            <p>本系统由BinGo开发并维护，如果遇到技术问题或相关建议咨询请联系BinGo！</p>
            <p>联系人：BinGo</p>
            <p>电话：13629795255</p>
            <p>email:619280492@qq.com</p>
        </div>
    </div>
</body>
</html>