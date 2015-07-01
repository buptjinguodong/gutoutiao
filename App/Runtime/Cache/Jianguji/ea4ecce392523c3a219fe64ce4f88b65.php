<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Gutoutiao</title>

    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/jianguji.css">

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
                <li class="<?php if($tag == 'jiangu'){ echo 'active'; }?>">
                    <a href="<?php echo U('Jianguji/Index/jiangu');?>">捡股</a>
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
    <div class="container">
	<form class="form-inline">
		<div class="filter">
			<div class="row">
				<div class="col-xs-2">
					<select class="form-control">
					  <option>我的资产</option>
					  <option>-Save Screen</option>
					  <option>-Edit Screens</option>
					</select>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						    <label for="order">排序: </label>
						    <select class="form-control" id="order">
							  <option>行业</option>
							  <option>-Save Screen</option>
							  <option>-Edit Screens</option>
							</select>
							<select class="form-control" id="order_type">
							  <option>升序</option>
							  <option>-Save Screen</option>
							  <option>-Edit Screens</option>
							</select>
					  </div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						    <label for="signal">信号: </label>
						    <select class="form-control" id="signal">
							  <option>空(全部股票)</option>
							  <option>-Save Screen</option>
							  <option>-Edit Screens</option>
							</select>
					  </div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
					    <label for="ticker">股票代码: </label>
					    <select class="form-control" id="ticker">
						  <option></option>
						  <option>-Save Screen</option>
						  <option>-Edit Screens</option>
						</select>
					</div>
				</div>
				<div class="col-xs-1">
					<button class='btn pull-right'>Filters<i class="fa fa-lg fa-caret-down"></i></button>
				</div>
			</div>
			<div class="filter_tag">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#descriptive" aria-controls="descriptive" role="tab" data-toggle="tab">我的面</a></li>
				    <li role="presentation"><a href="#fundamental" aria-controls="fundamental" role="tab" data-toggle="tab">基本面</a></li>
				    <li role="presentation"><a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">技术面</a></li>
				    <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">全部</a></li>
				</ul>
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="descriptive">
				    	<div class="filter_item">
				    		<div class="row">
				    			<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">股票类型</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">行业</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">概念</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">地域</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">总市值</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">流通市值</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">动态市盈率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">静态市盈率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">每股收益</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">每股净产值</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">净资产收益率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">市销率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">利润增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">净资产增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">资产收益率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">主营收入增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">净利润增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">总资产增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">销售毛利率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">销售净利率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">资产负债率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">雪球累计关注人数</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">雪球累计讨论次数</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">雪球累计交易分享数</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">雪球关注增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">雪球讨论增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
									    <label for="exchange">雪球交易增长率</label>
									    <select class="form-control" id="exchange">
										  <option>全部</option>
										  <option>-Save Screen</option>
										  <option>-Edit Screens</option>
										</select>
								  	</div>
								</div>
								
				    		</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="fundamental">.fa</div>
				    <div role="tabpanel" class="tab-pane" id="technical">..tt.</div>
				    <div role="tabpanel" class="tab-pane" id="all">..aall.</div>
				</div>
				<div class="tab-type">
					<ul>
						<li class="active">
							概况
						</li>
						<li>
							财务
						</li>
						<li>
							K线分析
						</li>
						<li>
							机构评级
						</li>
						<li>
							重要指标
						</li>
						<li>
							股东分布
						</li>
						<li>
							业务构成
						</li>
						<li>
							杜邦分析
						</li>
						<li>
							机构持股
						</li>
						<li>
							今日表现
						</li>
						<li>
							本周表现
						</li>
						<li>
							本月表现
						</li>
						<li>
							本季度表现
						</li>
						<li>
							本年度表现
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</form>
	<div class="data">
		<div class="title">
			<span> 总共: 2720 #1</span>
		</div>
		<div class="">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="xuehao">序号</th>
						<th class="daima">代码</th>
						<th class="mingcheng">名称</th>
						<th class="company">最新价</th>
						<th class="sector">涨跌</th>
						<th class="industry">涨跌幅</th>
						<th class="country">振幅</th>
						<th class="Market Cap">成交量(手)</th>
						<th class="pe">成交额(万)</th>
						<th class="price">昨收</th>
						<th class="change">今开</th>
						<th class="volume">最高</th>
						<th class="volume">最低</th>
					</tr>
				</thead>
				<tbody>

					<tr><td>1</td><td><a href="http://quote.eastmoney.com/sh603838.html" target="_blank">603838</a></td><td><a href="http://quote.eastmoney.com/sh603838.html" target="_blank">N四通</a></td><td><span class="digi-up">11.13</span></td><td><span class="digi-up">3.40</span></td><td><span class="digi-up">43.98%</span></td><td><span>0.00%</span></td><td><span>121</span></td><td><span>13</span></td><td><span>7.73</span></td><td><span class="digi-up">11.13</span></td><td><span class="digi-up">11.13</span></td><td><span class="digi-up">11.13</span></td></tr>

					<tr class="bg"><td>2</td><td><a href="http://quote.eastmoney.com/sh600548.html" target="_blank">600548</a></td><td><a href="http://quote.eastmoney.com/sh600548.html" target="_blank">深高速</a></td><td><span class="digi-up">9.41</span></td><td><span class="digi-up">0.86</span></td><td><span class="digi-up">10.06%</span></td><td><span>10.06%</span></td><td><span>290839</span></td><td><span>26815</span></td><td><span>8.55</span></td><td><span class="digi-up">8.75</span></td><td><span class="digi-up">9.41</span></td><td><span class="digi">8.55</span></td></tr>


					<tr><td>3</td><td><a href="http://quote.eastmoney.com/sh600649.html" target="_blank">600649</a></td><td><a href="http://quote.eastmoney.com/sh600649.html" target="_blank">城投控股</a></td><td><span class="digi-up">10.29</span></td><td><span class="digi-up">0.94</span></td><td><span class="digi-up">10.05%</span></td><td><span>0.00%</span></td><td><span>10102</span></td><td><span>1039</span></td><td><span>9.35</span></td><td><span class="digi-up">10.29</span></td><td><span class="digi-up">10.29</span></td><td><span class="digi-up">10.29</span></td></tr>

					<tr class="bg"><td>4</td><td><a href="http://quote.eastmoney.com/sh603085.html" target="_blank">603085</a></td><td><a href="http://quote.eastmoney.com/sh603085.html" target="_blank">天成自控</a></td><td><span class="digi-up">11.52</span></td><td><span class="digi-up">1.05</span></td><td><span class="digi-up">10.03%</span></td><td><span>0.00%</span></td><td><span>34</span></td><td><span>3</span></td><td><span>10.47</span></td><td><span class="digi-up">11.52</span></td><td><span class="digi-up">11.52</span></td><td><span class="digi-up">11.52</span></td></tr>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jianguji.js"></script>


</body>
</html>