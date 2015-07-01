<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Gutoutiao</title>

    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css">

    <script type="text/javascript">
        base_url = "__APP__";
    </script>
</head>

<body>

<?php if(isset($debug)){ ?>
    <div class="container">
        <?php echo ($debug); ?>
    </div>
<?php } ?>

<nav class="nav navbar navbar-default  navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div clas="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Jianguji/Index/index');?>">捡股机</a>
        </div>

        <div id="navbar">
            <ul class="nav navbar-nav navbar-default">
                <li class="<?php if($tag == 'main'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/index');?>">首页</a>
                </li>
                <li class="<?php if($tag == 'entertainment'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/entertainment');?>">新闻</a>
                </li>
                <li class="<?php if($tag == 'crew'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/crew');?>">捡股</a>
                </li>
                <li class="<?php if($tag == 'institution'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/institution');?>">股谱</a>
                </li>
                <li class="<?php if($tag == 'actor'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/actor');?>">板块</a>
                </li>
                <li class="<?php if($tag == 'about'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/about');?>">组合</a>
                </li>
                <li class="<?php if($tag == 'about'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/about');?>">全球</a>
                </li>
                <li class="<?php if($tag == 'about'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/about');?>">实时行情</a>
                </li>
                <?php if($tag == 'selfInfo'){?>
                <li class="<?php if($tag == 'selfInfo'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/selfInfo');?>">用户中心</a>
                </li>
                <?php }?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo U('Index/Index/index');?>">APP下载</a>
                </li>
            </ul>
            <?php if($data['login'] != 1){ ?>
            <ul id="no-login" class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo U('Index/Index/login');?>">登录</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/Index/signup');?>">注册</a>
                </li>
            </ul>
            <?php }else{ ?>
            <ul id="had-login" class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo U('Index/Index/selfInfo');?>"><span class="fa fa-user"></span>&nbsp;<?php echo ($data['uname']); ?></a>
                </li>
                <li>
                    <a href="<?php echo U('Index/Index/logout');?>">登出</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
</nav>
<div id="layout-content">
    
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>

</body>
</html>