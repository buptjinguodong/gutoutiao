<?php

class NewsModel{

	public function init(){
	}
	/**
	 * 注册，返回JSON字符串结果
	 * @return [type] [description]
	 */
	public function getNews($page=0, $per=10){
		$token = $_SESSION['token'];
		$handle_url = C('API_URL')."Method=GetNews"."&AccessToken=".$token."&page=".$page."&per=".$per;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $handle_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$res = curl_exec($ch);
		return $res;
	}

}