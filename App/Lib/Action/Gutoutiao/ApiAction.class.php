<?php
// 本类由系统自动生成，仅供测试用途
class ApiAction extends Action{

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
        $news = $article->where($_where)->select();
        $res = array();	
        if(count($news) == 0){
        	echo '';
        }else{
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
	        $content_url = '/var/code/'.$content_url;
	        $content = file_get_contents($content_url);
        	$content = "<title>".$title."</title><content>".$content."</content>";
	    	echo $content;
        }
    }
}



