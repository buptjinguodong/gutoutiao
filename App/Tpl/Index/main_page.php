<?php
/**
 * Created by PhpStorm.
 * User: jinguodong
 * Date: 2015/4/29
 * Time: 15:56
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Welcome to NewActors</title>

    <!-- product -->
    <link rel="stylesheet" href="__PUBLIC__/css/main_page.css" type="text/css" charset="utf-8">
    <!-- <link rel="stylesheet" href="__PUBLIC__/css/scroll.css" type="text/css" charset="utf-8"> -->
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap/bootstrap.min.css">
    <script type="text/javascript">
        base_url = "<?php echo $this->config->base_url(); ?>";
        // alert(base_url);
    </script>

</head>
<body>


<div class="box">
    <div class="wrap">
        <div class="left_box">
            <div class="filter" id="filter" style="display:none">
                <div class='container'>
                    对通告内容的筛选：
                    性别\薪酬范围等
                </div>
            </div>
            <div class="recommend">
                <div class="container">
                    <div class="rec first" id="rec1">
                        <div class="sub_container rec_scroller" id="rec1_scroller">
                            <ul>
                                <li>新闻滚动1：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>新闻滚动2：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>新闻滚动3：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>新闻滚动4：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>新闻滚动5：滚动显示本网站其他频道内容摘要，可配置</li>
                            </ul>
                        </div>
                    </div>
                    <div class="rec" id="rec2">
                        <div class="sub_container rec_scroller" id="rec2_scroller">
                            <ul>
                                <li>机构信息滚动1：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>机构信息滚动2：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>机构信息滚动3：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>机构信息滚动4：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>机构信息滚动5：滚动显示本网站其他频道内容摘要，可配置</li>
                            </ul>
                        </div>
                    </div>
                    <div class="rec" id="rec3">
                        <div class="sub_container rec_scroller" id="rec1_scroller">
                            <ul>
                                <li>本网站信息滚动1：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>本网站信息滚动2：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>本网站信息滚动3：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>本网站信息滚动4：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>本网站信息滚动5：滚动显示本网站其他频道内容摘要，可配置</li>
                            </ul>
                        </div>
                    </div>
                    <div class="rec" id="rec4">
                        <div class="sub_container rec_scroller" id="rec2_scroller">
                            <ul>
                                <li>演员信息滚动1：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>演员信息滚动2：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>演员信息滚动3：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>演员信息滚动4：滚动显示本网站其他频道内容摘要，可配置</li>
                                <li>演员信息滚动5：滚动显示本网站其他频道内容摘要，可配置</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle" id="middle">
            <div class="reports">
                <div class="container">
                    <div class="report_box">
                        通稿内容。。。做成微信聊天。。。
                    </div>
                    <div class="report_box">
                        通稿内容。。。做成微信聊天。。。
                    </div>
                    <div class="report_box">
                        通稿内容。。。做成微信聊天。。。
                    </div>
                    <div class="report_box">
                        通稿内容。。。做成微信聊天。。。
                    </div>
                    <div class="report_box">
                        通稿内容。。。做成微信聊天。。。
                    </div>

                    <div class="page_button">
                        <ul class="report_menu">
                            <li class="report_step">
                                <a target="_blank" href="#">滚屏</a>
                            </li>
                            <li class="report_step">
                                <a target="_blank" href="#">刷新</a>
                            </li>
                            <li class="report_step">
                                <a target="_blank" href="#">过滤</a>
                            </li>
                            <li class="report_step">
                                <a target="_blank" href="#">发布</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_box">
        </div>
    </div>
</div><!-- END of box -->
</body>

<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/footer.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/nav.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/header.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/component-header.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/iscroll/iscroll.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>