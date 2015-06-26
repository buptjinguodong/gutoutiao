<?php
// 本类由系统自动生成，仅供测试用途
class ApiAction extends Action {

    public function index()
    {
        echo 'api index';
    }

    public function get_latest_news()
    {
        $cat = I('get.cat');
        $_t = I('get._t');
        // echo 'cat: '.$cat.'<br/>';
        // echo '_t: '.$_t;

        $gushijujiao = M('gushijujiao');
        if($cat!='0'){
            $_where = 'time_stamp > '.$_t.' and type='.$cat;
        }else{
            $_where = 'time_stamp > '.$_t;
        }
        // echo $_where;
        $news = $gushijujiao->where($_where)->order('time_stamp desc')->limit(10)->select(); 

        // p($news);
        $news_json = json_encode($news);
        // echo $news_json;
        $res = array();
        foreach ($news as $new){
        	// p($new);
        	array_push($res, array('publish_time' => $new['time_stamp'],
        		'title' => $new['title'],
        		'url' => $new['url'],
        		'type' => $new['type'],
        		'source' => $new['source'],
        		'review' => 'review',
        		'img_url' => '',
        		'content_url' => U('Gutoutiao/Api/get_article').'?article_url='.$new['url']
        		)
        	);
        }
        echo json_encode($res);
    }


    public function get_article()
    {
    	$article_id = I('get.article_url');
    	$article = M('article');
        $_where = "url = '".$article_id."'";
        // echo $_where;
        $news = $article->where($_where)->select();
        $res = array();	
        if(count($news) == 0){
        	p($news);
        	echo '';
        }else{
        	p($news);
        	$news = $news[0];
        	$gushijujiao = M('gushijujiao');
        	$menu = $gushijujiao->where($_where)->select();
        	if(count($menu)!=0){
        		$title = $menu[0]['title'];
        	}else{
        		$title = $news['title'];	
        	}
	        $review = $news['review'];
	        $content_url = $news['content'];
	        // print $content_url;
	        $content_url = '/root/code/'.$content_url;
	        print $content_url;
	        // $content = file_get_contents($content_url);
	        // $content = file_get_contents("/root/code/./gutoutiao/gushijujiao/yaowen/http://stock.eastmoney.com/news/1449,20150626520928153.html");
			$content = file($content_url);
	        p($content);
	        // $content = 'kjkj';
	    	$content = "<title>".$title."</title><content>".$content."</content>";
	    	echo $content;
        }
    }
}