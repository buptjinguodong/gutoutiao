<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index()
    {
        $this->display('index');
    }

    public function get_latest_news()
    {
    	// 最新的十条新闻
    	$count = 10;
    	$page = 1;
    	$cat = $_GET('cat')?$_GET('cat'):0;
    	$_t = $_GET('_t');

    	// 返回数据格式
    	$res = {
    		'public_time' => 'fetch_time',
    		'title' => 'title',
    		'url' => 'url',
    		'type' => 'type', // 内容
    		'source' => 'source', // 内容
    		'content_url' => 'article_id', // 指向 本地域名 下对应的文章内容
    	}
    }

    public function get_article()
    {
    	$article_id = $_GET('id');
    	
    	$content = "
    	<title></title>

    	";

    }

}